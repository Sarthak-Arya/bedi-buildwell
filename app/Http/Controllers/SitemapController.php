<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    /**
     * Generate and return the sitemap.xml
     *
     * @return Response
     */
    public function index()
    {
        $baseUrl = config('app.url');
        $now = now()->toAtomString();

        $urls = [
            // Homepage - highest priority
            [
                'loc' => $baseUrl,
                'lastmod' => $now,
                'changefreq' => 'daily',
                'priority' => '1.0',
            ],
            // Main pages - high priority
            [
                'loc' => $baseUrl . '/about',
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'loc' => $baseUrl . '/experience',
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'loc' => $baseUrl . '/contact',
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.9',
            ],
            // Secondary pages - medium priority
            [
                'loc' => $baseUrl . '/core-values',
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => $baseUrl . '/leadership',
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => $baseUrl . '/why-choose-us',
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            // Blog - medium-high priority
            [
                'loc' => $baseUrl . '/blog',
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ],
            // Calculator - lower priority
            [
                'loc' => $baseUrl . '/calculator',
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ],
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . htmlspecialchars($url['loc']) . "</loc>\n";
            $xml .= "    <lastmod>" . htmlspecialchars($url['lastmod']) . "</lastmod>\n";
            $xml .= "    <changefreq>" . htmlspecialchars($url['changefreq']) . "</changefreq>\n";
            $xml .= "    <priority>" . htmlspecialchars($url['priority']) . "</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=utf-8');
    }
}
