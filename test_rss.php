<?php

/**
 * RSS Feed Tester
 * 
 * This script helps you test if your LinkedIn RSS feed URL is working correctly.
 * 
 * Usage:
 *   php test_rss.php "https://your-rss-feed-url-here"
 */

if (php_sapi_name() !== 'cli') {
    die("This script must be run from the command line.\n");
}

$rssUrl = $argv[1] ?? null;

if (!$rssUrl) {
    echo "Usage: php test_rss.php \"https://your-rss-feed-url-here\"\n";
    exit(1);
}

echo "Testing RSS Feed: $rssUrl\n";
echo str_repeat("=", 70) . "\n\n";

// Test 1: Check if URL is accessible
echo "1. Testing URL accessibility...\n";
$context = stream_context_create([
    'http' => [
        'method' => 'GET',
        'timeout' => 10,
        'user_agent' => 'Mozilla/5.0 (compatible; RSS Feed Tester)',
        'follow_location' => true,
        'max_redirects' => 5
    ]
]);

$content = @file_get_contents($rssUrl, false, $context);

if ($content === false) {
    echo "   ❌ ERROR: Cannot fetch RSS feed. URL may be invalid or inaccessible.\n";
    echo "   Check if the URL is correct and the service is running.\n\n";
    exit(1);
}

echo "   ✅ URL is accessible\n";
echo "   Content length: " . strlen($content) . " bytes\n\n";

// Test 2: Check if it's valid XML
echo "2. Testing XML validity...\n";
libxml_use_internal_errors(true);
$xml = @simplexml_load_string($content);

if ($xml === false) {
    echo "   ❌ ERROR: Invalid XML format\n";
    $errors = libxml_get_errors();
    foreach ($errors as $error) {
        echo "   " . trim($error->message) . "\n";
    }
    libxml_clear_errors();
    exit(1);
}

echo "   ✅ Valid XML format\n\n";

// Test 3: Check RSS/Atom structure
echo "3. Testing RSS/Atom structure...\n";
$isRss = isset($xml->channel);
$isAtom = isset($xml->entry);

if ($isRss) {
    echo "   ✅ RSS 2.0 format detected\n";
    echo "   Channel title: " . (string)($xml->channel->title ?? 'N/A') . "\n";
    $itemCount = count($xml->channel->item ?? []);
    echo "   Items found: $itemCount\n";
    
    if ($itemCount > 0) {
        echo "\n   First item preview:\n";
        $firstItem = $xml->channel->item[0];
        echo "   - Title: " . (string)($firstItem->title ?? 'N/A') . "\n";
        echo "   - Link: " . (string)($firstItem->link ?? 'N/A') . "\n";
        echo "   - Date: " . (string)($firstItem->pubDate ?? 'N/A') . "\n";
    }
} elseif ($isAtom) {
    echo "   ✅ Atom format detected\n";
    echo "   Feed title: " . (string)($xml->title ?? 'N/A') . "\n";
    $entryCount = count($xml->entry ?? []);
    echo "   Entries found: $entryCount\n";
    
    if ($entryCount > 0) {
        echo "\n   First entry preview:\n";
        $firstEntry = $xml->entry[0];
        echo "   - Title: " . (string)($firstEntry->title ?? 'N/A') . "\n";
        $link = isset($firstEntry->link['href']) ? (string)$firstEntry->link['href'] : (string)($firstEntry->link ?? 'N/A');
        echo "   - Link: $link\n";
        echo "   - Date: " . (string)($firstEntry->published ?? $firstEntry->updated ?? 'N/A') . "\n";
    }
} else {
    echo "   ⚠️  WARNING: Unknown format (not RSS 2.0 or Atom)\n";
    echo "   Root element: " . $xml->getName() . "\n";
}

echo "\n" . str_repeat("=", 70) . "\n";
echo "✅ RSS Feed test completed successfully!\n";
echo "You can use this URL in your .env file: LINKEDIN_RSS_URL=$rssUrl\n";

