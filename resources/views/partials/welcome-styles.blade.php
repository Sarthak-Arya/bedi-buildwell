    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    <style>
        /* Slider tabs: remove big number and top line */
        rs-module-wrap .custom-tab .tp-tabs-inner-wrapper .tp-tab:before {
            content: none !important;
            display: none !important;
        }
        rs-module-wrap .custom-tab .tp-tabs-inner-wrapper .tp-tab:after {
            content: none !important;
            display: none !important;
        }
        /* Optional: reclaim left padding reserved for the number */
        rs-module-wrap .custom-tab .tp-tabs-inner-wrapper .tp-tab {
            padding-left: 0 !important;
        }
    </style>
    {{-- <style>
        /* Ensure tab numbers (1/2/3) render even with custom tabs.tmp */
        rs-module-wrap .custom-tab .tp-tabs-inner-wrapper {
            counter-reset: hank_tab_counter;
        }
        rs-module-wrap .custom-tab .tp-tabs-inner-wrapper .tp-tab .tp-tab-number:before {
            content: counter(hank_tab_counter);
            counter-increment: hank_tab_counter;
        }
    </style> --}}
    <!-- Slider tabs styling is provided by theme CSS (see public/css/main.css: .custom-tab rules) -->
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
            background-color: #ffd000;
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
            color: #ffd000;
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
            color: #ffd000;
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
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .site-header-sticky .off-canvas-toggle,
        .site-header-sticky .navigator .menu>li>a,
        .site-header-sticky .menu-extras>li>a {
            padding-top: 3px;
            padding-bottom: 3px;
        }
        
        /* Make sticky header logo larger */
        .site-header-sticky .header-brand img {
            max-height: 90px !important;
            height: auto !important;
        }
        
        /* Reduce sticky header overall height */
        .site-header-sticky .site-header-inner {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        
        /* Ensure header elements are always visible at all aspect ratios */
        .site-header .header-brand,
        .site-header-sticky .header-brand {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
        }
        
        /* Ensure mobile menu button is visible when navigation doesn't fit */
        @media only screen and (max-width: 1200px) {
            .sliding-desktop-off .site-header .off-canvas-toggle[data-target="off-canvas-right"],
            .sliding-desktop-off .site-header-sticky .off-canvas-toggle[data-target="off-canvas-right"] {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
            }
        }
        
        /* Ensure navigation is visible when it fits */
        @media only screen and (min-width: 1201px) {
            .site-header .navigator,
            .site-header-sticky .navigator {
                display: block !important;
                visibility: visible !important;
            }
        }
        
        /* At medium widths, show both navigation and menu button if needed */
        @media only screen and (min-width: 1025px) and (max-width: 1200px) {
            .site-header .navigator {
                display: block !important;
            }
            .sliding-desktop-off .site-header .off-canvas-toggle[data-target="off-canvas-right"],
            .sliding-desktop-off .site-header-sticky .off-canvas-toggle[data-target="off-canvas-right"] {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
            }
        }
        
        /* Ensure header content doesn't overflow and wraps properly */
        .site-header .header-content,
        .site-header-sticky .header-content {
            display: flex !important;
            align-items: center !important;
            flex-wrap: wrap !important;
            width: 100% !important;
        }
        
        /* Ensure logo is always visible and doesn't shrink too much */
        .site-header .header-brand,
        .site-header-sticky .header-brand {
            flex-shrink: 0 !important;
            min-width: 120px !important;
        }
        
        /* Ensure mobile menu button is always accessible */
        .site-header .off-canvas-toggle,
        .site-header-sticky .off-canvas-toggle {
            flex-shrink: 0 !important;
            z-index: 1000 !important;
        }
        
        /* Hide contact info on smaller screens to make room for menu */
        @media only screen and (max-width: 1100px) {
            .site-header .extras .header-info-text,
            .site-header-sticky .extras .header-info-text {
                display: none !important;
            }
        }
        
        /* Ensure navigation wraps or hides gracefully when space is limited */
        @media only screen and (min-width: 1025px) and (max-width: 1200px) {
            .site-header .navigator .menu {
                display: flex !important;
                flex-wrap: wrap !important;
            }
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
            color: #ffd000;
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
            background-color: #ffd000;
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
            background: #ffd000;
        }

        ::-moz-selection {
            background: #ffd000;
        }

        .related-posts .grid-posts .post .post-inner:hover .post-title a,
        .blog-masonry .post-inner:hover .post-title a,
        .single-post .content .post-content .post-right .navigation .nav-links li a:hover .post-title,
        .blog-grid .post .post-inner:hover .post-title a,
        #site .posts-carousel .post-inner:hover .post-title a,
        #site .blog-shortcode.post-thumbnail-cover .blog-grid .post .post-inner:hover .post-title,
        .woocommerce .products li:hover .woocommerce-loop-product__title,
        .woocommerce .product .summary .grouped_form table tr td.woocommerce-grouped-product-list-item__label a:hover {
            box-shadow: inset 0 -1px 0 0 #ffd000;
        }

        #site .imagebox:hover .box-title span:not(.box-subtitle) {
            -webkit-text-stroke-color: #ffd000;
        }

        .vc_custom_heading u {
            background-image: linear-gradient(180deg, transparent 65%, #ffd000 0);
        }

        #site .vc_custom_heading.style1 {
            -webkit-text-stroke-color: #000000;
        }

        #site .vc_section.shape-2:before,
        #site .vc_row.shape-2:before,
        #site .vc_section.shape-4:before,
        #site .vc_row.shape-4:before,
        .site-footer:before {
            background: repeating-linear-gradient(-45deg, transparent, transparent 4px, #ffd000 5px, #ffd000 10px, transparent 11px);
        }

        #site .vc_section.shape-3:before,
        #site .vc_row.shape-3:before,
        #site .vc_section.shape-5:before,
        #site .vc_row.shape-5:before {
            background: repeating-linear-gradient(-45deg, transparent, transparent 4px, #000000 5px, #000000 10px, transparent 11px);
        }

        /* Mobile: show slider arrows under the "Difference is our people" slider */
        @media (max-width: 767px) {
            /*
             * Revolution positions arrows with inline styles. Force our mobile layout:
             * - arrows sit BELOW the slider (in the black area)
             * - one back (left), one forward (right)
             */
            #rev_slider_3_1_wrapper {
                position: relative !important;
                overflow: visible !important; /* allow arrows to sit outside slider box */
                margin-bottom: 30px !important; /* make room in the page flow (black area) */
            }

            /* slider internals sometimes clip absolutely-positioned arrows */
            #rev_slider_3_1_wrapper rs-module,
            #rev_slider_3_1_wrapper rs-slides,
            #rev_slider_3_1_wrapper rs-slide,
            #rev_slider_3_1_wrapper .rev_slider_wrapper,
            #rev_slider_3_1_wrapper .rev_slider {
                overflow: visible !important;
            }

            #rev_slider_3_1_wrapper .tparrows.tp-leftarrow,
            #rev_slider_3_1_wrapper .tparrows.tp-rightarrow {
                top: auto !important;
                bottom: -95px !important; /* push below the white slider box into the black area */
                transform: none !important;
                position: absolute !important;
                z-index: 50 !important;
                opacity: 1 !important;
                visibility: visible !important;
                display: block !important;
            }

            /* main.css hides the left arrow globally; enable it for this slider on mobile */
            #rev_slider_3_1_wrapper .tparrows.tp-leftarrow {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
            }

            /* make left arrow icon point left (same glyph, flipped) */
            #rev_slider_3_1_wrapper .tparrows.tp-leftarrow:after {
                transform: scaleX(-1);
                display: inline-block;
            }

            #rev_slider_3_1_wrapper .tparrows.tp-leftarrow {
                left: calc(50% - 50px) !important; /* shift pair to the right */
                right: auto !important;
            }

            #rev_slider_3_1_wrapper .tparrows.tp-rightarrow {
                left: calc(50% + 50px) !important; /* shift pair to the right */
                right: auto !important;
            }
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
