<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
        name="viewport">
    <link rel="profile" href="//gmpg.org/xfn/11" />

    <title>Bedi Buildwell</title>
    <link rel="icon" href="{{ asset('assets/logo_dark.svg') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/logo_dark.svg') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/logo_dark.svg') }}" />
    {{--  google fonts link --}}
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRubik%3A300%2C500%2C400%7CRoboto%3A400&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRubik%3A300%2C500%2C400%7CRoboto%3A400&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap"
        media="print" onload="this.media='all'" />
    <noscript>

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRubik%3A300%2C500%2C400%7CRoboto%3A400&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap" />
    </noscript>
    {{-- CSS files --}}
    {{-- <link rel="stylesheet" href="https://live.21lab.co/hank/wp-content/cache/min/1/308ad0553bcac79c7cebff97685e6bad.css"
        media="all" data-minify="1" /> --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    {{-- robots file --}}
    <meta name='robots' content='max-image-preview:large' />
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    {{--  prefetch fonts file --}}
    <link rel='dns-prefetch' href='//static.addtoany.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />

    {{-- RSS feed files --}}
    <link rel="alternate" type="application/rss+xml" title="Bedi Buildwell &raquo; Feed"
        href="https://live.21lab.co/hank/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Bedi Buildwell &raquo; Comments Feed"
        href="https://live.21lab.co/hank/comments/feed/" />



    <style id='hank-inline-css' type='text/css'>
        body,
        .site,
        .mask::after,
        .mask::before {
            background-color: #ffffff;
        }

        .site-topbar {
            background-color: #000000;
            color: #888888;
            font-size: 14px;
            line-height: 1.3em;
        }

        .site-header-sticky,
        .site-header-sticky .widget.widget_search {
            background-color: #ffffff;
        }

        .content-header {
            background-color: #000000;
            background-image: url(https://live.21lab.co/hank/wp-content/uploads/2019/10/bg-title.jpg);
            background-position: bottom right;
            background-repeat: no-repeat;
            background-size: contain;
            background-attachment: scroll;
            margin-bottom: 80px;
            padding-top: 120px;
            padding-bottom: 50px;
        }

        body {
            font-family: Jost;
            font-style: normal;
            color: #000000;
            font-size: 16px;
            line-height: 150%;
        }

        h1 {
            font-size: 64px;
            line-height: 1em;
        }

        h2 {
            font-size: 48px;
            line-height: 1.1em;
        }

        h3 {
            font-size: 32px;
            line-height: 1.1em;
        }

        h4 {
            font-size: 24px;
            line-height: 1.2em;
        }

        h5 {
            font-size: 18px;
            line-height: 1.2em;
        }

        h6 {
            color: #34b8e1;
            text-transform: uppercase;
            font-size: 12px;
            line-height: 1.2em;
            letter-spacing: 1px;
        }

        .site-header .navigator>.menu>li a {
            text-transform: lowercase;
            font-size: 21px;
            line-height: 16px;
        }

        .site-header-sticky .navigator>.menu>li a {
            text-transform: lowercase;
            font-size: 21px;
            line-height: 16px;
        }

        .content-header .page-title-inner,
        .page-title .subtitle {
            color: #ffffff;
            font-size: 96px;
            line-height: 1em;
        }

        .content-header .breadcrumbs,
        .content-header .down-arrow a {
            color: #ffffff;
            font-size: 13px;
        }

        .widget>.widget-title {
            font-size: 21px;
            line-height: 32px;
            margin-top: 0px;
            margin-bottom: 20px;
        }

        .widget {
            font-size: 15px;
            line-height: 1.3em;
            margin-bottom: 60px;
        }

        .sliding-menu {
            text-transform: lowercase;
            font-size: 32px;
            line-height: 30px;
            background-color: #FF6A00;
        }

        .content-bottom-widgets .widget {
            margin-bottom: 20px;
        }

        .site-footer {
            color: #999999;
            font-size: 14px;
            border-top: 0px none #000000;
            border-right: 0px none #000000;
            border-bottom: 0px none #000000;
            border-left: 0px none #000000;
            background-color: #000000;
        }

        .footer-copyright {
            color: rgba(255, 255, 255, 0.7);
        }

        a {
            color: #34b8e1;
        }

        a:hover {
            color: #000000;
        }

        .site-topbar a {
            color: #888888;
        }

        .site-topbar a:hover,
        .site-topbar .menu-top li:hover a {
            color: #ffffff;
        }

        .site-header .off-canvas-toggle,
        .site-header .navigator .menu>li a,
        .site-header a {
            color: #ffffff;
        }

        .site-header .navigator .menu>li.current-menu-item>a,
        .site-header .navigator .menu>li.current_page_item>a,
        .site-header .navigator .menu>li.current-menu-ancestor>a,
        .site-header .navigator .menu>li.current-menu-parent>a,
        .site-header .navigator .menu>li.current-page-ancestor>a,
        .site-header .navigator .menu.menu-extras>li>a,
        .site-header .navigator .menu.menu-extras .search-field,
        .site-header .off-canvas-toggle,
        .site-header .off-canvas-toggle:hover {
            color: #FF6A00;
        }

        .site-header-sticky .off-canvas-toggle,
        .site-header-sticky .navigator .menu>li a,
        .site-header-sticky a {
            color: #999999;
        }

        .site-header-sticky .off-canvas-toggle:hover,
        .site-header-sticky .navigator .menu>li:hover>a,
        .site-header-sticky a:hover {
            color: #000000;
        }

        .site-header-sticky .navigator .menu>li.current-menu-item>a,
        .site-header-sticky .navigator .menu>li.current_page_item>a,
        .site-header-sticky .navigator .menu>li.current-menu-ancestor>a,
        .site-header-sticky .navigator .menu>li.current-menu-parent>a,
        .site-header-sticky .navigator .menu>li.current-page-ancestor>a,
        .site-header-sticky .navigator .menu.menu-extras>li>a,
        .site-header-sticky .navigator .menu.menu-extras .search-field,
        .site-header-sticky .off-canvas-toggle,
        .site-header-sticky .off-canvas-toggle:hover {
            color: #000000;
        }

        .breadcrumbs a {
            color: rgba(255, 255, 255, 0.7);
        }

        .breadcrumbs a:hover {
            color: #ffffff;
        }

        .sliding-menu a {
            color: #000000;
        }

        .site-footer a {
            color: #ffffff;
        }

        .site-footer .footer-copyright a:hover {
            color: #FF6A00;
        }

        .wrap {
            width: 1680px;
            max-width: 90%;
        }

        .content-body-inner {
            padding-bottom: 80px;
        }

        .content>.vc_row>.row-inner,
        .content>.vc_section>.vc_row>.row-inner {
            width: 1710px;
            margin: 0 auto;
        }

        .site-header .header-brand {
            margin-top: 45px;
            margin-bottom: 46px;
        }

        .site-header .off-canvas-toggle,
        .site-header .navigator .menu>li>a,
        .site-header .menu-extras>li>a {
            padding-top: 5px;
            padding-bottom: 4px;
        }

        .site-header-sticky .header-brand {
            margin-top: 30px;
            margin-bottom: 31px;
        }

        .site-header-sticky .off-canvas-toggle,
        .site-header-sticky .navigator .menu>li>a,
        .site-header-sticky .menu-extras>li>a {
            padding-top: 5px;
            padding-bottom: 4px;
        }

        .content-header .content-header-inner {
            height: 32vh;
        }

        .logo.logoDefault {
            width: 180px;
            height: 104px;
            max-width: 180px;
            object-fit: contain;
        }

        .logo.logoLight {
            width: 180px;
            height: 104px;
            max-width: 180px;
            object-fit: contain;
        }

        .logo.logoDark {
            width: 180px;
            height: 104px;
            max-width: 180px;
            object-fit: contain;
        }

        /* Fix Font Awesome 5 overrides - force Font Awesome 4 */
        .fa.fa-facebook-square,
        .fa.fa-twitter,
        .fa.fa-linkedin-square,
        .fa.fa-twitter-square {
            font-family: "FontAwesome" !important;
        }

        .sliding-menu .off-canvas-wrap {
            padding-top: 40px;
            padding-right: 40px;
            padding-left: 40px;
        }

        .button,
        input[type="button"],
        input[type="submit"],
        button {
            background: #000000;
            color: #ffffff;
            font-size: 16px;
            line-height: 20px;
            padding-top: 21px;
            padding-right: 40px;
            padding-bottom: 19px;
            padding-left: 40px;
            border-top: 0px none #000000;
            border-right: 0px none #000000;
            border-bottom: 0px none #000000;
            border-left: 0px none #000000;
            border-radius: 0px;
        }

        input,
        textarea,
        select {
            background: rgba(255, 255, 255, 0);
            font-family: Jost;
            font-weight: 300;
            color: #000000;
            font-size: 15px;
            line-height: 19px;
            padding-top: 20px;
            padding-right: 60px;
            padding-bottom: 18px;
            padding-left: 19px;
            border: 1px solid #e6e6e6;
            border-radius: 0px;
        }

        .content-bottom-widgets {
            background-image: url(https://live.21lab.co/hank/wp-content/uploads/2020/02/map-w.png);
            background-position: 90% 100%;
            background-repeat: no-repeat;
            background-size: 550px;
            background-attachment: scroll;
        }

        .site-footer .footer-copyright {
            border-top: 0px none #000000;
            border-right: 0px none #000000;
            border-bottom: 0px none #000000;
            border-left: 0px none #000000;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .content-inner[data-grid] .post,
        .content-inner[data-grid-normal] .post {
            padding-left: 30.000000px;
            padding-right: 30.000000px;
            margin-bottom: 60px;
        }

        .content-inner[data-grid],
        .content-inner[data-grid-normal] {
            margin-left: -30px;
            margin-right: -30px;
        }

        body:not(.is-loaded):after,
        body:not(.is-loaded):before {
            content: none !important;
        }

        .button.accent,
        .button.primary:hover,
        .button.checkout:hover,
        .button.primary.border,
        .button.accent.border:hover,
        #site-header .header-info-text .info-list i,
        .sliding-menu .info-list i,
        .widget.menu-style2 .menu>li .sub-menu li a i,
        rs-module-wrap .custom-arrow:hover,
        .iconlist.iconlist-icon-mini i,
        #site .imagebox:hover .box-title span:not(.box-subtitle),
        #site .vc_carousel-control:hover,
        #site .owl-buttons div:hover,
        #site .timeline .owl-buttons div,
        #site .iconbox.accent .box-icon i,
        rs-module-wrap .video-button.play:before,
        .vc_custom_heading.style1,
        .badge.style2,
        h6.badge.style2,
        #site .blog-shortcode.post-thumbnail-cover .blog-grid .post .post-inner .post-date {
            color: #ffed00;
        }

        .button.primary,
        .button.checkout,
        .button.primary.border:hover,
        .button.accent:hover,
        .bg-primary,
        .navigation.pager-numeric .page-numbers:hover,
        .widget.widget_calendar table tbody tr td#today,
        .widget.widget_calendar table tbody tr th#today,
        .navigation.post-navigation .nav-links li a:before,
        .page-links a:hover span,
        #respond .comment-form-cookies-consent input[type="checkbox"]:checked,
        #site .wpcf7-acceptance .wpcf7-list-item input[type="checkbox"]:checked,
        .info-list li i,
        .info-list li a:after,
        .widget.menu-style2 .menu>li .sub-menu li a:after,
        .widget.menu-style1 ul li a:after,
        .go-to-top a:hover:before,
        .site-content .down-arrow a:hover:before,
        .off-canvas-toggle[data-target="off-canvas-right"],
        .blog-grid .post .post-categories a,
        .post-image .featured-image,
        .projects-filter ul li.active a,
        .projects-filter ul li a:after,
        .list-style1 li:before,
        rs-module-wrap .custom-arrow,
        rs-module-wrap rs-bullets.custom .tp-bullet.selected,
        rs-module-wrap .custom .tp-bullet:hover,
        #site .vc_carousel-control,
        #site .owl-buttons div,
        #site .iconbox:hover,
        #site .iconbox.primary,
        #site .iconbox.style2,
        #site .member .member-info .member-desc:after,
        #site .member .social-links a:hover,
        #site .elements-carousel.timeline .title:before,
        #site .iconlist li .iconlist-item-content>h1:first-child:after,
        #site .iconlist li .iconlist-item-content>h2:first-child:after,
        #site .iconlist li .iconlist-item-content>h3:first-child:after,
        #site .iconlist li .iconlist-item-content>h4:first-child:after,
        #site .iconlist li .iconlist-item-content>h5:first-child:after,
        #site .iconlist li .iconlist-item-content>h6:first-child:after,
        #site .imagebox .box-button:after,
        #site .imagebox.style1 .box-title:after,
        #site .imagebox.style2:hover .box-button,
        .badge,
        .dotActive,
        a.video-lightbox:before,
        .projects-related:after,
        .shopping-cart .shopping-cart-items-count,
        .woocommerce-pagination li .page-numbers:hover,
        .woocommerce .products li .button:hover:before {
            background-color: #ffed00;
        }

        .button.primary.border:before,
        blockquote,
        .widget.widget_mc4wp_form_widget.style2 input[type="email"]:focus,
        .off-canvas-toggle[data-target="off-canvas-right"]:hover,
        .blog-large .post-wrap,
        .blog-grid .post.sticky:after,
        rs-module-wrap .video-button.play:after,
        #site .testimonial:not(.has-image),
        #site-header-sticky .extras .header-info-text .info-list span.lg:after {
            border-color: rgb(255, 111, 0);
        }

        .button:hover,
        .button.primary,
        .button.checkout,
        .button.accent.border,
        .button.primary.border:hover,
        .info-list li i,
        .go-to-top a:hover:before,
        .site-content .down-arrow a:hover:before,
        .off-canvas-toggle[data-target="off-canvas-right"],
        .blog-grid .post .post-categories a,
        rs-module-wrap .custom-arrow,
        #site .vc_carousel-control,
        #site .owl-buttons div,
        .menu .badge,
        a.video-lightbox:after {
            color: #000000;
        }

        .button.accent,
        .button.primary:hover,
        .button.checkout:hover,
        .button.border:hover,
        .button.accent.border:hover,
        .bg-accent,
        .navigation.pager-numeric .page-numbers.current,
        .navigation.pager-numeric .page-numbers.next,
        .post-page-numbers.current span,
        .menu-extras>li.search-box .widget_search:after,
        .single-post .content .post-header:after,
        .single-attachment .content .post-header:after,
        .blog-large .post-header:after,
        .widget .widget-title:after,
        .widget.widget_calendar table thead,
        .site-content .wp-block-calendar table thead th,
        .related-posts .related-posts-title:after,
        .projects-related .projects-related-title:after,
        .comments-area .comments-title:after,
        .navigation.post-navigation .nav-links li:hover a:before,
        .sliding-menu .header-info-text .info-list i,
        .blog-grid .post .post-categories a:hover,
        .blog-grid .post .post-categories span,
        rs-module-wrap .custom-arrow:hover,
        .badge.style2,
        #site .vc_carousel-control:hover,
        #site .owl-buttons div:hover,
        #site .timeline .owl-buttons div,
        #site .owl-pagination .owl-page.active,
        #site .owl-pagination .owl-page:hover,
        #site .iconbox.accent,
        #site .elements-carousel.timeline .owl-item:hover .title:before,
        #site .blog-shortcode.post-thumbnail-cover .blog-grid .post .post-inner .post-thumbnail .post-date .post-month,
        .woocommerce-pagination li .page-numbers.current,
        .woocommerce .product section.products h2:not(.woocommerce-loop-product__title):after {
            background-color: #000000;
        }

        .button:hover:before,
        .button.accent.border:before,
        .button.outline:before {
            border-color: #000000;
        }

        ::selection {
            background: #ffed00;
        }

        ::-moz-selection {
            background: #ffed00;
        }

        .related-posts .grid-posts .post .post-inner:hover .post-title a,
        .blog-masonry .post-inner:hover .post-title a,
        .single-post .content .post-content .post-right .navigation .nav-links li a:hover .post-title,
        .blog-grid .post .post-inner:hover .post-title a,
        #site .posts-carousel .post-inner:hover .post-title a,
        #site .blog-shortcode.post-thumbnail-cover .blog-grid .post .post-inner:hover .post-title,
        .woocommerce .products li:hover .woocommerce-loop-product__title,
        .woocommerce .product .summary .grouped_form table tr td.woocommerce-grouped-product-list-item__label a:hover {
            box-shadow: inset 0 -1px 0 0 #ffed00;
        }

        #site .imagebox:hover .box-title span:not(.box-subtitle) {
            -webkit-text-stroke-color: #ffed00;
        }

        .vc_custom_heading u {
            background-image: linear-gradient(180deg, transparent 65%, #ffed00 0);
        }

        #site .vc_custom_heading.style1 {
            -webkit-text-stroke-color: #000000;
        }

        #site .vc_section.shape-2:before,
        #site .vc_row.shape-2:before,
        #site .vc_section.shape-4:before,
        #site .vc_row.shape-4:before,
        .site-footer:before {
            background: repeating-linear-gradient(-45deg, transparent, transparent 4px, #ffed00 5px, #ffed00 10px, transparent 11px);
        }

        #site .vc_section.shape-3:before,
        #site .vc_row.shape-3:before,
        #site .vc_section.shape-5:before,
        #site .vc_row.shape-5:before {
            background: repeating-linear-gradient(-45deg, transparent, transparent 4px, #000000 5px, #000000 10px, transparent 11px);
        }
    </style>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>


    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>


    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>


    {{-- js --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js"
        integrity="sha256-R/JgA0/4e/03p17J5X/wGj/z/V4E/g6Qf0Jq0lG1d78=" crossorigin="anonymous" id="jquery-migrate-js">
    </script>

    {{-- AddToAny Script --}}
    <script type="text/javascript" id="addtoany-core-js-before">
        /* <![CDATA[ */
        window.a2a_config = window.a2a_config || {};
        a2a_config.callbacks = [];
        a2a_config.overlays = [];
        a2a_config.templates = {};
        a2a_config.icon_color = "transparent,#000000";
        /* ]]> */
    </script>
    <script data-minify="1" type="text/javascript" async
        src="https://live.21lab.co/hank/wp-content/cache/min/1/menu/page.js?ver=1695002910" id="addtoany-core-js"></script>
    <script type="text/javascript" async
        src="https://live.21lab.co/hank/wp-content/plugins/add-to-any/addtoany.min.js?ver=1.1" id="addtoany-jquery-js">
    </script>

    {{-- jqeury block ui --}}
    {{-- <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.1.2"
        id="jquery-blockui-js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"
        integrity="sha512-eRMZciS8N28YtK69B+y9iB11Lw+s7fH/k+xK/y1E6Q1w22j0T5O5lB9g/u1G+b2r0E/3w5i9c6Zq8Z5G+w5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" id="jquery-blockui-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/hank\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/hank\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/live.21lab.co\/hank\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.1.2"
        id="wc-add-to-cart-js"></script>
    <script data-minify="1" type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/cache/min/1/hank/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=1695002910"
        id="vc_woocommerce-add-to-cart-js-js"></script>
    <link rel="https://api.w.org/" href="https://live.21lab.co/hank/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://live.21lab.co/hank/wp-json/wp/v2/pages/40" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://live.21lab.co/hank/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.8.3" />
    <meta name="generator" content="WooCommerce 6.1.2" />
    <link rel="canonical" href="{{ route('welcome') }}" />
    <link rel='shortlink' href='https://live.21lab.co/hank/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://live.21lab.co/hank/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flive.21lab.co%2Fhank%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://live.21lab.co/hank/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flive.21lab.co%2Fhank%2F&#038;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator"
        content="Powered by Slider Revolution 6.5.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style type="text/css" data-type="vc_custom-css">
        body .content-body-inner {
            padding-bottom: 20px;
        }

        .vc_section.bg-custom {
            background-position: calc(100% + 50px) calc(100% + 30px) !important;
            background-size: 20% !important;
        }

        .vc_section.bg-custom2 {
            background-position: right bottom !important;
            background-size: 35% !important;
        }

        .vc_section.bg-custom3 {
            background-position: 108% 101% !important;
            background-size: 25%;
        }

        .vc_section.bg-custom4 {
            background-position: left bottom !important;
            background-size: 25%;
        }

        #site .vc_section.fix-shape.shape-1:before {
            height: 230px;
            background: #f2f2f2;
        }

        .border {
            height: 285px;
            position: relative;
            left: 30px;
            border-right: 1px solid #ebebeb;
        }

        #site .iconlist.iconlist-icon-small.has-border li {
            background: #f2f2f2;
            border-color: #fff;
            font-size: 21px;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1583116792269 {
            padding-top: 150px !important;
            padding-bottom: 40px !important;
            background: #232323 url({{ asset('assets/logo_dark.svg') }}) !important;
            background-position: 0 0 !important;
            background-repeat: no-repeat !important;
        }

        .vc_custom_1579144598733 {
            padding-top: 80px !important;
            background-color: #131313 !important;
        }

        .vc_custom_1583729418164 {
            padding-top: 60px !important;
            background: #f2f2f2 url(https://live.21lab.co/hank/wp-content/uploads/2020/01/bg-3.png?id=630) !important;
            background-position: 0 0 !important;
            background-repeat: no-repeat !important;
        }

        .vc_custom_1578991212631 {
            padding-top: 80px !important;
        }

        .vc_custom_1580956111795 {
            background-image: url(https://live.21lab.co/hank/wp-content/uploads/2020/02/bg-8.jpg?id=721) !important;
            background-position: 0 0 !important;
            background-repeat: no-repeat !important;
        }

        .vc_custom_1583805121421 {
            padding-top: 70px !important;
            padding-bottom: 40px !important;
        }

        .vc_custom_1580202660683 {
            padding-top: 80px !important;
            padding-bottom: 40px !important;
            background-color: #232323 !important;
        }

        .vc_custom_1580956122711 {
            padding-top: 80px !important;
            background-image: url(https://live.21lab.co/hank/wp-content/uploads/2020/02/bg-7.jpg?id=680) !important;
            background-position: 0 0 !important;
            background-repeat: no-repeat !important;
        }

        .vc_custom_1580725919396 {
            padding-top: 80px !important;
        }

        .vc_custom_1583551696425 {
            margin-bottom: 35px !important;
        }

        .vc_custom_1577346374548 {
            margin-bottom: 35px !important;
        }

        .vc_custom_1583730330045 {
            padding-top: 45px !important;
            padding-bottom: 60px !important;
        }

        .vc_custom_1581152033665 {
            margin-right: 5% !important;
            margin-bottom: 30px !important;
            margin-left: 5% !important;
            padding-top: 120px !important;
            padding-bottom: 120px !important;
            background-image: url(https://live.21lab.co/hank/wp-content/uploads/2020/02/bg-6.jpg?id=674) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1578887573623 {
            padding-top: 20px !important;
        }

        .vc_custom_1577346374548 {
            margin-bottom: 35px !important;
        }

        .vc_custom_1580988229113 {
            padding-top: 80px !important;
            padding-bottom: 80px !important;
        }

        .vc_custom_1582510471497 {
            padding-right: 10% !important;
            padding-left: 10% !important;
        }

        .vc_custom_1580612846074 {
            margin-right: 5% !important;
            margin-left: 5% !important;
            padding-top: 80px !important;
            padding-bottom: 80px !important;
            background: #f2f2f2 url(https://live.21lab.co/hank/wp-content/uploads/2019/11/bg-video.jpg?id=237) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1580364963141 {
            padding-top: 45px !important;
        }
    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript><noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
        </style>
    </noscript>
</head>

<body
    class="home wp-singular page-template page-template-tmpl page-template-template-fullwidth page-template-tmpltemplate-fullwidth-php page page-id-40 wp-theme-hank theme-hank woocommerce-no-js sliding-desktop-off sliding-overlay layout-wide wpb-js-composer js-comp-ver-6.8.0 vc_responsive"
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
                                <section class="vc_section bg-custom vc_custom_1583116792269 vc_section-has-fill">
                                    <div
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1583551696425 vc_row-o-content-bottom vc_row-flex">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="font-size: 40px;color: #ffffff;line-height: 44px;text-align: left"
                                                            class="vc_custom_heading">we have one mission<br />
                                                            to be the <strong>best builder in India.</strong></h2>
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-1">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p><span style="color: #b7b7b7;">It’s a burning,
                                                                        never-ending desire to help our clients maximize
                                                                        their outcomes — and exceed their strategic
                                                                        goals. <a class="link"
                                                                            style="color: #ffffff;"
                                                                            href="{{ route('about') }}">Find
                                                                            out more</a></span></p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 25px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-1">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <!-- START Main Slider1 REVOLUTION SLIDER 6.5.14 -->
                                                        <p class="rs-p-wp-fix"></p>
                                                        <rs-module-wrap id="rev_slider_3_1_wrapper"
                                                            data-source="gallery"
                                                            style="visibility:hidden;background:#ffffff;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                            <rs-module id="rev_slider_3_1" style=""
                                                                data-version="6.5.14">
                                                                <rs-slides>
                                                                    <rs-slide style="position: absolute;"
                                                                        data-key="rs-10"
                                                                        data-title="Culture Makes the Difference"
                                                                        data-thumb="//live.21lab.co/hank/wp-content/uploads/revslider/slider-1/slider_1-50x100.jpg"
                                                                        data-anim="ms:1000;r:0;" data-in="o:0;"
                                                                        data-out="a:false;">
                                                                        <img width="1" height="1"
                                                                            decoding="async"
                                                                            src="//live.21lab.co/hank/wp-content/plugins/revslider/public/assets/assets/dummy.png"
                                                                            alt="" title="Home"
                                                                            class="rev-slidebg tp-rs-img rs-lazyload"
                                                                            data-lazyload="{{ asset('images/slider_2.png') }}"
                                                                            data-no-retina>
                                                                        <!--
       --><rs-layer id="slider-3-slide-10-layer-1" class="f-l" data-type="text" data-color="rgba(0, 0, 0, 0.5)"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:897px;y:185px;"
                                                                            data-text="w:normal;s:32;l:32;ls:2px;fw:300;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="sp:1200;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7800;"
                                                                            style="z-index:8;font-family:'Rubik';text-transform:uppercase;">The
                                                                            Difference
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-10-layer-2" class="f-xb" data-type="text" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:895px;y:225px;"
                                                                            data-text="w:normal;s:72;l:72;ls:-1px;fw:500;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:300;sp:1200;sR:300;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7500;"
                                                                            style="z-index:9;font-family:'Rubik';text-transform:uppercase;">Is
                                                                            Our People
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-10-layer-3" class="f-l" data-type="text" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:899px;y:302px;"
                                                                            data-text="w:normal;s:36;l:36;fw:300;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:600;sp:1200;sR:600;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7200;"
                                                                            style="z-index:10;font-family:'Rubik';text-transform:lowercase;">We
                                                                            Believe in “Teamworks”
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-10-layer-4" class="f-b" data-type="button" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:900px;y:375px;"
                                                                            data-text="w:normal;s:15;l:20;"
                                                                            data-vbility="t,t,f,f"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:900;sp:1200;sR:900;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:6900;"
                                                                            style="z-index:11;font-family:'Rubik';text-transform:uppercase;"><a
                                                                                class="button has-arrow"
                                                                                href="">Learn
                                                                                more about us</a> {{-- TODO Add about page link --}}
                                                                        </rs-layer><!--
--> </rs-slide>
                                                                    <rs-slide style="position: absolute;"
                                                                        data-key="rs-11"
                                                                        data-title="Our Promise of Superior Performance"
                                                                        data-thumb="//live.21lab.co/hank/wp-content/uploads/revslider/slider-1/4-slider-50x100.jpg"
                                                                        data-anim="ms:1000;r:0;" data-in="o:0;"
                                                                        data-out="a:false;">
                                                                        <img width="1" height="1"
                                                                            decoding="async"
                                                                            src="//live.21lab.co/hank/wp-content/plugins/revslider/public/assets/assets/dummy.png"
                                                                            alt="" title="Home"
                                                                            class="rev-slidebg tp-rs-img rs-lazyload"
                                                                            data-lazyload="{{ asset('images/slider_1.png') }}"
                                                                            data-no-retina>
                                                                        <!--
       --><rs-layer id="slider-3-slide-11-layer-1" class="f-l" data-type="text" data-color="rgba(0, 0, 0, 0.5)"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:895px;y:185px;"
                                                                            data-text="w:normal;s:32;l:32;ls:2px;fw:300;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="sp:1200;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7800;"
                                                                            style="z-index:8;font-family:'Rubik';text-transform:uppercase;">We
                                                                            employ the best
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-11-layer-2" class="f-xb" data-type="text" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:895px;y:225px;"
                                                                            data-text="w:normal;s:72;l:72;ls:-1px;fw:500;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:300;sp:1200;sR:300;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7500;"
                                                                            style="z-index:9;font-family:'Rubik';text-transform:uppercase;">techniques.
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-11-layer-3" class="f-l" data-type="text" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:899px;y:302px;"
                                                                            data-text="w:normal;s:36;l:36;fw:300;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:600;sp:1200;sR:600;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7200;"
                                                                            style="z-index:10;font-family:'Rubik';text-transform:lowercase;">To
                                                                            Deliver Superior Performance.
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-11-layer-4" class="f-b" data-type="text" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:900px;y:375px;"
                                                                            data-text="w:normal;s:15;l:20;"
                                                                            data-vbility="t,t,f,f"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:900;sp:1200;sR:900;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:6900;"
                                                                            style="z-index:11;font-family:'Rubik';text-transform:uppercase;"><a
                                                                                class="button has-arrow"
                                                                                href="https://live.linethemes.com/hank/experience/">Click
                                                                                here to Discover</a>
                                                                        </rs-layer><!--
--> </rs-slide>
                                                                    <rs-slide style="position: absolute;"
                                                                        data-key="rs-12"
                                                                        data-title="When a Project has Extraordinary Challenges"
                                                                        data-thumb="//live.21lab.co/hank/wp-content/uploads/revslider/slider-1/slider-50x100.jpg"
                                                                        data-anim="ms:1000;r:0;" data-in="o:0;"
                                                                        data-out="a:false;">
                                                                        <img width="1" height="1"
                                                                            decoding="async"
                                                                            src="//live.21lab.co/hank/wp-content/plugins/revslider/public/assets/assets/dummy.png"
                                                                            alt="" title="Home"
                                                                            class="rev-slidebg tp-rs-img rs-lazyload"
                                                                            data-lazyload="{{ asset('images/slider_3.png') }}"
                                                                            data-no-retina>
                                                                        <!--
       --><rs-layer id="slider-3-slide-12-layer-1" class="f-l" data-type="text" data-color="rgba(0, 0, 0, 0.5)"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:898px;y:185px;"
                                                                            data-text="w:normal;s:32;l:32;ls:2px;fw:300;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="sp:1200;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7800;"
                                                                            style="z-index:8;font-family:'Rubik';text-transform:uppercase;">Over
                                                                            30 years
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-12-layer-2" class="f-xb" data-type="text" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:895px;y:225px;"
                                                                            data-text="w:normal;s:72;l:72;ls:-1px;fw:500;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:300;sp:1200;sR:300;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7500;"
                                                                            style="z-index:9;font-family:'Rubik';text-transform:uppercase;">Experience.
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-12-layer-3" class="f-l" data-type="text" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:899px;y:302px;"
                                                                            data-text="w:normal;s:36;l:36;fw:300;"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:600;sp:1200;sR:600;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:7200;"
                                                                            style="z-index:10;font-family:'Rubik';text-transform:lowercase;">We
                                                                            know exactly what is required
                                                                        </rs-layer><!--

       --><rs-layer id="slider-3-slide-12-layer-4" class="f-b" data-type="button" data-color="#000000"
                                                                            data-rsp_ch="on"
                                                                            data-xy="x:900px;y:375px;"
                                                                            data-text="w:normal;s:15;l:20;"
                                                                            data-vbility="t,t,f,f"
                                                                            data-frame_0="y:100%;"
                                                                            data-frame_0_mask="u:t;"
                                                                            data-frame_1="st:900;sp:1200;sR:900;"
                                                                            data-frame_1_mask="u:t;"
                                                                            data-frame_999="o:0;st:w;sR:6900;"
                                                                            style="z-index:11;font-family:'Rubik';text-transform:uppercase;"><a
                                                                                class="button has-arrow"
                                                                                href="https://live.linethemes.com/hank/work/">Explore
                                                                                Bedi Buildwell Group Projects</a>
                                                                        </rs-layer><!--
--> </rs-slide>
                                                                </rs-slides>
                                                                <rs-static-layers><!--

       --><rs-layer id="slider-3-slide-3-layer-0" class="slide-status-numbers rs-layer-static" data-type="text"
                                                                        data-color="#000000"
                                                                        data-xy="x:r;xo:192px;y:b;yo:40px;"
                                                                        data-text="w:normal;s:28;l:77;ls:-3px;a:center;"
                                                                        data-vbility="t,t,f,f" data-basealign="slide"
                                                                        data-rsp_o="off" data-rsp_bd="off"
                                                                        data-onslides="s:1;"
                                                                        data-frame_999="o:0;st:w;"
                                                                        style="z-index:5;font-family:'Rubik';">1/3
                                                                    </rs-layer><!--
     --></rs-static-layers>
                                                            </rs-module>
                                                            <script>
                                                                setREVStartSize({
                                                                    c: 'rev_slider_3_1',
                                                                    rl: [1240, 1024, 778, 480],
                                                                    el: [650],
                                                                    gw: [1512],
                                                                    gh: [650],
                                                                    type: 'standard',
                                                                    justify: '',
                                                                    layout: 'fullwidth',
                                                                    mh: "0"
                                                                });
                                                                if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules[
                                                                        "revslider31"] !== undefined) {
                                                                    window.RS_MODULES.modules["revslider31"].once = false;
                                                                    window.revapi3 = undefined;
                                                                    if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                                                }
                                                            </script>
                                                        </rs-module-wrap>
                                                        <!-- END REVOLUTION SLIDER -->
                                                        <div class="vc_empty_space" style="height: 40px"><span
                                                                class="vc_empty_space_inner"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="vc_section fix-shape vc_custom_1579144598733 shape-1 vc_section-has-fill">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-2 vc_col-md-1 vc_hidden-sm vc_hidden-xs">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-10">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="font-size: 36px;color: #ffffff;line-height: 44px;text-align: center"
                                                            class="vc_custom_heading">quality construction. inspired
                                                            design.<br />
                                                            unparalleled experience. exemplary service.</h2>
                                                        <div class="vc_empty_space" style="height: 15px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p style="text-align: center;"><span
                                                                        style="color: #b7b7b7;"><a
                                                                            class="link has-arrow"
                                                                            style="color: #b7b7b7;"
                                                                            href="{{ route('about') }}">Find
                                                                            out more about company</a></span></p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 45px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-2 vc_col-md-1 vc_hidden-sm vc_hidden-xs">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"><!-- BEGIN: .elements-carousel -->
                                                        <div class="elements-carousel   "
                                                            data-config="{&quot;items&quot;:2,&quot;itemsTablet&quot;:[1200,2],&quot;itemsMobile&quot;:[544,1],&quot;center&quot;:false,&quot;autoPlay&quot;:false,&quot;stopOnHover&quot;:true,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;responsive&quot;:true,&quot;scrollPerPage&quot;:false,&quot;slideSpeed&quot;:200,&quot;paginationSpeed&quot;:200,&quot;rewindSpeed&quot;:200,&quot;navigation&quot;:true,&quot;rewindNav&quot;:false,&quot;pagination&quot;:true,&quot;paginationNumbers&quot;:true,&quot;dragBeforeAnimFinish&quot;:true,&quot;addClassActive&quot;:true,&quot;autoHeight&quot;:true,&quot;navigationText&quot;:[&quot;Previous&quot;,&quot;Next&quot;],&quot;itemsScaleUp&quot;:true}">
                                                            <div class="elements-carousel-wrap">

                                                                <!-- BEGIN .imagebox -->
                                                                <div class="imagebox color-qc style1 ">
                                                                    <a class="box-image"
                                                                        href="{{ route('leadership') }}"
                                                                        target="_self">
                                                                        <img fetchpriority="high" decoding="async"
                                                                            class=""
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20710'%3E%3C/svg%3E"
                                                                            width="1280" height="710"
                                                                            alt="bg-ab4" title="bg-ab4"
                                                                            data-lazy-src="{{ asset('images/bg-ab4.webp') }}" /><noscript><img
                                                                                fetchpriority="high" decoding="async"
                                                                                class=""
                                                                                src="{{ asset('images/bg-ab4.webp') }}"
                                                                                width="1280" height="710"
                                                                                alt="bg-ab4"
                                                                                title="bg-ab4" /></noscript>
                                                                        <h3 class="box-title">
                                                                            <span>QC</span>
                                                                            <span class="box-subtitle">
                                                                                You will have quality professionals
                                                                                working on your project. </span>
                                                                        </h3>

                                                                    </a>



                                                                </div>
                                                                <!-- End .imagebox -->

                                                                <!-- BEGIN .imagebox -->
                                                                <div class="imagebox  style1 ">
                                                                    <a class="box-image"
                                                                        href="{{ route('experience') }}"
                                                                        target="_self">
                                                                        <img decoding="async" class=""
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20710'%3E%3C/svg%3E"
                                                                            width="1280" height="710"
                                                                            alt="" title="p2"
                                                                            data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/p2-1280x710.jpg" /><noscript><img
                                                                                decoding="async" class=""
                                                                                src="https://live.21lab.co/hank/wp-content/uploads/2019/10/p2-1280x710.jpg"
                                                                                width="1280" height="710"
                                                                                alt="Image by @katethielicke Unsplash"
                                                                                title="p2" /></noscript>
                                                                        <h3 class="box-title">
                                                                            <span>ID</span>
                                                                            <span class="box-subtitle">
                                                                                From idea creation to finished work, we
                                                                                turn your dream into reality! </span>
                                                                        </h3>

                                                                    </a>



                                                                </div>
                                                                <!-- End .imagebox -->

                                                                <!-- BEGIN .imagebox -->
                                                                <div class="imagebox  style1 ">
                                                                    <a class="box-image"
                                                                        href="{{ route('experience') }}"
                                                                        target="_self">
                                                                        <img decoding="async" class=""
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20710'%3E%3C/svg%3E"
                                                                            width="1280" height="710"
                                                                            alt="b3" title="b3"
                                                                            data-lazy-src="{{ asset('images/b3-1280x710.jpg') }}" /><noscript><img
                                                                                decoding="async" class=""
                                                                                src="{{ asset('images/b3-1280x710.jpg') }}"
                                                                                width="1280" height="710"
                                                                                alt="b3"
                                                                                title="b3" /></noscript>
                                                                        <h3 class="box-title">
                                                                            <span>UE</span>
                                                                            <span class="box-subtitle">
                                                                                With 30 years of experience in the
                                                                                construction industry. </span>
                                                                        </h3>

                                                                    </a>



                                                                </div>
                                                                <!-- End .imagebox -->

                                                                <!-- BEGIN .imagebox -->
                                                                <div class="imagebox  style1 ">
                                                                    <a class="box-image"
                                                                        href="{{ route('experience') }}#services"
                                                                        target="_self">
                                                                        <img decoding="async" class=""
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20710'%3E%3C/svg%3E"
                                                                            width="1280" height="710"
                                                                            alt="bg_ab" title="bg_ab"
                                                                            data-lazy-src="{{ asset('images/bg_ab-1280x710.webp') }}" /><noscript><img
                                                                                decoding="async" class=""
                                                                                src="{{ asset('images/bg_ab-1280x710.webp') }}"
                                                                                width="1280" height="710"
                                                                                alt="bg_ab"
                                                                                title="bg_ab" /></noscript>
                                                                        <h3 class="box-title">
                                                                            <span>ES</span>
                                                                            <span class="box-subtitle">
                                                                                Bedi Buildwell providing clients a
                                                                                complete
                                                                                service package. </span>
                                                                        </h3>

                                                                    </a>



                                                                </div>
                                                                <!-- End .imagebox -->
                                                            </div>
                                                        </div>
                                                        <!-- END: .elements-carousel -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="vc_section bg-custom2 vc_custom_1583729418164 vc_section-has-fill">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="font-size: 64px;line-height: 64px;text-align: center"
                                                            class="vc_custom_heading"><strong>professional
                                                                services</strong></h2>
                                                        <div class="vc_empty_space" style="height: 15px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <p style="font-size: 21px;color: #7f7f7f;line-height: 26px;text-align: center"
                                                            class="vc_custom_heading">Bedi Buildwell is dedicated to
                                                            being a partner<br />
                                                            for all of your construction needs.</p>
                                                        <div class="vc_empty_space" style="height: 50px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"><!-- BEGIN: .elements-carousel -->
                                                        <div class="elements-carousel   "
                                                            data-config="{&quot;items&quot;:3,&quot;itemsTablet&quot;:[1200,2],&quot;itemsMobile&quot;:[544,1],&quot;center&quot;:false,&quot;autoPlay&quot;:false,&quot;stopOnHover&quot;:true,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;responsive&quot;:true,&quot;scrollPerPage&quot;:false,&quot;slideSpeed&quot;:200,&quot;paginationSpeed&quot;:200,&quot;rewindSpeed&quot;:200,&quot;navigation&quot;:false,&quot;rewindNav&quot;:false,&quot;pagination&quot;:true,&quot;paginationNumbers&quot;:false,&quot;dragBeforeAnimFinish&quot;:true,&quot;addClassActive&quot;:true,&quot;autoHeight&quot;:true,&quot;navigationText&quot;:[&quot;Previous&quot;,&quot;Next&quot;],&quot;itemsScaleUp&quot;:true}">
                                                            <div class="elements-carousel-wrap">
                                                                <div class="iconbox   ">
                                                                    <div class="box-header">
                                                                        <div class="box-icon"><i
                                                                                class="hank-pantone"></i></div>
                                                                        <h3 class="box-title">We plan with ingenuity
                                                                        </h3>
                                                                    </div>
                                                                    <div class="box-content">


                                                                        <p class="box-readmore">
                                                                            <a
                                                                                href="{{ route('experience') }}#services">Ready
                                                                                to Explore Development</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="iconbox   ">
                                                                    <div class="box-header">
                                                                        <div class="box-icon"><i
                                                                                class="hank-ruler-pencil"></i></div>
                                                                        <h3 class="box-title">We build with integrity
                                                                        </h3>
                                                                    </div>
                                                                    <div class="box-content">


                                                                        <p class="box-readmore">
                                                                            <a
                                                                                href="{{ route('experience') }}#services">Click
                                                                                here to Explore Construction</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="iconbox   ">
                                                                    <div class="box-header">
                                                                        <div class="box-icon"><i
                                                                                class="hank-layers-2"></i></div>
                                                                        <h3 class="box-title">We manage with assurance
                                                                        </h3>
                                                                    </div>
                                                                    <div class="box-content">



                                                                        <p class="box-readmore">
                                                                            <a
                                                                                href="{{ route('experience') }}#services">Click
                                                                                here to Explore Facility Services.</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END: .elements-carousel -->
                                                        <div class="vc_empty_space" style="height: 50px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p><strong class="badge style2">Important</strong> This
                                                                    is a new service – your <span
                                                                        style="color: #000000;"><a class="link"
                                                                            style="color: #000000;"
                                                                            href="{{ route('contact') }}/">feedback</a></span>
                                                                    will help us to improve it. Thank you!</p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 45px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <!-- Projects Section (commented out because it's not needed) -->
                                {{-- <section class="vc_section vc_custom_1578991212631">
                                    <div
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1577346374548 vc_row-o-content-bottom vc_row-flex">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="font-size: 40px;line-height: 44px;text-align: left"
                                                            class="vc_custom_heading">browse our projects below<br />
                                                            &amp; learn more work we has done.</h2>
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-1">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p><span style="color: #7f7f7f;">Our diverse portfolio
                                                                        represents decades of construction experience
                                                                        backed by a passion for quality, outstanding
                                                                        client service and the latest industry
                                                                        technologies.</span></p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 25px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-1">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"> <!-- BEGIN: .project-carousel -->
                                                        <div class="projects project-carousel projects-grid  ">


                                                            <div class="projects-wrap">

                                                                <!-- BEGIN: .elements-carousel -->
                                                                <div class="elements-carousel   "
                                                                    data-config="{&quot;items&quot;:2,&quot;itemsTablet&quot;:[1200,2],&quot;itemsMobile&quot;:[544,1],&quot;center&quot;:true,&quot;autoPlay&quot;:false,&quot;stopOnHover&quot;:true,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;responsive&quot;:true,&quot;scrollPerPage&quot;:false,&quot;slideSpeed&quot;:200,&quot;paginationSpeed&quot;:200,&quot;rewindSpeed&quot;:200,&quot;navigation&quot;:true,&quot;rewindNav&quot;:false,&quot;pagination&quot;:true,&quot;paginationNumbers&quot;:true,&quot;dragBeforeAnimFinish&quot;:true,&quot;addClassActive&quot;:true,&quot;autoHeight&quot;:true,&quot;navigationText&quot;:[&quot;Previous&quot;,&quot;Next&quot;],&quot;itemsScaleUp&quot;:true}">
                                                                    <div class="elements-carousel-wrap">



                                                                        <div
                                                                            class="project post-196 nproject type-nproject status-publish has-post-thumbnail hentry nproject-category-stadium">
                                                                            <div class="project-inner">
                                                                                <figure class="project-thumbnail">
                                                                                    <img decoding="async"
                                                                                        class=""
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201500%201000'%3E%3C/svg%3E"
                                                                                        width="1500" height="1000"
                                                                                        alt="pd19-3-12619a"
                                                                                        title="pd19-3-12619a"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/pd19-3-12619a-1500x1000.jpg" /><noscript><img
                                                                                            decoding="async"
                                                                                            class=""
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2019/10/pd19-3-12619a-1500x1000.jpg"
                                                                                            width="1500"
                                                                                            height="1000"
                                                                                            alt="pd19-3-12619a"
                                                                                            title="pd19-3-12619a" /></noscript>
                                                                                </figure>

                                                                                <div class="project-info">
                                                                                    <div class="project-info-inner">
                                                                                        <h2 class="project-title"
                                                                                            itemprop="name headline">
                                                                                            Kenan Stadium Expansion
                                                                                        </h2>

                                                                                        <div class="project-summary">
                                                                                            <p>The stadium opened in
                                                                                                1927 and holds 50,500
                                                                                                people.</p>
                                                                                        </div>

                                                                                        <div class="project-info-list">
                                                                                            <div class="item">
                                                                                                <h6>Location</h6>
                                                                                                <p>Chapel Hill, NC </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Client</h6>
                                                                                                <p>The University of
                                                                                                    North Carolina </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Architect</h6>
                                                                                                <p>Corley Redfoot Zack,
                                                                                                    Inc. </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Contractor</h6>
                                                                                                <p>Turner Construction
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Delivery Date</h6>
                                                                                                <p>2022 </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Value</h6>
                                                                                                <p>$5 billion </p>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div
                                                                            class="project post-194 nproject type-nproject status-publish has-post-thumbnail hentry nproject-category-building nproject-category-energy">
                                                                            <div class="project-inner">
                                                                                <figure class="project-thumbnail">
                                                                                    <img decoding="async"
                                                                                        class=""
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201500%201000'%3E%3C/svg%3E"
                                                                                        width="1500" height="1000"
                                                                                        alt="a005-scottw-16"
                                                                                        title="a005-scottw-16"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/a005-scottw-16.jpg" /><noscript><img
                                                                                            decoding="async"
                                                                                            class=""
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2019/10/a005-scottw-16.jpg"
                                                                                            width="1500"
                                                                                            height="1000"
                                                                                            alt="a005-scottw-16"
                                                                                            title="a005-scottw-16" /></noscript>
                                                                                </figure>

                                                                                <div class="project-info">
                                                                                    <div class="project-info-inner">
                                                                                        <h2 class="project-title"
                                                                                            itemprop="name headline">
                                                                                            Energy Sciences Building
                                                                                        </h2>

                                                                                        <div class="project-summary">
                                                                                            <p>Extremely efficient labs
                                                                                                utilize a central
                                                                                                service corridor.</p>
                                                                                        </div>

                                                                                        <div class="project-info-list">
                                                                                            <div class="item">
                                                                                                <h6>Location</h6>
                                                                                                <p>United States </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Client</h6>
                                                                                                <p>Argonne National
                                                                                                    Laboratory </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Architect</h6>
                                                                                                <p>HDR Architecture </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Size</h6>
                                                                                                <p>158,000 sq. feet </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Completed</h6>
                                                                                                <p>2013 </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Awards</h6>
                                                                                                <p>Green Good Design
                                                                                                    Award and Honors
                                                                                                    Award. </p>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div
                                                                            class="project post-192 nproject type-nproject status-publish has-post-thumbnail hentry nproject-category-aviation">
                                                                            <div class="project-inner">
                                                                                <figure class="project-thumbnail">
                                                                                    <img decoding="async"
                                                                                        class=""
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201500%201000'%3E%3C/svg%3E"
                                                                                        width="1500" height="1000"
                                                                                        alt="airport-PC7VC9W"
                                                                                        title="airport-PC7VC9W"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/airport-PC7VC9W-1500x1000.jpg" /><noscript><img
                                                                                            decoding="async"
                                                                                            class=""
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2019/10/airport-PC7VC9W-1500x1000.jpg"
                                                                                            width="1500"
                                                                                            height="1000"
                                                                                            alt="airport-PC7VC9W"
                                                                                            title="airport-PC7VC9W" /></noscript>
                                                                                </figure>

                                                                                <div class="project-info">
                                                                                    <div class="project-info-inner">
                                                                                        <h2 class="project-title"
                                                                                            itemprop="name headline">
                                                                                            New International Airport
                                                                                        </h2>

                                                                                        <div class="project-summary">
                                                                                            <p>Designed to be a super
                                                                                                transportation hub for
                                                                                                Beijing.</p>
                                                                                        </div>

                                                                                        <div class="project-info-list">
                                                                                            <div class="item">
                                                                                                <h6>Location</h6>
                                                                                                <p>Beijing, China </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Design</h6>
                                                                                                <p>Zaha Hadid Architects
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Contractors</h6>
                                                                                                <p>NACO </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Runways</h6>
                                                                                                <p>4 civilian and 1
                                                                                                    military </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Value</h6>
                                                                                                <p>$17 billion </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Completed</h6>
                                                                                                <p>September 2019 </p>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div
                                                                            class="project post-189 nproject type-nproject status-publish has-post-thumbnail hentry nproject-category-building">
                                                                            <div class="project-inner">
                                                                                <figure class="project-thumbnail">
                                                                                    <img decoding="async"
                                                                                        class=""
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201500%201000'%3E%3C/svg%3E"
                                                                                        width="1500" height="1000"
                                                                                        alt="photo-1487958449943-2429e8be8625"
                                                                                        title="photo-1487958449943-2429e8be8625"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/photo-1487958449943-2429e8be8625-scaled-1500x1000.jpeg" /><noscript><img
                                                                                            decoding="async"
                                                                                            class=""
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2019/10/photo-1487958449943-2429e8be8625-scaled-1500x1000.jpeg"
                                                                                            width="1500"
                                                                                            height="1000"
                                                                                            alt="photo-1487958449943-2429e8be8625"
                                                                                            title="photo-1487958449943-2429e8be8625" /></noscript>
                                                                                </figure>

                                                                                <div class="project-info">
                                                                                    <div class="project-info-inner">
                                                                                        <h2 class="project-title"
                                                                                            itemprop="name headline">
                                                                                            Navy League Building </h2>

                                                                                        <div class="project-summary">
                                                                                            <p>The design features a
                                                                                                significant level of
                                                                                                dimensional focus.</p>
                                                                                        </div>

                                                                                        <div class="project-info-list">
                                                                                            <div class="item">
                                                                                                <h6>Location</h6>
                                                                                                <p>Arlington, VA </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Owner</h6>
                                                                                                <p>Navy League Building
                                                                                                    LLC </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Architect</h6>
                                                                                                <p>Page Southerland Page
                                                                                                    LLP </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Engineer</h6>
                                                                                                <p>E.K. Fox & Associates
                                                                                                    Ltd </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Contractor</h6>
                                                                                                <p>James G. Davis
                                                                                                    Construction Corp
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="item">
                                                                                                <h6>Scope</h6>
                                                                                                <p>691 total pieces
                                                                                                    including spandrel
                                                                                                    panels, wall panels
                                                                                                    and columns covers
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- END: .elements-carousel -->

                                                            </div>
                                                        </div>
                                                        <!-- END: .project-carousel -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1583730330045">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <p style="font-size: 24px;line-height: 30px;text-align: left"
                                                            class="vc_custom_heading">Supported by 9+ industry bodies
                                                            and media partners</p>
                                                        <div class="vc_empty_space" style="height: 40px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <ul class="iconlist iconlist iconlist-icon-xlarge ">
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="et"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/et.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/et.svg"
                                                                            alt="et" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="line"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/line.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/line.svg"
                                                                            alt="line" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="gbc"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/gbc.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/gbc.svg"
                                                                            alt="gbc" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="tf"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/tf.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/tf.svg"
                                                                            alt="tf" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="mgr"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/mgr.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/mgr.svg"
                                                                            alt="mgr" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="nano2"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/nano2.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/nano2.svg"
                                                                            alt="nano2" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="hnk2"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/hnk2.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/hnk2.svg"
                                                                            alt="hnk2" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="gc"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/gc.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/gc.svg"
                                                                            alt="gc" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><img decoding="async"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                        alt="glb"
                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/glb.svg" /><noscript><img
                                                                            decoding="async"
                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/glb.svg"
                                                                            alt="glb" /></noscript></div>
                                                                <div class="iconlist-item-content"></div>
                                                            </li>
                                                        </ul>
                                                        <div class="vc_empty_space" style="height: 10px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p><a class="link has-arrow" style="color: #7f7f7f;"
                                                                        href="{{ route('about') }}">Find
                                                                        out more about company</a></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> --}}





                                <section class="vc_section bg-custom3 vc_custom_1580956111795 vc_section-has-fill">
                                    <div
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1581152033665 vc_row-has-fill vc_row-o-content-middle vc_row-flex shadow">
                                        <div class="row-inner">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-6 vc_hidden-xs">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_empty_space" style="height: 350px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-5 vc_col-md-6 vc_hidden-xs">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="testimonial ">
                                                            <div class="testimonial-content">
                                                                <blockquote>
                                                                    <p>good buildings come from good people, and all
                                                                        problems are solved by good design.</p>
                                                                </blockquote>
                                                            </div>
                                                            <div class="testimonial-meta">
                                                                <div class="testimonial-author">
                                                                    <strong class="author-name">John Doe</strong>
                                                                    <div class="author-info"><span
                                                                            class="subtitle">CEO</span> <span
                                                                            class="divider">-</span> <span
                                                                            class="company">Bedi Buildwell</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-1">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1578887573623">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h6 class="badge">People</h6>
                                                                <p style="display: inline;">United by a common goal
                                                                    and passion for people, our project team is second
                                                                    to none.</p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 45px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div
                                                            class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                                            <span class="vc_sep_holder vc_sep_holder_l"><span
                                                                    class="vc_sep_line"></span></span><span
                                                                class="vc_sep_holder vc_sep_holder_r"><span
                                                                    class="vc_sep_line"></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="vc_section vc_custom_1583805121421">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h3
                                                                    style="font-size: 24px; margin: 0; display: inline;">
                                                                    Our promise to you.</h3>
                                                                <p style="display: inline;"><span
                                                                        style="color: #7f7f7f;"><a class="link"
                                                                            style="color: #7f7f7f; font-size: 16px;"
                                                                            href="{{ route('about') }}"
                                                                            target="_blank"
                                                                            rel="noopener noreferrer">explore our
                                                                            company</a></span></p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 40px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <ul
                                                            class="iconlist iconlist iconlist-icon-small columns-3 has-border">
                                                            <li>
                                                                <div class="iconlist-item-icon"><i
                                                                        class="hank-d-check"></i></div>
                                                                <div class="iconlist-item-content"><strong>Partners in
                                                                        your dream</strong></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><i
                                                                        class="hank-d-check"></i></div>
                                                                <div class="iconlist-item-content"><strong>Committed
                                                                        to your success</strong></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><i
                                                                        class="hank-d-check"></i></div>
                                                                <div class="iconlist-item-content"><strong>The Bedi
                                                                        Buildwell
                                                                        experience</strong></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><i
                                                                        class="hank-d-check"></i></div>
                                                                <div class="iconlist-item-content"><strong>24/7
                                                                        Accessibility</strong></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><i
                                                                        class="hank-d-check"></i></div>
                                                                <div class="iconlist-item-content"><strong>Right team
                                                                        &#8211; right experience</strong></div>
                                                            </li>
                                                            <li>
                                                                <div class="iconlist-item-icon"><i
                                                                        class="hank-d-check"></i></div>
                                                                <div class="iconlist-item-content"><strong>We will be
                                                                        honest and fair</strong></div>
                                                            </li>
                                                        </ul>
                                                        <div class="vc_empty_space" style="height: 40px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p style="text-align: center;">Partners in your dream,
                                                                    committed to your success – that is the Bedi
                                                                    Buildwell
                                                                    difference.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="vc_section vc_custom_1580202660683 vc_section-has-fill">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-2 vc_col-md-1 vc_hidden-sm vc_hidden-xs">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-10">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="font-size: 36px;color: #ffffff;line-height: 44px;text-align: center"
                                                            class="vc_custom_heading">the construction
                                                            innovation<br />
                                                            news, inspiration and knowledge sharing</h2>
                                                        <div class="vc_empty_space" style="height: 15px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p style="text-align: center;"><span
                                                                        style="color: #b7b7b7;"><a
                                                                            class="link has-arrow"
                                                                            style="color: #b7b7b7;"
                                                                            href="{{ route('blog') }}">EXPLORE
                                                                            ALL BLOG POSTS</a></span></p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 45px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-2 vc_col-md-1 vc_hidden-sm vc_hidden-xs">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="blog-shortcode  has-post-content post-thumbnail-cover">

                                                            <div class="blog-grid">
                                                                <div class="entries-wrapper content-inner"
                                                                    data-grid-normal data-columns="5">

                                                                    <div
                                                                        class="post post-109 type-post status-publish format-standard has-post-thumbnail hentry category-diy-tips tag-energy-efficiency tag-home-improvement tag-icf-construction">
                                                                        <div class="post-categories">
                                                                            <span>in</span>
                                                                            <a href="{{ route('blog') }}?category=diy-tips/"
                                                                                rel="category tag">DIY Tips</a>
                                                                        </div>
                                                                        <a href="https://live.21lab.co/hank/renovations-that-add-the-most-resale-value-to-your-home/"
                                                                            class="post-inner">
                                                                            <img decoding="async" class=""
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20350'%3E%3C/svg%3E"
                                                                                width="800" height="350"
                                                                                alt="Female carpenter measuring the lumber - Image by © rawpixel"
                                                                                title="b10"
                                                                                data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/b10-800x350.jpg" /><noscript><img
                                                                                    decoding="async" class=""
                                                                                    src="https://live.21lab.co/hank/wp-content/uploads/2019/10/b10-800x350.jpg"
                                                                                    width="800" height="350"
                                                                                    alt="Female carpenter measuring the lumber - Image by © rawpixel"
                                                                                    title="b10" /></noscript>

                                                                            <p class="post-title">Renovations that Add
                                                                                the Most Resale Value to your Home</p>

                                                                            <p class="post-content">
                                                                                Spring is a time for new projects and
                                                                                many homeowners take advantage of the
                                                                                warmer weather to tackle renovations.
                                                                                Whether you are a DIY enthusiast or
                                                                                ar... </p>

                                                                        </a>
                                                                    </div>


                                                                    <div
                                                                        class="post post-97 type-post status-publish format-standard has-post-thumbnail hentry category-innovation tag-3d-printing tag-art tag-human">
                                                                        <div class="post-categories">
                                                                            <span>in</span>
                                                                            <a href="{{ route('blog') }}?category=innovation/"
                                                                                rel="category tag">Innovation</a>
                                                                        </div>
                                                                        <a href="https://live.21lab.co/hank/3d-printing-a-technology-to-serve-humans-and-human-art/"
                                                                            class="post-inner">
                                                                            <img decoding="async" class=""
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20350'%3E%3C/svg%3E"
                                                                                width="800" height="350"
                                                                                alt="Oslo Opera House, Oslo, Norway - Image by @maxvdo Unsplash"
                                                                                title="b9-4"
                                                                                data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/b9-4-800x350.jpg" /><noscript><img
                                                                                    decoding="async" class=""
                                                                                    src="https://live.21lab.co/hank/wp-content/uploads/2019/10/b9-4-800x350.jpg"
                                                                                    width="800" height="350"
                                                                                    alt="Oslo Opera House, Oslo, Norway - Image by @maxvdo Unsplash"
                                                                                    title="b9-4" /></noscript>

                                                                            <p class="post-title">3D Printing a
                                                                                Technology to Serve Humans and Human Art
                                                                            </p>

                                                                            <p class="post-content">
                                                                                Many a fantasy has arisen from some
                                                                                spectacular and highly publicised
                                                                                examples of add-on constructions
                                                                                produced by 3D printing techniques, the
                                                                                most obvi... </p>

                                                                        </a>
                                                                    </div>


                                                                    <div
                                                                        class="post post-93 type-post status-publish format-standard has-post-thumbnail hentry category-diy-tips tag-home-improvement">
                                                                        <div class="post-categories">
                                                                            <span>in</span>
                                                                            <a href="{{ route('blog') }}?category=diy-tips/"
                                                                                rel="category tag">DIY Tips</a>
                                                                        </div>
                                                                        <a href="https://live.21lab.co/hank/3-signs-your-home-is-at-risk-of-moisture-damage/"
                                                                            class="post-inner">
                                                                            <img decoding="async" class=""
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20350'%3E%3C/svg%3E"
                                                                                width="800" height="350"
                                                                                alt="Man fixing kitchen sink - image by © rawpixel"
                                                                                title="b8"
                                                                                data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/b8-800x350.jpg" /><noscript><img
                                                                                    decoding="async" class=""
                                                                                    src="https://live.21lab.co/hank/wp-content/uploads/2019/10/b8-800x350.jpg"
                                                                                    width="800" height="350"
                                                                                    alt="Man fixing kitchen sink - image by © rawpixel"
                                                                                    title="b8" /></noscript>

                                                                            <p class="post-title">3 Signs your Home is
                                                                                at Risk of Moisture Damage</p>

                                                                            <p class="post-content">
                                                                                Moisture can cause a disastrous amount
                                                                                of damage to your home when left
                                                                                unchecked. Performing regular
                                                                                maintenance and looking out for these
                                                                                warning sign... </p>

                                                                        </a>
                                                                    </div>


                                                                    <div
                                                                        class="post post-88 type-post status-publish format-standard has-post-thumbnail hentry category-sustainability tag-green-building tag-icf-construction">
                                                                        <div class="post-categories">
                                                                            <span>in</span>
                                                                            <a href="{{ route('blog') }}?category=sustainability/"
                                                                                rel="category tag">Sustainability</a>
                                                                        </div>
                                                                        <a href="https://live.21lab.co/hank/sustainable-and-eco-friendly-construction-with-icf/"
                                                                            class="post-inner">
                                                                            <img decoding="async" class=""
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20350'%3E%3C/svg%3E"
                                                                                width="800" height="350"
                                                                                alt="Volumetric composition - image by @ripato"
                                                                                title="b7"
                                                                                data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/10/b7-800x350.jpg" /><noscript><img
                                                                                    decoding="async" class=""
                                                                                    src="https://live.21lab.co/hank/wp-content/uploads/2019/10/b7-800x350.jpg"
                                                                                    width="800" height="350"
                                                                                    alt="Volumetric composition - image by @ripato"
                                                                                    title="b7" /></noscript>

                                                                            <p class="post-title">Sustainable and
                                                                                Eco-friendly Construction with ICF</p>

                                                                            <p class="post-content">
                                                                                Sustainable Development requires a
                                                                                balance to be maintained between
                                                                                development and the environment. It
                                                                                promotes inter-generational equity, i.e.
                                                                                better ... </p>

                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="vc_section bg-custom4 vc_custom_1580956122711 vc_section-has-fill">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="font-size: 64px;line-height: 64px;text-align: center"
                                                            class="vc_custom_heading"><strong>should know about
                                                                us</strong></h2>
                                                        <div class="vc_empty_space" style="height: 15px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <p style="font-size: 21px;color: #7f7f7f;line-height: 26px;text-align: center"
                                                            class="vc_custom_heading">It’s not just what we build that
                                                            makes<br />
                                                            us the right partner to work with.</p>
                                                        <div class="vc_empty_space" style="height: 50px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"><!-- BEGIN: .elements-carousel -->
                                                        <div class="elements-carousel   "
                                                            data-config="{&quot;items&quot;:3,&quot;itemsTablet&quot;:[1200,2],&quot;itemsMobile&quot;:[544,1],&quot;center&quot;:true,&quot;autoPlay&quot;:false,&quot;stopOnHover&quot;:true,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;responsive&quot;:true,&quot;scrollPerPage&quot;:false,&quot;slideSpeed&quot;:200,&quot;paginationSpeed&quot;:200,&quot;rewindSpeed&quot;:200,&quot;navigation&quot;:false,&quot;rewindNav&quot;:false,&quot;pagination&quot;:true,&quot;paginationNumbers&quot;:false,&quot;dragBeforeAnimFinish&quot;:true,&quot;addClassActive&quot;:true,&quot;autoHeight&quot;:true,&quot;navigationText&quot;:[&quot;Previous&quot;,&quot;Next&quot;],&quot;itemsScaleUp&quot;:true}">
                                                            <div class="elements-carousel-wrap">

                                                                <!-- BEGIN .imagebox -->
                                                                <div class="imagebox   ">
                                                                    <a class="box-image"
                                                                        href="{{ route('about') }}core-values/"
                                                                        target="_self">
                                                                        <img decoding="async" class=""
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20710'%3E%3C/svg%3E"
                                                                            width="1200" height="710"
                                                                            alt="img2" title="img2"
                                                                            data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2019/12/img2-1200x710.jpg" /><noscript><img
                                                                                decoding="async" class=""
                                                                                src="https://live.21lab.co/hank/wp-content/uploads/2019/12/img2-1200x710.jpg"
                                                                                width="1200" height="710"
                                                                                alt="img2"
                                                                                title="img2" /></noscript>
                                                                        <h3 class="box-title">
                                                                            <span>CORE</span>
                                                                            <span class="box-subtitle">
                                                                                our values </span>
                                                                        </h3>

                                                                    </a>


                                                                    <a class="box-button"
                                                                        href="{{ route('about') }}core-values/"
                                                                        target="_self">
                                                                        <span>Learn about our core values.</span>
                                                                    </a>

                                                                </div>
                                                                <!-- End .imagebox -->

                                                                <!-- BEGIN .imagebox -->
                                                                <div class="imagebox   ">
                                                                    <a class="box-image"
                                                                        href="{{ route('leadership') }}"
                                                                        target="_self">
                                                                        <img decoding="async" class=""
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20710'%3E%3C/svg%3E"
                                                                            width="1200" height="710"
                                                                            alt="video" title="video"
                                                                            data-lazy-src="{{ asset('images/yellow_helmet.webp') }}" /><noscript><img
                                                                                decoding="async" class=""
                                                                                src="{{ asset('images/yellow_helmet.webp') }}"
                                                                                width="1200" height="710"
                                                                                alt="video"
                                                                                title="video" /></noscript>
                                                                        <h3 class="box-title">
                                                                            <span>TEAM</span>
                                                                            <span class="box-subtitle">
                                                                                our leadership </span>
                                                                        </h3>

                                                                    </a>


                                                                    <a class="box-button"
                                                                        href="{{ route('leadership') }}"
                                                                        target="_self">
                                                                        <span>Meet the Bedi Buildwell Team.</span>
                                                                    </a>

                                                                </div>
                                                                <!-- End .imagebox -->

                                                                <!-- BEGIN .imagebox -->
                                                                <div class="imagebox   ">
                                                                    <a class="box-image"
                                                                        href="{{ route('about') }}why-choose-us/"
                                                                        target="_self">
                                                                        <img decoding="async" class=""
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20710'%3E%3C/svg%3E"
                                                                            width="1200" height="710"
                                                                            alt="business-handshake-after-meeting-EPZHNRV"
                                                                            title="business-handshake-after-meeting-EPZHNRV"
                                                                            data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/business-handshake-after-meeting-EPZHNRV-1200x710.jpg" /><noscript><img
                                                                                decoding="async" class=""
                                                                                src="https://live.21lab.co/hank/wp-content/uploads/2020/02/business-handshake-after-meeting-EPZHNRV-1200x710.jpg"
                                                                                width="1200" height="710"
                                                                                alt="business-handshake-after-meeting-EPZHNRV"
                                                                                title="business-handshake-after-meeting-EPZHNRV" /></noscript>
                                                                        <h3 class="box-title">
                                                                            <span>WHY</span>
                                                                            <span class="box-subtitle">
                                                                                choose Bedi Buildwell? </span>
                                                                        </h3>

                                                                    </a>


                                                                    <a class="box-button"
                                                                        href="{{ route('about') }}why-choose-us/"
                                                                        target="_self">
                                                                        <span>Three reasons why choose us.</span>
                                                                    </a>

                                                                </div>
                                                                <!-- End .imagebox -->
                                                            </div>
                                                        </div>
                                                        <!-- END: .elements-carousel -->
                                                        <div class="vc_empty_space" style="height: 50px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div
                                                            class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                                            <span class="vc_sep_holder vc_sep_holder_l"><span
                                                                    class="vc_sep_line"></span></span><span
                                                                class="vc_sep_holder vc_sep_holder_r"><span
                                                                    class="vc_sep_line"></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="vc_section vc_custom_1580725919396">
                                    <!-- map removed -->
                                    <!-- <div
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1577346374548 vc_row-o-content-bottom vc_row-flex">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="font-size: 40px;line-height: 44px;text-align: left"
                                                            class="vc_custom_heading">some facts and figures<br />
                                                            the construction industry in US.</h2>
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-1">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p>Headquartered in New York, with offices in 3 metro
                                                                    areas, Bedi Buildwell has more than 200 employees
                                                                    committed to
                                                                    being leaders in safety, ethics and people
                                                                    development.</p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 25px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-1">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vc_row wpb_row vc_row-fluid vc_column-gap-30 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                        <div class="row-inner">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-6 vc_col-xs-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        {{-- <div class="counter ">
                                                            <div class="counter-content">
                                                                <span class="counter-prefix"></span>
                                                                <span class="counter-value" data-from="0"
                                                                    data-to="32" data-speed="1000">0</span>
                                                                <span class="counter-suffix">y</span>
                                                            </div>
                                                            <div class="counter-title">Experience as a veteran-owned
                                                                full-service construction firm</div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 30px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="counter ">
                                                            <div class="counter-content">
                                                                <span class="counter-prefix"></span>
                                                                <span class="counter-value" data-from="0"
                                                                    data-to="94" data-speed="1000">0</span>
                                                                <span class="counter-suffix">c</span>
                                                            </div>
                                                            <div class="counter-title">We have undertaken almost 6500
                                                                projects in 94 countries.</div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 30px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="counter ">
                                                            <div class="counter-content">
                                                                <span class="counter-prefix"></span>
                                                                <span class="counter-value" data-from="0"
                                                                    data-to="25" data-speed="1000">0</span>
                                                                <span class="counter-suffix">b</span>
                                                            </div>
                                                            <div class="counter-title">Bedi Buildwell Group have
                                                                undertaken new
                                                                projects totaling 25 billion USD</div>
                                                        </div> --}}
                                                        <div class="vc_empty_space" style="height: 60px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-1 vc_hidden-md vc_hidden-sm vc_hidden-xs">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                            <div class="wpb_wrapper">
                                                                <p class="border"></p>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 60px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12">
                                                <div class="vc_column-inner vc_custom_1582510471497">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wrap_svl_center">
                                                                    <div class="wrap_svl_center_box">
                                                                        <div class="wrap_svl" id="body_drag_724">
                                                                            <div class="images_wrap">
                                                                                <img width="1826" height="1090"
                                                                                    decoding="async"
                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201826%201090'%3E%3C/svg%3E"
                                                                                    data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/map.jpg"><noscript><img
                                                                                        width="1826"
                                                                                        height="1090"
                                                                                        decoding="async"
                                                                                        src="https://live.21lab.co/hank/wp-content/uploads/2020/02/map.jpg"></noscript>
                                                                            </div>
                                                                            <div class="drag_element tips "
                                                                                style="top:5.25%;left:28.17%;">
                                                                                <div class="point_style has-hover ihotspot_tooltop_html"
                                                                                    data-placement="n"
                                                                                    data-html="		 			 		 		 ">
                                                                                    <img decoding="async"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                                        class="pins_image "
                                                                                        style="top:-26.5px;left:-24px"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-y.svg"><noscript><img
                                                                                            decoding="async"
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-y.svg"
                                                                                            class="pins_image "
                                                                                            style="top:-26.5px;left:-24px"></noscript>
                                                                                    <img decoding="async"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                                        class="pins_image_hover "
                                                                                        style="top:-26.5px;left:-24px"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-b.svg"><noscript><img
                                                                                            decoding="async"
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-b.svg"
                                                                                            class="pins_image_hover "
                                                                                            style="top:-26.5px;left:-24px"></noscript>
                                                                                </div>
                                                                            </div>
                                                                            <div class="drag_element tips "
                                                                                style="top:52.12%;left:19.39%;">
                                                                                <div class="point_style has-hover ihotspot_tooltop_html"
                                                                                    data-placement="n"
                                                                                    data-html="		 			 		 		 ">
                                                                                    <img decoding="async"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                                        class="pins_image "
                                                                                        style="top:-26.5px;left:-24px"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-y.svg"><noscript><img
                                                                                            decoding="async"
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-y.svg"
                                                                                            class="pins_image "
                                                                                            style="top:-26.5px;left:-24px"></noscript>
                                                                                    <img decoding="async"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                                        class="pins_image_hover "
                                                                                        style="top:-26.5px;left:-24px"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-b.svg"><noscript><img
                                                                                            decoding="async"
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-b.svg"
                                                                                            class="pins_image_hover "
                                                                                            style="top:-26.5px;left:-24px"></noscript>
                                                                                </div>
                                                                            </div>
                                                                            <div class="drag_element tips "
                                                                                style="top:18.98%;left:85.74%;">
                                                                                <div class="point_style has-hover ihotspot_tooltop_html"
                                                                                    data-placement="n"
                                                                                    data-html="		 			                  &lt;div class=&quot;box_view_html&quot;&gt;&lt;span class=&quot;close_ihp&quot;&gt;&lt;svg version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot; x=&quot;0px&quot; y=&quot;0px&quot; viewBox=&quot;0 0 1000 1000&quot; enable-background=&quot;new 0 0 1000 1000&quot; xml:space=&quot;preserve&quot;&gt;&lt;g&gt;&lt;path d=&quot;M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z&quot;/&gt;&lt;path d=&quot;M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z&quot;/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;It’s a burning, never-ending desire to help our clients maximize their outcomes — and exceed their strategic goals.&lt;/p&gt;
&lt;/div&gt;
			 		 		 ">
                                                                                    <img decoding="async"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                        style="top:-26.5px;left:-24px"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-b.svg"><noscript><img
                                                                                            decoding="async"
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-b.svg"
                                                                                            class="pins_image ihotspot_hastooltop"
                                                                                            style="top:-26.5px;left:-24px"></noscript>
                                                                                    <img decoding="async"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                                        class="pins_image_hover ihotspot_hastooltop"
                                                                                        style="top:-26.5px;left:-24px"
                                                                                        data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-y.svg"><noscript><img
                                                                                            decoding="async"
                                                                                            src="https://live.21lab.co/hank/wp-content/uploads/2020/02/pin-y.svg"
                                                                                            class="pins_image_hover ihotspot_hastooltop"
                                                                                            style="top:-26.5px;left:-24px"></noscript>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 60px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  -->
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text">
                                                            <span class="vc_sep_holder vc_sep_holder_l"><span
                                                                    class="vc_sep_line"></span></span>
                                                            <h4>What our clients are saying</h4><span
                                                                class="vc_sep_holder vc_sep_holder_r"><span
                                                                    class="vc_sep_line"></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1580988229113">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"><!-- BEGIN: .elements-carousel -->
                                                        <div class="elements-carousel  style2 "
                                                            data-config="{&quot;items&quot;:1,&quot;singleItem&quot;:true,&quot;center&quot;:false,&quot;autoPlay&quot;:false,&quot;stopOnHover&quot;:true,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;responsive&quot;:true,&quot;scrollPerPage&quot;:false,&quot;slideSpeed&quot;:200,&quot;paginationSpeed&quot;:200,&quot;rewindSpeed&quot;:200,&quot;navigation&quot;:false,&quot;rewindNav&quot;:false,&quot;pagination&quot;:true,&quot;paginationNumbers&quot;:false,&quot;dragBeforeAnimFinish&quot;:true,&quot;addClassActive&quot;:true,&quot;autoHeight&quot;:true,&quot;navigationText&quot;:[&quot;Previous&quot;,&quot;Next&quot;],&quot;itemsScaleUp&quot;:true}">
                                                            <div class="elements-carousel-wrap">

                                                                <div class="testimonial  has-image">
                                                                    <div class="testimonial-content">
                                                                        <blockquote>

                                                                            <div
                                                                                class="wpb_text_column wpb_content_element ">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>In addition to sound technical
                                                                                        competence, a very constructive
                                                                                        and flexible workforce and close
                                                                                        / supportive management team.
                                                                                        Would willingly recommend or be
                                                                                        available for testimonial or
                                                                                        ‘private’ viewing etc.</p>
                                                                                </div>
                                                                            </div>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div class="testimonial-meta">

                                                                        <div class="testimonial-image">
                                                                            <img width="110" height="110"
                                                                                decoding="async"
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20110%20110'%3E%3C/svg%3E"
                                                                                alt="Jay Mendy"
                                                                                data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/f3.jpg" /><noscript><img
                                                                                    width="110" height="110"
                                                                                    decoding="async"
                                                                                    src="https://live.21lab.co/hank/wp-content/uploads/2020/02/f3.jpg"
                                                                                    alt="Jay Mendy" /></noscript>
                                                                        </div>
                                                                        <div class="testimonial-author">
                                                                            <strong class="author-name">Jay
                                                                                Mendy</strong>
                                                                            <div class="author-info"><span
                                                                                    class="subtitle">Customer</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="testimonial  has-image">
                                                                    <div class="testimonial-content">
                                                                        <blockquote>

                                                                            <div
                                                                                class="wpb_text_column wpb_content_element ">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>The work completed is first rate
                                                                                        and will have profound benefits
                                                                                        for our school. All the
                                                                                        employees show sensitivity to
                                                                                        the needs of our complex
                                                                                        institution and could not have
                                                                                        been any more flexible or
                                                                                        collaborative.</p>
                                                                                </div>
                                                                            </div>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div class="testimonial-meta">

                                                                        <div class="testimonial-image">
                                                                            <img width="110" height="110"
                                                                                decoding="async"
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20110%20110'%3E%3C/svg%3E"
                                                                                alt="Larry Swank"
                                                                                data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/f2.jpg" /><noscript><img
                                                                                    width="110" height="110"
                                                                                    decoding="async"
                                                                                    src="https://live.21lab.co/hank/wp-content/uploads/2020/02/f2.jpg"
                                                                                    alt="Larry Swank" /></noscript>
                                                                        </div>
                                                                        <div class="testimonial-author">
                                                                            <strong class="author-name">Larry
                                                                                Swank</strong>
                                                                            <div class="author-info"><span
                                                                                    class="subtitle">Architect</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="testimonial  has-image">
                                                                    <div class="testimonial-content">
                                                                        <blockquote>

                                                                            <div
                                                                                class="wpb_text_column wpb_content_element ">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>Bedi Buildwell could not have
                                                                                        taken better care of us…The
                                                                                        entire Bedi Buildwell team lives
                                                                                        and
                                                                                        breathes excellence in
                                                                                        everything they do. Integrity,
                                                                                        initiative and intelligence are
                                                                                        built into this project. What an
                                                                                        awesome job! Thank you!</p>
                                                                                </div>
                                                                            </div>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div class="testimonial-meta">

                                                                        <div class="testimonial-image">
                                                                            <img width="110" height="110"
                                                                                decoding="async"
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20110%20110'%3E%3C/svg%3E"
                                                                                alt="Lee Halford, Jr"
                                                                                data-lazy-src="https://live.21lab.co/hank/wp-content/uploads/2020/02/f1.jpg" /><noscript><img
                                                                                    width="110" height="110"
                                                                                    decoding="async"
                                                                                    src="https://live.21lab.co/hank/wp-content/uploads/2020/02/f1.jpg"
                                                                                    alt="Lee Halford, Jr" /></noscript>
                                                                        </div>
                                                                        <div class="testimonial-author">
                                                                            <strong class="author-name">Lee Halford,
                                                                                Jr</strong>
                                                                            <div class="author-info"><span
                                                                                    class="subtitle">President,
                                                                                    IPC</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END: .elements-carousel -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="vc_section">
                                    <div
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1580612846074 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                        <div class="row-inner">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-8">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div role="form" class="wpcf7" id="wpcf7-f596-p40-o1"
                                                            lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response">
                                                                <p role="status" aria-live="polite"
                                                                    aria-atomic="true"></p>
                                                                <ul></ul>
                                                            </div>
                                                            <form action="https://formspree.io/f/mvgevqql"
                                                                method="post" class="wpcf7-form init"
                                                                novalidate="novalidate" data-status="init">
                                                                <div class="contact-light">
                                                                    <div class="field line">
                                                                        <label>I want</label><br />
                                                                        <span
                                                                            class="wpcf7-form-control-wrap menu-393"><select
                                                                                name="I want"
                                                                                class="wpcf7-form-control wpcf7-select"
                                                                                aria-invalid="false">
                                                                                <option
                                                                                    value="call me to discuss my questions">
                                                                                    call me to discuss my questions
                                                                                </option>
                                                                                <option
                                                                                    value="email me your digital prospectus">
                                                                                    email me your digital prospectus
                                                                                </option>
                                                                                <option
                                                                                    value="mail me your full information pack">
                                                                                    mail me your full information pack
                                                                                </option>
                                                                            </select></span>
                                                                    </div>
                                                                    <div class="field line">
                                                                        <label>I'm interested</label><br />
                                                                        <span
                                                                            class="wpcf7-form-control-wrap menu-554"><select
                                                                                name="I'm interested"
                                                                                class="wpcf7-form-control wpcf7-select"
                                                                                aria-invalid="false">
                                                                                <option value="design build">design
                                                                                    build</option>
                                                                                <option
                                                                                    value="construction management">
                                                                                    construction management</option>
                                                                                <option value="new build">new build
                                                                                </option>
                                                                                <option
                                                                                    value="preconstruction services">
                                                                                    preconstruction services</option>
                                                                                <option value="general contracting">
                                                                                    general contracting</option>
                                                                                <option value="careers">careers
                                                                                </option>
                                                                                <option
                                                                                    value="request additional information">
                                                                                    request additional information
                                                                                </option>
                                                                            </select></span>
                                                                    </div>
                                                                    <div style="height: 20px"></div>
                                                                    <div class="field grid">
                                                                        <div class="field">
                                                                            <label>* Your Email</label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap email-21"><input
                                                                                    type="email" name="Email"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="name@company.com" /></span>
                                                                        </div>
                                                                        <div class="field">
                                                                            <label>* Phone Number</label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap tel-869"><input
                                                                                    type="tel"
                                                                                    name="Phone Number"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Full Number (incl. prefix)" /></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field grid">
                                                                        <div class="field">
                                                                            <span
                                                                                class="wpcf7-form-control-wrap acceptance-838"><span
                                                                                    class="wpcf7-form-control wpcf7-acceptance"><span
                                                                                        class="wpcf7-list-item"><label><input
                                                                                                type="checkbox"
                                                                                                name="acceptance-838"
                                                                                                value="1"
                                                                                                aria-invalid="false" /><span
                                                                                                class="wpcf7-list-item-label">I
                                                                                                agree to receive
                                                                                                communications from
                                                                                                Bedi
                                                                                                Buildwell.</span></label></span></span></span>
                                                                        </div>
                                                                        <div class="field">
                                                                            <input type="submit"
                                                                                value="Send Message"
                                                                                class="wpcf7-form-control has-spinner wpcf7-submit" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpcf7-response-output"
                                                                    aria-hidden="true"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1580364963141">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">


                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 45px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

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


    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/hank\/*"},{"not":{"href_matches":["\/hank\/wp-*.php","\/hank\/wp-admin\/*","\/hank\/wp-content\/uploads\/*","\/hank\/wp-content\/*","\/hank\/wp-content\/plugins\/*","\/hank\/wp-content\/themes\/hank\/*","\/hank\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <script>
        (function() {
            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields) {
                for (var j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField);
                }
            }
        })();
    </script>
    <script type="text/html" id="wpb-modifications"></script>

    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log(
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                );
                console.log("To fix this, you can:");
                console.log(
                    "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                );
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>



    <style id='rs-plugin-settings-inline-css' type='text/css'>
        rs-layer.f-t {
            font-family: "Jost" !important;
            font-weight: 200 !important
        }

        rs-layer.f-l,
        .slide-status-numbers {
            font-family: "Jost" !important;
            font-weight: 300 !important
        }

        rs-layer.f-r {
            font-family: "Jost" !important;
            font-weight: 400 !important
        }

        rs-layer.f-m {
            font-family: "Jost" !important;
            font-weight: 500 !important
        }

        rs-layer.f-b {
            font-family: "Jost" !important;
            font-weight: 600 !important
        }

        rs-layer.f-xb {
            font-family: "Jost" !important;
            font-weight: 800 !important
        }

        .custom.tp-bullets {}

        .custom.tp-bullets:before {
            content: ' ';
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            padding: 10px;
            margin-left: -10px;
            margin-top: -10px;
            box-sizing: content-box
        }

        .custom .tp-bullet {
            width: 12px;
            height: 12px;
            position: absolute;
            background: #aaa;
            background: rgba(125, 125, 125, 0.5);
            cursor: pointer;
            box-sizing: content-box
        }

        .custom .tp-bullet.rs-touchhover,
        .custom .tp-bullet.selected {
            background: rgb(125, 125, 125)
        }

        .custom .tp-bullet-image {}

        .custom .tp-bullet-title {}

        #rev_slider_3_1_wrapper rs-loader.spinner1 {
            background-color: #FF6A00 !important
        }
    </style>
    <script data-minify="1" type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/cache/min/1/hank/wp-content/themes/hank/assets/js/components.js?ver=1695002910"
        id="hank-components-js"></script>
    <script data-minify="1" type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/cache/min/1/hank/wp-content/themes/hank/assets/js/theme.js?ver=1695002910"
        id="hank-js"></script>
    <script type="text/javascript" src="https://live.21lab.co/hank/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
        id="wp-polyfill-js"></script>
    {{-- Contact Form 7 JavaScript - Commented out, using Formspree instead --}}
    {{-- <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/live.21lab.co\/hank\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            },
            "cached": "1"
        };
        /* ]]> */
    </script>
    <script data-minify="1" type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/cache/min/1/hank/wp-content/plugins/contact-form-7/includes/js/index.js?ver=1695002910"
        id="contact-form-7-js"></script> --}}
    <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/devvn-image-hotspot/frontend/js/jquery.ihotspot.min.js?ver=1.2.1"
        id="ihotspot-js-js"></script>
    <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.14" defer async
        id="tp-tools-js"></script>
    <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.14" defer async
        id="revmin-js"></script>
    <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.1.2"
        id="js-cookie-js"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/hank\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/hank\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.1.2"
        id="woocommerce-js"></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/hank\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/hank\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_419135f52a7d0e1acc3ec4a012502c76",
            "fragment_name": "wc_fragments_419135f52a7d0e1acc3ec4a012502c76",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.1.2"
        id="wc-cart-fragments-js"></script>
    <script type="text/javascript" id="rocket-browser-checker-js-after">
        /* <![CDATA[ */
        "use strict";
        var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in
                        descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key,
                            descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps &&
                    defineProperties(Constructor, staticProps), Constructor
            }
        }();

        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
        }
        var RocketBrowserCompatibilityChecker = function() {
            function RocketBrowserCompatibilityChecker(options) {
                _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this
                    ._checkPassiveOption(this), this.options = !!this.passiveSupported && options
            }
            return _createClass(RocketBrowserCompatibilityChecker, [{
                key: "_checkPassiveOption",
                value: function(self) {
                    try {
                        var options = {
                            get passive() {
                                return !(self.passiveSupported = !0)
                            }
                        };
                        window.addEventListener("test", null, options), window.removeEventListener(
                            "test", null, options)
                    } catch (err) {
                        self.passiveSupported = !1
                    }
                }
            }, {
                key: "initRequestIdleCallback",
                value: function() {
                    !1 in window && (window.requestIdleCallback = function(cb) {
                        var start = Date.now();
                        return setTimeout(function() {
                            cb({
                                didTimeout: !1,
                                timeRemaining: function() {
                                    return Math.max(0, 50 - (Date.now() -
                                        start))
                                }
                            })
                        }, 1)
                    }), !1 in window && (window.cancelIdleCallback = function(id) {
                        return clearTimeout(id)
                    })
                }
            }, {
                key: "isDataSaverModeOn",
                value: function() {
                    return "connection" in navigator && !0 === navigator.connection.saveData
                }
            }, {
                key: "supportsLinkPrefetch",
                value: function() {
                    var elem = document.createElement("link");
                    return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") &&
                        window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry
                        .prototype
                }
            }, {
                key: "isSlowConnection",
                value: function() {
                    return "connection" in navigator && "effectiveType" in navigator.connection && (
                        "2g" === navigator.connection.effectiveType || "slow-2g" === navigator
                        .connection.effectiveType)
                }
            }]), RocketBrowserCompatibilityChecker
        }();
        /* ]]> */
    </script>
    <script type="text/javascript" id="rocket-preload-links-js-extra">
        /* <![CDATA[ */
        var RocketPreloadLinksConfig = {
            "excludeUris": "\/hank(\/(.+\/)?feed\/?.+\/?|\/(?:.+\/)?embed\/|\/checkout\/|\/cart\/|\/my-account\/|\/wc-api\/v(.*)|\/(index\\.php\/)?wp\\-json(\/.*|$))|\/wp-admin\/|\/logout\/|\/wp-login.php",
            "usesTrailingSlash": "1",
            "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif",
            "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|php|pdf|html|htm",
            "siteUrl": "https:\/\/live.21lab.co\/hank",
            "onHoverDelay": "100",
            "rateThrottle": "3"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" id="rocket-preload-links-js-after">
        /* <![CDATA[ */
        (function() {
            "use strict";
            var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                    return typeof e
                } : function(e) {
                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ?
                        "symbol" : typeof e
                },
                e = function() {
                    function i(e, t) {
                        for (var n = 0; n < t.length; n++) {
                            var i = t[n];
                            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0),
                                Object.defineProperty(e, i.key, i)
                        }
                    }
                    return function(e, t, n) {
                        return t && i(e.prototype, t), n && i(e, n), e
                    }
                }();

            function i(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }
            var t = function() {
                function n(e, t) {
                    i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this
                        .prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0
                }
                return e(n, [{
                    key: "init",
                    value: function() {
                        !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() ||
                            this.browser.isSlowConnection() || (this.regex = {
                                excludeUris: RegExp(this.config.excludeUris, "i"),
                                images: RegExp(".(" + this.config.imageExt + ")$", "i"),
                                fileExt: RegExp(".(" + this.config.fileExt + ")$", "i")
                            }, this._initListeners(this))
                    }
                }, {
                    key: "_initListeners",
                    value: function(e) {
                        -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e
                                .listener.bind(e), e.listenerOptions), document.addEventListener(
                                "mousedown", e.listener.bind(e), e.listenerOptions), document
                            .addEventListener("touchstart", e.listener.bind(e), e.listenerOptions)
                    }
                }, {
                    key: "listener",
                    value: function(e) {
                        var t = e.target.closest("a"),
                            n = this._prepareUrl(t);
                        if (null !== n) switch (e.type) {
                            case "mousedown":
                            case "touchstart":
                                this._addPrefetchLink(n);
                                break;
                            case "mouseover":
                                this._earlyPrefetch(t, n, "mouseout")
                        }
                    }
                }, {
                    key: "_earlyPrefetch",
                    value: function(t, e, n) {
                        var i = this,
                            r = setTimeout(function() {
                                if (r = null, 0 === i.numOnHover) setTimeout(function() {
                                    return i.numOnHover = 0
                                }, 1e3);
                                else if (i.numOnHover > i.config.rateThrottle) return;
                                i.numOnHover++, i._addPrefetchLink(e)
                            }, this.config.onHoverDelay);
                        t.addEventListener(n, function e() {
                            t.removeEventListener(n, e, {
                                passive: !0
                            }), null !== r && (clearTimeout(r), r = null)
                        }, {
                            passive: !0
                        })
                    }
                }, {
                    key: "_addPrefetchLink",
                    value: function(i) {
                        return this.prefetched.add(i.href), new Promise(function(e, t) {
                            var n = document.createElement("link");
                            n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror =
                                t, document.head.appendChild(n)
                        }).catch(function() {})
                    }
                }, {
                    key: "_prepareUrl",
                    value: function(e) {
                        if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in
                            e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null;
                        var t = e.href.substring(0, this.config.siteUrl.length),
                            n = this._getPathname(e.href, t),
                            i = {
                                original: e.href,
                                protocol: e.protocol,
                                origin: t,
                                pathname: n,
                                href: t + n
                            };
                        return this._isLinkOk(i) ? i : null
                    }
                }, {
                    key: "_getPathname",
                    value: function(e, t) {
                        var n = t ? e.substring(this.config.siteUrl.length) : e;
                        return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ?
                            n + "/" : n
                    }
                }, {
                    key: "_shouldAddTrailingSlash",
                    value: function(e) {
                        return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex
                            .fileExt.test(e)
                    }
                }, {
                    key: "_isLinkOk",
                    value: function(e) {
                        return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!
                            this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -
                            1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this
                            .regex.excludeUris.test(e.href) && !this.regex.images.test(e.href))
                    }
                }], [{
                    key: "run",
                    value: function() {
                        "undefined" != typeof RocketPreloadLinksConfig && new n(
                            new RocketBrowserCompatibilityChecker({
                                capture: !0,
                                passive: !0
                            }), RocketPreloadLinksConfig).init()
                    }
                }]), n
            }();
            t.run();
        }());
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.8.0"
        id="wpb_composer_front_js-js"></script>
    <script data-minify="1" type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/cache/min/1/hank/wp-content/plugins/line-shortcodes/js/shortcodes-3rd.js?ver=1695004358"
        id="line-shortcode-3rd-js"></script>
    <script data-minify="1" type="text/javascript"
        src="https://live.21lab.co/hank/wp-content/cache/min/1/hank/wp-content/plugins/line-shortcodes/js/shortcodes.js?ver=1695004358"
        id="line-shortcode-js"></script>
    <script data-minify="1" type="text/javascript" defer
        src="https://live.21lab.co/hank/wp-content/cache/min/1/hank/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=1695002910"
        id="mc4wp-forms-api-js"></script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi3;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider31"] = {
            once: RS_MODULES.modules["revslider31"] !== undefined ? RS_MODULES.modules["revslider31"].once : undefined,
            init: function() {
                window.revapi3 = window.revapi3 === undefined || window.revapi3 === null || window.revapi3
                    .length === 0 ? document.getElementById("rev_slider_3_1") : window.revapi3;
                if (window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length == 0) {
                    window.revapi3initTry = window.revapi3initTry === undefined ? 0 : window.revapi3initTry + 1;
                    if (window.revapi3initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider31"].init()
                    });
                    return;
                }
                window.revapi3 = jQuery(window.revapi3);
                if (window.revapi3.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_3_1");
                    return;
                }
                revapi3.revolutionInit({
                    revapi: "revapi3",
                    visibilityLevels: "1240,1024,778,480",
                    gridwidth: 1512,
                    gridheight: 650,
                    lazyType: "smart",
                    spinner: "spinner1",
                    perspective: 600,
                    perspectiveType: "local",
                    editorheight: "650,768,960,720",
                    responsiveLevels: "1240,1024,778,480",
                    stopAtSlide: 1,
                    stopAfterLoops: 0,
                    shadow: 7,
                    stopLoop: true,
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        onHoverStop: false,
                        touch: {
                            touchenabled: true
                        },
                        arrows: {
                            enable: true,
                            style: "custom-arrow",
                            hide_onmobile: true,
                            hide_under: 778,
                            left: {
                                container: "layergrid",
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 192,
                                v_offset: 40
                            },
                            right: {
                                anim: "zoomin",
                                container: "layergrid",
                                v_align: "bottom",
                                h_offset: 97,
                                v_offset: 40
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "custom",
                            hide_over: "778px",
                            space: 7,
                            container: "layergrid"
                        },
                        tabs: {
                            enable: true,
                            style: "custom-tab",
                            hide_onmobile: true,
                            hide_under: 778,
                            anim: "bottom",
                            h_align: "left",
                            h_offset: 97,
                            v_offset: 10,
                            space: 30,
                            width: 300,
                            height: 108,
                            min_width: 300,
                            wrapper_padding: 0,
                            wrapper_color: "transparent",
                            visibleAmount: 2,
                            container: "layergrid"
                        }
                    },
                    sbtimeline: {
                        set: true
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
                /*
              change the "1" in the "revapi3" part below to match your slider's ID:
              https://www.themepunch.com/wp-content/uploads/2016/08/slider-id.png
            */
                var api = revapi3;

                /* no need to edit below */
                var divider = ' / ',
                    totalSlides,
                    numberText;

                api.one('revolution.slide.onloaded', function() {

                    totalSlides = api.revmaxslide();
                    numberText = api.find('.slide-status-numbers').text('1' + divider + totalSlides);

                    api.on('revolution.slide.onbeforeswap', function(e, data) {

                        numberText.text((data.nextslide.index() + 1) + divider + totalSlides);

                    });

                });

            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    <script>
        window.lazyLoadOptions = {
            elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids()
                            }
                        }
                    }
                }
            }
        };
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function(mutation) {
                        for (var i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                continue
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !==
                                'function') {
                                continue
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName(
                                'rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                });
                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: !0,
                    subtree: !0
                };
                observer.observe(b, config)
            }
        }, !1)
    </script>
    <script data-no-minify="1" async
        src="https://live.21lab.co/hank/wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js"></script>
</body>

</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1764240323 -->
