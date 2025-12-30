#!/bin/bash

# LinkedIn RSS Setup Script
# This script helps you configure LinkedIn RSS feed in your Laravel application

echo "=========================================="
echo "LinkedIn RSS Feed Setup"
echo "=========================================="
echo ""

# Check if .env file exists
if [ ! -f .env ]; then
    echo "❌ Error: .env file not found!"
    echo "Please create a .env file first by copying .env.example"
    exit 1
fi

echo "Step 1: Enter your LinkedIn RSS Feed URL"
echo "----------------------------------------"
echo "Example: https://your-rss-bridge.com/?action=display&bridge=LinkedIn&u=sukrit-singh-950761170&format=Rss2"
echo ""
read -p "RSS Feed URL: " rss_url

if [ -z "$rss_url" ]; then
    echo "❌ Error: RSS Feed URL cannot be empty"
    exit 1
fi

echo ""
echo "Step 2: Cache Duration (in seconds)"
echo "----------------------------------------"
echo "Default: 3600 (1 hour)"
echo "Recommended: 3600 (1 hour) to 7200 (2 hours)"
read -p "Cache Duration [3600]: " cache_duration
cache_duration=${cache_duration:-3600}

echo ""
echo "Step 3: Updating .env file..."
echo "----------------------------------------"

# Remove existing LinkedIn configuration if present
sed -i.bak '/^LINKEDIN_RSS_URL=/d' .env
sed -i.bak '/^LINKEDIN_CACHE_DURATION=/d' .env

# Add new configuration
echo "" >> .env
echo "# LinkedIn RSS Feed Configuration" >> .env
echo "LINKEDIN_RSS_URL=$rss_url" >> .env
echo "LINKEDIN_CACHE_DURATION=$cache_duration" >> .env

echo "✅ Configuration added to .env file"
echo ""

echo "Step 4: Clearing Laravel cache..."
echo "----------------------------------------"

php artisan config:clear
php artisan cache:clear

echo "✅ Cache cleared"
echo ""

echo "=========================================="
echo "Setup Complete!"
echo "=========================================="
echo ""
echo "Next steps:"
echo "1. Test your RSS feed URL: php test_rss.php \"$rss_url\""
echo "2. Visit your blog page: http://localhost:8000/blog"
echo "3. Check logs if posts don't appear: tail -f storage/logs/laravel.log"
echo ""

