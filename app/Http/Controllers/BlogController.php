<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    /**
     * Display the blog page with LinkedIn posts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->fetchLinkedInPosts();
        
        return view('pages.blog', [
            'seo' => [
                'title' => 'Blog | Bedi Buildwell - Construction Insights',
                'description' => 'Read the latest construction insights, industry news, and project updates from Bedi Buildwell. Stay informed about construction trends and best practices.',
                'keywords' => 'construction blog, building insights, construction news, industry updates',
                'canonical' => url('/blog'),
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => url('/')],
                    ['name' => 'Blog', 'url' => url('/blog')],
                ],
            ],
            'posts' => $posts,
        ]);
    }

    /**
     * Fetch LinkedIn posts from RSS feed with caching.
     *
     * @return array
     */
    protected function fetchLinkedInPosts()
    {
        $cacheDuration = config('services.linkedin.cache_duration', 3600); // 1 hour default
        $rssUrl = config('services.linkedin.rss_url');

        if (empty($rssUrl)) {
            Log::warning('LinkedIn RSS URL is not configured');
            return [];
        }

        return Cache::remember('linkedin_posts', $cacheDuration, function () use ($rssUrl) {
            try {
                $response = Http::timeout(10)->get($rssUrl);

                if (!$response->successful()) {
                    Log::error('Failed to fetch LinkedIn RSS feed', [
                        'status' => $response->status(),
                        'url' => $rssUrl,
                    ]);
                    return [];
                }

                $xmlContent = $response->body();
                $xml = simplexml_load_string($xmlContent);

                if ($xml === false) {
                    Log::error('Failed to parse LinkedIn RSS XML');
                    return [];
                }

                // Handle different RSS formats (RSS 2.0 and Atom)
                $posts = [];
                
                // Check if it's Atom format
                if (isset($xml->entry)) {
                    $items = $xml->entry;
                } elseif (isset($xml->channel->item)) {
                    $items = $xml->channel->item;
                } else {
                    Log::warning('Unexpected RSS format');
                    return [];
                }

                $count = 0;
                $maxPosts = 12; // Limit to 12 posts to match grid layout

                foreach ($items as $item) {
                    if ($count >= $maxPosts) {
                        break;
                    }

                    $post = $this->parseRssItem($item);
                    
                    if (!empty($post['title'])) {
                        $posts[] = $post;
                        $count++;
                    }
                }

                return $posts;

            } catch (\Exception $e) {
                Log::error('Exception while fetching LinkedIn posts', [
                    'message' => $e->getMessage(),
                    'url' => $rssUrl,
                ]);
                return [];
            }
        });
    }

    /**
     * Parse an RSS item into a structured post array.
     *
     * @param \SimpleXMLElement $item
     * @return array
     */
    protected function parseRssItem($item)
    {
        $post = [
            'title' => '',
            'content' => '',
            'excerpt' => '',
            'date' => '',
            'link' => '',
            'image' => '',
        ];

        // Handle Atom format
        if (isset($item->title)) {
            $post['title'] = (string) $item->title;
        }

        if (isset($item->link)) {
            // Atom format: link can be an attribute or element
            if (isset($item->link['href'])) {
                $post['link'] = (string) $item->link['href'];
            } else {
                $post['link'] = (string) $item->link;
            }
        } elseif (isset($item->guid)) {
            $post['link'] = (string) $item->guid;
        }

        // Get content/description
        $content = '';
        if (isset($item->content)) {
            $content = (string) $item->content;
        } elseif (isset($item->summary)) {
            $content = (string) $item->summary;
        } elseif (isset($item->description)) {
            $content = (string) $item->description;
        }

        // Clean HTML and create excerpt
        $cleanContent = strip_tags($content);
        $post['content'] = $cleanContent;
        $post['excerpt'] = $this->truncateText($cleanContent, 150);

        // Extract image from content if available
        if (preg_match('/<img[^>]+src=["\']([^"\']+)["\']/', $content, $matches)) {
            $post['image'] = $matches[1];
        } elseif (isset($item->enclosure['url'])) {
            $post['image'] = (string) $item->enclosure['url'];
        }

        // Handle date
        $date = null;
        if (isset($item->published)) {
            $date = strtotime((string) $item->published);
        } elseif (isset($item->updated)) {
            $date = strtotime((string) $item->updated);
        } elseif (isset($item->pubDate)) {
            $date = strtotime((string) $item->pubDate);
        }

        if ($date) {
            $post['date'] = date('F j, Y', $date);
        }

        return $post;
    }

    /**
     * Truncate text to specified length.
     *
     * @param string $text
     * @param int $length
     * @return string
     */
    protected function truncateText($text, $length = 150)
    {
        if (strlen($text) <= $length) {
            return $text;
        }

        return substr($text, 0, $length) . '...';
    }
}

