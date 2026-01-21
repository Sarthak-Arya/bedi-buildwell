<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
        name="viewport">
    <link rel="profile" href="//gmpg.org/xfn/11" />

    {{-- SEO Meta Tags --}}
    @php
        $seo = $seo ?? [];
        $seoTitle = $seo['title'] ?? 'Bedi Buildwell';
        $seoDescription = $seo['description'] ?? 'Bedi Buildwell - Leading construction company delivering quality projects with precision and excellence.';
        $seoKeywords = $seo['keywords'] ?? 'construction, building, construction company, Bedi Buildwell';
        $seoCanonical = $seo['canonical'] ?? url()->current();
    @endphp
    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeywords }}">
    
    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $seoCanonical }}" />
    
    {{-- Open Graph Tags --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seo['og_title'] ?? $seoTitle }}" />
    <meta property="og:description" content="{{ $seo['og_description'] ?? $seoDescription }}" />
    <meta property="og:url" content="{{ $seoCanonical }}" />
    <meta property="og:site_name" content="Bedi Buildwell" />
    @if(isset($seo['og_image']) && !empty($seo['og_image']))
    <meta property="og:image" content="{{ $seo['og_image'] }}" />
    @endif
    
    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $seo['twitter_title'] ?? $seoTitle }}" />
    <meta name="twitter:description" content="{{ $seo['twitter_description'] ?? $seoDescription }}" />
    @if(isset($seo['twitter_image']) && !empty($seo['twitter_image']))
    <meta name="twitter:image" content="{{ $seo['twitter_image'] }}" />
    @endif
    
    {{-- Favicon and Icons --}}
    <link rel="icon" href="{{ asset('assets/logo_dark.svg') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/logo_dark.svg') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/logo_dark.svg') }}" />
    
    {{-- Google Fonts --}}
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRubik%3A300%2C500%2C400%7CRoboto%3A400&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800%2C900italic%7CRubik%3A300%2C500%2C400%7CRoboto%3A400&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800%2C900italic%7CRubik%3A300%2C500%2C400%7CRoboto%3A400&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap" />
    </noscript>
    
    {{-- Font Awesome 5 CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- CSS files --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    
    {{-- Robots Meta --}}
    <meta name='robots' content='max-image-preview:large, index, follow' />
    
    {{-- DNS Prefetch --}}
    <link rel='dns-prefetch' href='//static.addtoany.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
    
    {{-- RSS Feed Links --}}
    <link rel="alternate" type="application/rss+xml" title="Bedi Buildwell &raquo; Feed"
        href="{{ url('/blog') }}" />
    
    {{-- Page-specific styles --}}
    @yield('styles')
    
    {{-- Structured Data (Organization Schema) --}}
    @if(isset($seo['is_homepage']) && !empty($seo['is_homepage']))
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "Bedi Buildwell",
        "url": "{{ config('app.url') }}",
        "logo": "{{ asset('assets/icons/logo_with_text_dark.png') }}",
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+91-99901-16198",
            "contactType": "Customer Service",
            "email": "info@bedibuildwell.com"
        },
        "sameAs": [
            "https://www.instagram.com/bedibuildwell",
            "https://www.linkedin.com/in/sukrit-singh-950761170"
        ]
    }
    </script>
    @endif
    
    {{-- Breadcrumb Structured Data --}}
    @php
        $hasBreadcrumbs = false;
        $breadcrumbData = null;
        if (isset($seo['breadcrumbs']) && is_array($seo['breadcrumbs']) && count($seo['breadcrumbs']) > 0) {
            $hasBreadcrumbs = true;
            $breadcrumbData = [
                '@@context' => 'https://schema.org',
                '@@type' => 'BreadcrumbList',
                'itemListElement' => []
            ];
            foreach($seo['breadcrumbs'] as $index => $breadcrumb) {
                $breadcrumbData['itemListElement'][] = [
                    '@@type' => 'ListItem',
                    'position' => $index + 1,
                    'name' => $breadcrumb['name'],
                    'item' => $breadcrumb['url']
                ];
            }
        }
    @endphp
    @if($hasBreadcrumbs && $breadcrumbData !== null)
    <script type="application/ld+json">
    {!! json_encode($breadcrumbData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
</head>

<body
    class="{{ $bodyClass ?? 'wp-singular page-template page-template-tmpl page-template-template-fullwidth page-template-tmpltemplate-fullwidth-php page wp-theme-hank theme-hank woocommerce-no-js sliding-desktop-off sliding-overlay layout-wide wpb-js-composer js-comp-ver-6.8.0 vc_responsive' }}"
    itemscope="itemscope" itemtype="https://schema.org/WebPage">

    <div id="site" class="site wrap header-position-top">
        @include('partials.header')
        @include('partials.header-sticky')
        
        <div id="site-content" class="site-content">
            <div id="content-body" class="content-body">
                <div class="content-body-inner wrap">
                    <!-- The main content -->
                    <main id="main-content" class="main-content" itemprop="mainContentOfPage">
                        <div class="main-content-inner">
                            <div class="content">
                                @yield('content')
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.main-content-inner -->
                    </main>
                    <!-- /.main-content -->
                </div>
                <!-- /.content-body-inner -->
            </div>
            <!-- /.content-body -->
        </div>
        <!-- /.site-content -->

        @include('partials.footer')
    </div>
    <!-- /.site-wrapper -->

    @include('partials.mobile-menu')

    <div id="frame">
        <span class="frame_top"></span>
        <span class="frame_right"></span>
        <span class="frame_bottom"></span>
        <span class="frame_left"></span>
    </div>

    {{-- Page-specific scripts --}}
    @yield('scripts')
</body>

</html>
