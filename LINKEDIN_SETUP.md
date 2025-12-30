# LinkedIn RSS Feed Setup Guide

## Quick Setup Instructions

### Step 1: Add Configuration to .env File

Open your `.env` file and add these lines:

```env
# LinkedIn RSS Feed Configuration
LINKEDIN_RSS_URL=https://your-rss-service-url-here
LINKEDIN_CACHE_DURATION=3600
```

**Important:** Replace `https://your-rss-service-url-here` with your actual RSS feed URL (see options below).

### Step 2: Get Your RSS Feed URL

Since LinkedIn personal profiles don't have direct RSS feeds, you have these options:

#### Option A: Use RSS-Bridge (Recommended - Self-Hosted)

1. **Install RSS-Bridge on your server:**
   ```bash
   git clone https://github.com/RSS-Bridge/rss-bridge.git
   cd rss-bridge
   # Follow installation instructions at: https://github.com/RSS-Bridge/rss-bridge
   ```

2. **Once installed, your RSS URL will be:**
   ```
   https://your-domain.com/?action=display&bridge=LinkedIn&u=sukrit-singh-950761170&format=Rss2
   ```

#### Option B: Use a Public RSS-Bridge Instance

Try these public instances (availability may vary):

1. Try: `https://rss-bridge.privet.party/` or similar public instances
2. Format: `https://public-instance.com/?action=display&bridge=LinkedIn&u=sukrit-singh-950761170&format=Rss2`

**Note:** Public instances may have rate limits or may not support LinkedIn.

#### Option C: Manual RSS Feed Creation

Create a simple RSS feed file manually with your LinkedIn posts and host it.

### Step 3: Test Your RSS Feed

1. **Test the RSS URL in your browser** - you should see XML content
2. **Or use curl:**
   ```bash
   curl "your-rss-feed-url-here"
   ```

### Step 4: Update .env and Clear Cache

1. Add your RSS feed URL to `.env` file
2. Run these commands:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```

### Step 5: Visit Your Blog Page

Visit `http://localhost:8000/blog` (or your domain) to see your LinkedIn posts!

---

## Troubleshooting

### "No posts available at the moment"

- Check if `LINKEDIN_RSS_URL` is set in `.env`
- Verify RSS feed URL works (test in browser)
- Check `storage/logs/laravel.log` for errors
- Clear cache: `php artisan config:clear && php artisan cache:clear`

### RSS Feed Not Working

- Verify the LinkedIn username is correct: `sukrit-singh-950761170`
- Check if RSS-Bridge service is running (if self-hosted)
- Try a different RSS format (Rss2, Atom, etc.)

### Cache Duration

Default cache is 1 hour (3600 seconds). To change:
- Edit `LINKEDIN_CACHE_DURATION` in `.env`
- Clear cache after changes

---

## Alternative: Using LinkedIn Embed Feature

If RSS feeds don't work, you can manually embed LinkedIn posts using LinkedIn's embed feature:

1. Go to your LinkedIn post
2. Click "..." (More options)
3. Select "Embed this post"
4. Copy the embed code
5. Add to your blog template manually

---

## Support

If you need help:
1. Check `storage/logs/laravel.log` for error messages
2. Verify RSS feed URL is accessible
3. Test RSS feed format is valid XML/RSS

