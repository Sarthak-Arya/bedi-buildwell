<?php

/**
 * Laravel Artisan Command Helper for LinkedIn RSS Setup
 * 
 * This file provides helper functions for LinkedIn RSS setup.
 * You can run: php artisan tinker
 * Then copy-paste functions from here to test your RSS feed.
 */

if (!function_exists('test_linkedin_rss')) {
    /**
     * Test LinkedIn RSS Feed
     * 
     * Usage in tinker:
     * test_linkedin_rss('https://your-rss-feed-url-here')
     */
    function test_linkedin_rss($rssUrl) {
        try {
            $response = \Illuminate\Support\Facades\Http::timeout(10)->get($rssUrl);
            
            if (!$response->successful()) {
                return [
                    'success' => false,
                    'error' => 'HTTP ' . $response->status(),
                    'message' => 'Failed to fetch RSS feed'
                ];
            }
            
            $xml = simplexml_load_string($response->body());
            
            if ($xml === false) {
                return [
                    'success' => false,
                    'error' => 'Invalid XML',
                    'message' => 'RSS feed is not valid XML'
                ];
            }
            
            $posts = [];
            $items = $xml->entry ?? $xml->channel->item ?? [];
            
            foreach ($items as $item) {
                $title = (string)($item->title ?? '');
                $link = '';
                
                if (isset($item->link['href'])) {
                    $link = (string)$item->link['href'];
                } elseif (isset($item->link)) {
                    $link = (string)$item->link;
                } elseif (isset($item->guid)) {
                    $link = (string)$item->guid;
                }
                
                if ($title) {
                    $posts[] = [
                        'title' => $title,
                        'link' => $link
                    ];
                }
            }
            
            return [
                'success' => true,
                'posts_count' => count($posts),
                'posts' => array_slice($posts, 0, 5), // First 5 posts
                'format' => isset($xml->entry) ? 'Atom' : 'RSS 2.0'
            ];
            
        } catch (\Exception $e) {
            return [
                'success' => false,
                'error' => get_class($e),
                'message' => $e->getMessage()
            ];
        }
    }
}

// If running directly, test the configured RSS URL
if (php_sapi_name() === 'cli' && basename(__FILE__) === basename($_SERVER['PHP_SELF'])) {
    require __DIR__ . '/vendor/autoload.php';
    
    $app = require_once __DIR__ . '/bootstrap/app.php';
    $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
    
    $rssUrl = config('services.linkedin.rss_url');
    
    if (empty($rssUrl)) {
        echo "❌ LINKEDIN_RSS_URL is not configured in .env file\n";
        echo "Please add: LINKEDIN_RSS_URL=https://your-rss-feed-url\n";
        exit(1);
    }
    
    echo "Testing RSS Feed: $rssUrl\n";
    echo str_repeat("=", 70) . "\n\n";
    
    $result = test_linkedin_rss($rssUrl);
    
    if ($result['success']) {
        echo "✅ RSS Feed is working!\n\n";
        echo "Format: {$result['format']}\n";
        echo "Posts found: {$result['posts_count']}\n\n";
        echo "Sample posts:\n";
        foreach ($result['posts'] as $i => $post) {
            echo ($i + 1) . ". {$post['title']}\n";
            echo "   Link: {$post['link']}\n\n";
        }
    } else {
        echo "❌ RSS Feed test failed!\n\n";
        echo "Error: {$result['error']}\n";
        echo "Message: {$result['message']}\n";
        exit(1);
    }
}

