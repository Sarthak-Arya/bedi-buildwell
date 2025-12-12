<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
        name="viewport">
    <link rel="profile" href="//gmpg.org/xfn/11" />

    <title>Construction Cost Calculator &#8211; Bedi Buildwell</title>
    <link rel="icon" href="{{ asset('assets/logo_dark.svg') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/logo_dark.svg') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/logo_dark.svg') }}" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap"
        media="print" onload="this.media='all'" /><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&#038;subset=cyrillic%2Clatin%2Clatin-ext&#038;display=swap" />
    </noscript>
    {{-- Font Awesome 5 CDN - Load before main.css so its font-face rules take precedence --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- CSS files --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    
    {{-- Suppress 404 errors for missing assets --}}
    <style>
        /* Override broken FA5 Brands font-face from main.css - force CDN fonts */
        @font-face {
            font-family: 'Font Awesome 5 Brands';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/webfonts/fa-brands-400.woff2') format('woff2'),
                 url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/webfonts/fa-brands-400.woff') format('woff'),
                 url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/webfonts/fa-brands-400.ttf') format('truetype');
        }
        
        /* Ensure .fab class uses the CDN font */
        .fab {
            font-family: 'Font Awesome 5 Brands' !important;
        }
        
        /* Remove arrow.svg background from select elements to prevent 404 */
        body select {
            background-image: none !important;
            background: transparent !important;
            padding-right: 19px !important;
        }
    </style>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//static.addtoany.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
    
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
            background-color: #feeb35;
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
            color: #feeb35;
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
            color: #feeb35;
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
        
        /* Override fixed width for calculator form row - full width */
        .content>.vc_section>.vc_row .calculator-form-row {
            width: 100% !important;
            max-width: 100% !important;
        }
        
        /* Ensure the vc_row container uses full width */
        .vc_custom_1574824341747.vc_row {
            width: 100% !important;
            max-width: 100% !important;
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

        .vc_custom_1574824327973 {
            padding-top: 150px !important;
            padding-bottom: 40px !important;
            background-color: #232323 !important;
            width: 100% !important;
            max-width: 100% !important;
        }

        .vc_custom_1583551684542 {
            margin-bottom: 35px !important;
        }

        .vc_custom_1574824341747 {
            margin-right: 0 !important;
            margin-left: 0 !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        
        /* Remove any max-width constraints on the row */
        .vc_custom_1574824341747 .row-inner {
            max-width: 100% !important;
        }

        .vc_custom_1574391351816 {
            padding-top: 50px !important;
            padding-right: 60px !important;
            padding-bottom: 50px !important;
            padding-left: 60px !important;
            background-color: #ffffff !important;
        }
        
        /* Responsive padding for full-width form */
        @media (max-width: 991px) {
            .vc_custom_1574391351816 {
                padding-right: 40px !important;
                padding-left: 40px !important;
            }
        }
        
        @media (max-width: 767px) {
            .vc_custom_1574391351816 {
                padding-right: 30px !important;
                padding-left: 30px !important;
                padding-top: 40px !important;
                padding-bottom: 40px !important;
            }
        }
        
        /* Full width form container */
        .calculator-form-row {
            width: 100% !important;
            max-width: 100% !important;
            display: flex !important;
            align-items: stretch !important;
            margin: 0 !important;
        }
        
        /* Ensure form takes full width */
        .calculator-form-column {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
            flex: 1 1 100% !important;
        }
        
        /* Override Bootstrap column width constraints - full width */
        .calculator-form-column.vc_column_container {
            width: 100% !important;
            max-width: 100% !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            flex: 1 1 100% !important;
        }
        
        /* Ensure form fields are properly balanced in grid - symmetrical layout */
        .contact-light .field.grid {
            display: grid !important;
            grid-template-columns: 1fr 1fr !important;
            gap: 30px !important;
            align-items: start !important;
        }
        
        /* Make each field container symmetrical */
        .contact-light .field.grid > .field {
            display: flex !important;
            flex-direction: column !important;
            min-height: 100% !important;
        }
        
        /* Ensure consistent spacing and alignment */
        .contact-light .field {
            margin-bottom: 0 !important;
        }
        
        /* Make input/select fields have consistent height for symmetry */
        .contact-light .field .wpcf7-form-control-wrap {
            flex: 1 !important;
            display: flex !important;
        }
        
        .contact-light .field .wpcf7-form-control-wrap input,
        .contact-light .field .wpcf7-form-control-wrap select {
            flex: 1 !important;
            min-height: 55px !important;
        }
        
        /* Make labels single line, bold, and input fields bigger */
        .contact-light .field label {
            white-space: nowrap !important;
            font-size: 15px !important;
            font-weight: bold !important;
            line-height: 1.5 !important;
            display: block !important;
            margin-bottom: 10px !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            color: #000000 !important;
        }
        
        /* For very long labels, allow them to wrap on smaller screens but keep single line on desktop */
        @media (min-width: 992px) {
            .contact-light .field label {
                white-space: nowrap !important;
                overflow: hidden !important;
                text-overflow: ellipsis !important;
                font-weight: bold !important;
            }
        }
        
        /* Improve symmetry - equal column widths and spacing */
        .contact-light .field.grid > .field:first-child,
        .contact-light .field.grid > .field:last-child {
            width: 100% !important;
        }
        
        /* Consistent spacing between form rows */
        .contact-light > .field.grid {
            margin-bottom: 25px !important;
        }
        
        .contact-light > .field.grid:last-of-type {
            margin-bottom: 0 !important;
        }
        
        /* Make input and select fields bigger and symmetrical */
        .contact-light .field input[type="text"],
        .contact-light .field input[type="email"],
        .contact-light .field input[type="tel"],
        .contact-light .field input[type="number"],
        .contact-light .field select {
            width: 100% !important;
            min-width: 100% !important;
            padding: 18px 20px !important;
            font-size: 16px !important;
            box-sizing: border-box !important;
            min-height: 55px !important;
            height: 55px !important;
            border: 1px solid #e6e6e6 !important;
        }
        
        /* Ensure selects match input height */
        .contact-light .field select {
            appearance: none !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            background-color: rgba(255, 255, 255, 0) !important;
        }
        
        /* Ensure form field containers take full width */
        .contact-light .field .wpcf7-form-control-wrap {
            width: 100% !important;
            display: block !important;
        }
        
        .contact-light .field .wpcf7-form-control-wrap input,
        .contact-light .field .wpcf7-form-control-wrap select {
            width: 100% !important;
        }
        
        /* Responsive adjustments */
        @media (max-width: 767px) {
            .contact-light .field.grid {
                grid-template-columns: 1fr !important;
                gap: 20px !important;
            }
            
            .contact-light .field label {
                font-size: 14px !important;
                font-weight: bold !important;
                white-space: normal !important;
                margin-bottom: 8px !important;
            }
            
            .contact-light .field input[type="text"],
            .contact-light .field input[type="email"],
            .contact-light .field input[type="tel"],
            .contact-light .field input[type="number"],
            .contact-light .field select {
                padding: 16px 18px !important;
                font-size: 15px !important;
                min-height: 50px !important;
                height: 50px !important;
            }
            
            .contact-light .field input[type="submit"] {
                min-width: 200px !important;
                padding: 16px 30px !important;
                width: 100% !important;
                max-width: 100% !important;
            }
        }
        
        @media (min-width: 768px) and (max-width: 991px) {
            .contact-light .field.grid {
                gap: 20px !important;
            }
        }
        
        /* Suppress missing arrow.svg errors in buttons */
        .button.has-arrow:after {
            display: none !important;
        }
        
        /* Calculation Result Styling */
        #calculation-result {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        #formspree-message.success {
            color: #28a745;
            padding: 15px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
        
        #formspree-message.error {
            color: #dc3545;
            padding: 15px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }
        
    </style>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js" 
        integrity="sha256-UnTxHm+zKuDPLfufgEMnKGXDl6fEIjtM+n1Q6lL73ok=" crossorigin="anonymous" id="jquery-migrate-js"></script>
</head>

<body
    class="wp-singular page-template page-template-tmpl page-template-template-fullwidth page-template-tmpltemplate-fullwidth-php page page-id-calculator wp-theme-hank theme-hank woocommerce-no-js sliding-desktop-off sliding-overlay layout-wide wpb-js-composer js-comp-ver-6.8.0 vc_responsive"
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
                                <section class="vc_section vc_custom_1574824327973 vc_section-has-fill">
                                    <div
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1583551684542 vc_row-o-content-bottom vc_row-flex">
                                        <div class="row-inner">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div style="font-size: 40px;color: #ffffff;line-height: 44px;text-align: left"
                                                            class="vc_custom_heading">Construction Cost Calculator<br />
                                                            Calculate your <strong>construction cost</strong> instantly.</div>
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
                                                                <p><span style="color: #b7b7b7;">Fill out the form below to get an instant estimate for your construction project based on plot size, number of floors, and other key factors.</span></p>

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
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1574824341747 vc_row-o-equal-height vc_row-flex">
                                        <div class="row-inner calculator-form-row">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill calculator-form-column">
                                                <div class="vc_column-inner vc_custom_1574391351816">
                                                    <div class="wpb_wrapper">
                                                        <div role="form" class="wpcf7" id="wpcf7-calculator-form"
                                                            lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response">
                                                                <p role="status" aria-live="polite"
                                                                    aria-atomic="true"></p>
                                                                <ul></ul>
                                                            </div>
                                                            {{-- 
                                                                IMPORTANT: Replace YOUR_FORM_ID with your actual Formspree form ID
                                                                Get your form ID from: https://formspree.io/forms
                                                            --}}
                                                            <form action="https://formspree.io/f/mgvgryva" method="post"
                                                                class="wpcf7-form init" novalidate="novalidate"
                                                                data-status="init" id="calculator-form">
                                                                <input type="hidden" name="_replyto" id="replyto_email" value="">
                                                                <input type="hidden" name="calculated_cost" id="calculated_cost" value="">
                                                                <div class="contact-light">
                                                                    <div class="field grid">
                                                                        <div class="field">
                                                                            <label>First Name</label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap first-name"><input
                                                                                    type="text" name="first_name"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text"
                                                                                    aria-invalid="false"
                                                                                    placeholder="First Name" /></span>
                                                                        </div>
                                                                        <div class="field">
                                                                            <label>Last Name</label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap last-name"><input
                                                                                    type="text" name="last_name"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Last Name" /></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field grid">
                                                                        <div class="field">
                                                                            <label>Email</label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap email"><input
                                                                                    type="email" name="email"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Email" /></span>
                                                                        </div>
                                                                        <div class="field">
                                                                            <label>Phone</label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap phone"><input
                                                                                    type="tel" name="phone"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Phone Number" /></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field grid">
                                                                        <div class="field">
                                                                            <label>What is the size of your plot?</label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap plot-size"><input
                                                                                    type="number" name="plot_size"
                                                                                    value="" size="40"
                                                                                    min="0"
                                                                                    step="0.01"
                                                                                    class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Plot Size" /></span>
                                                                        </div>
                                                                        <div class="field">
                                                                            <label>What is the unit of plot measurement? <span style="color: red;">*</span></label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap plot-unit"><select
                                                                                    name="plot_unit"
                                                                                    class="wpcf7-form-control wpcf7-select"
                                                                                    aria-invalid="false">
                                                                                    <option value="">Select Unit</option>
                                                                                    <option value="Square Yards">Square Yards</option>
                                                                                    <option value="Square Feet">Square Feet</option>
                                                                                    <option value="Square Meters">Square Meters</option>
                                                                                </select></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field grid">
                                                                        <div class="field">
                                                                            <label>Size of your Plot Front?</label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap plot-front"><input
                                                                                    type="number" name="plot_front"
                                                                                    value="" size="40"
                                                                                    min="0"
                                                                                    step="0.01"
                                                                                    class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Plot Front Size" /></span>
                                                                        </div>
                                                                        <div class="field">
                                                                            <label>What is the unit of plot front measurement? <span style="color: red;">*</span></label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap plot-front-unit"><select
                                                                                    name="plot_front_unit"
                                                                                    class="wpcf7-form-control wpcf7-select"
                                                                                    aria-invalid="false">
                                                                                    <option value="">Select Unit</option>
                                                                                    <option value="Feet">Feet</option>
                                                                                    <option value="Meters">Meters</option>
                                                                                </select></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field grid">
                                                                        <div class="field">
                                                                            <label>How many floors do you wish to build? <span style="color: red;">*</span></label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap floors"><select
                                                                                    name="floors"
                                                                                    class="wpcf7-form-control wpcf7-select"
                                                                                    aria-invalid="false">
                                                                                    <option value="">Select Floors</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                </select></span>
                                                                        </div>
                                                                        <div class="field">
                                                                            <label>Do you wish to build a basement? <span style="color: red;">*</span></label><br />
                                                                            <span
                                                                                class="wpcf7-form-control-wrap basement"><select
                                                                                    name="basement"
                                                                                    class="wpcf7-form-control wpcf7-select"
                                                                                    aria-invalid="false">
                                                                                    <option value="">Select Option</option>
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field grid">
                                                                        <div class="field" style="grid-column: 1 / -1; text-align: center; margin-top: 10px;">
                                                                            <input type="submit"
                                                                                value="Calculate Construction Cost"
                                                                                class="wpcf7-form-control has-spinner wpcf7-submit" 
                                                                                style="width: auto; min-width: 250px; padding: 18px 40px; cursor: pointer;" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpcf7-response-output"
                                                                    aria-hidden="true"></div>
                                                            </form>
                                                            
                                                            <!-- Calculation Result Display -->
                                                            <div id="calculation-result" style="display: none; margin-top: 40px; padding: 30px; background-color: #f8f9fa; border-radius: 8px; border: 2px solid #e0e0e0;">
                                                                <h3 style="color: #232323; margin-bottom: 20px; text-align: center;">Estimated Construction Cost</h3>
                                                                <div id="cost-display" style="text-align: center; font-size: 36px; font-weight: bold; color: #d4af37; margin: 20px 0;"></div>
                                                                <div id="cost-breakdown" style="margin: 20px 0; padding: 20px; background-color: #ffffff; border-radius: 5px;">
                                                                    <table style="width: 100%; border-collapse: collapse;">
                                                                        <tr>
                                                                            <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;"><strong>Plot Area:</strong></td>
                                                                            <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; text-align: right;" id="breakdown-plot-area"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;"><strong>Number of Floors:</strong></td>
                                                                            <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; text-align: right;" id="breakdown-floors"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;"><strong>Basement:</strong></td>
                                                                            <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; text-align: right;" id="breakdown-basement"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 12px 0; font-weight: bold; font-size: 18px; color: #232323;">Total Estimated Cost:</td>
                                                                            <td style="padding: 12px 0; font-weight: bold; font-size: 18px; color: #d4af37; text-align: right;" id="breakdown-total"></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div id="formspree-message" style="margin-top: 20px; text-align: center; display: none;"></div>
                                                            </div>
                                                        </div>
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
        // Construction cost calculation constants
        const COST_PER_SQFT = 1500; // Cost per square foot in INR (adjustable)
        
        // Remove loading spinner by adding is-loaded class to body
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('is-loaded');
            
            // Prevent negative values in number inputs
            const plotSizeInput = document.querySelector('input[name="plot_size"]');
            const plotFrontInput = document.querySelector('input[name="plot_front"]');
            
            function preventNegative(e) {
                if (e.target.value < 0) {
                    e.target.value = 0;
                }
            }
            
            function validateOnInput(e) {
                if (e.target.value < 0) {
                    e.target.value = '';
                }
            }
            
            if (plotSizeInput) {
                plotSizeInput.addEventListener('input', validateOnInput);
                plotSizeInput.addEventListener('change', preventNegative);
                plotSizeInput.addEventListener('keydown', function(e) {
                    // Prevent minus key
                    if (e.key === '-' || e.key === 'e' || e.key === 'E' || e.key === '+') {
                        e.preventDefault();
                    }
                });
            }
            
            if (plotFrontInput) {
                plotFrontInput.addEventListener('input', validateOnInput);
                plotFrontInput.addEventListener('change', preventNegative);
                plotFrontInput.addEventListener('keydown', function(e) {
                    // Prevent minus key
                    if (e.key === '-' || e.key === 'e' || e.key === 'E' || e.key === '+') {
                        e.preventDefault();
                    }
                });
            }
            
            // Mobile menu toggle functionality
            const offCanvasToggles = document.querySelectorAll('.off-canvas-toggle[data-target="off-canvas-right"]');
            const body = document.body;
            
            if (offCanvasToggles.length > 0) {
                offCanvasToggles.forEach(function(toggle) {
                    toggle.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        body.classList.toggle('off-canvas-right-active');
                    });
                });
            }
            
            // Form submission handler
            const calculatorForm = document.getElementById('calculator-form');
            const resultDiv = document.getElementById('calculation-result');
            const messageDiv = document.getElementById('formspree-message');
            
            if (calculatorForm) {
                calculatorForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Validate required fields
                    const plotSize = parseFloat(document.querySelector('input[name="plot_size"]').value) || 0;
                    const plotUnit = document.querySelector('select[name="plot_unit"]').value;
                    const floors = document.querySelector('select[name="floors"]').value;
                    const basement = document.querySelector('select[name="basement"]').value;
                    const email = document.querySelector('input[name="email"]').value;
                    const submitButton = document.querySelector('input[type="submit"]');
                    
                    if (!plotUnit || !floors || !basement) {
                        messageDiv.className = 'error';
                        messageDiv.textContent = 'Please fill in all required fields (marked with *)';
                        messageDiv.style.display = 'block';
                        return;
                    }
                    
                    if (plotSize <= 0) {
                        messageDiv.className = 'error';
                        messageDiv.textContent = 'Please enter a valid plot size';
                        messageDiv.style.display = 'block';
                        return;
                    }
                    
                    // Calculate construction cost
                    const result = calculateConstructionCost(plotSize, plotUnit, floors, basement);
                    
                    // Display result
                    displayResult(result, plotSize, plotUnit, floors, basement);
                    
                    // Set email for replyto
                    if (email) {
                        document.getElementById('replyto_email').value = email;
                    }
                    
                    // Disable submit button and show submitting state
                    if (submitButton) {
                        submitButton.disabled = true;
                        submitButton.value = 'Submitting...';
                    }
                    
                    // Hide previous messages
                    messageDiv.style.display = 'none';
                    
                    // Prepare form data
                    const formData = new FormData(calculatorForm);
                    
                    // Submit to Formspree automatically
                    fetch(calculatorForm.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        if (response.ok) {
                            messageDiv.className = 'success';
                            messageDiv.textContent = 'Form submitted successfully.';
                            messageDiv.style.display = 'block';
                        } else {
                            return response.json().then(data => {
                                if (data.errors) {
                                    throw new Error(data.errors.map(error => error.message).join(', '));
                                } else {
                                    throw new Error('There was an error submitting the form. Please try again.');
                                }
                            });
                        }
                    })
                    .catch(error => {
                        messageDiv.className = 'error';
                        messageDiv.textContent = error.message || 'There was an error submitting the form. Please try again.';
                        messageDiv.style.display = 'block';
                    })
                    .finally(() => {
                        if (submitButton) {
                            submitButton.disabled = false;
                            submitButton.value = 'Calculate Construction Cost';
                        }
                    });
                    
                    // Scroll to result
                    resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                });
            }
            
            /**
             * Calculate construction cost
             * @param {number} plotSize - Size of the plot
             * @param {string} plotUnit - Unit of measurement (Square Yards, Square Feet, Square Meters)
             * @param {string} floors - Number of floors
             * @param {string} basement - Whether basement is included (Yes/No)
             * @returns {object} Calculation result with cost and breakdown
             */
            function calculateConstructionCost(plotSize, plotUnit, floors, basement) {
                // Convert plot size to square feet
                let plotAreaSqft;
                switch(plotUnit) {
                    case 'Square Yards':
                        plotAreaSqft = plotSize * 9;
                        break;
                    case 'Square Feet':
                        plotAreaSqft = plotSize;
                        break;
                    case 'Square Meters':
                        plotAreaSqft = plotSize * 10.764;
                        break;
                    default:
                        plotAreaSqft = plotSize;
                }
                
                // Calculate base cost per floor
                const baseCost = plotAreaSqft * COST_PER_SQFT;
                
                // Multiply by number of floors
                const floorMultiplier = parseInt(floors) || 1;
                const totalFloorCost = baseCost * floorMultiplier;
                
                // Apply basement adjustment (15% increase if basement is Yes)
                let finalCost = totalFloorCost;
                let basementAdjustment = 0;
                
                if (basement === 'Yes') {
                    basementAdjustment = totalFloorCost * 0.15;
                    finalCost = totalFloorCost + basementAdjustment;
                }
                
                return {
                    plotAreaSqft: plotAreaSqft.toFixed(2),
                    baseCost: baseCost,
                    floorMultiplier: floorMultiplier,
                    totalFloorCost: totalFloorCost,
                    basementAdjustment: basementAdjustment,
                    finalCost: finalCost,
                    plotUnit: plotUnit
                };
            }
            
            /**
             * Display calculation result
             */
            function displayResult(result, plotSize, plotUnit, floors, basement) {
                const costDisplay = document.getElementById('cost-display');
                const breakdownPlotArea = document.getElementById('breakdown-plot-area');
                const breakdownFloors = document.getElementById('breakdown-floors');
                const breakdownBasement = document.getElementById('breakdown-basement');
                const breakdownTotal = document.getElementById('breakdown-total');
                
                // Format number with Indian numbering system
                function formatINR(amount) {
                    return '₹' + amount.toLocaleString('en-IN', { maximumFractionDigits: 0 });
                }
                
                // Display total cost
                costDisplay.textContent = formatINR(result.finalCost);
                
                // Display breakdown
                breakdownPlotArea.textContent = plotSize + ' ' + plotUnit + ' (' + result.plotAreaSqft + ' sq ft)';
                breakdownFloors.textContent = floors;
                breakdownBasement.textContent = basement;
                breakdownTotal.textContent = formatINR(result.finalCost);
                
                // Store calculated cost in hidden field
                document.getElementById('calculated_cost').value = formatINR(result.finalCost);
                
                // Show result div
                resultDiv.style.display = 'block';
                
                // Reset message
                messageDiv.style.display = 'none';
            }
        });
        
        // Fallback in case DOMContentLoaded already fired
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                document.body.classList.add('is-loaded');
            });
        } else {
            document.body.classList.add('is-loaded');
        }
    </script>

</body>

</html>
