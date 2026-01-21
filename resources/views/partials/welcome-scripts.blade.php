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
            background-color: #ffd000 !important
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
                            hide_onmobile: false,
                            hide_under: 0,
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
                            // tmp: '<span class="tp-tab-number"></span>@{{title}}<rs-tab></rs-tab>',
                            tmp: '@{{title}}',
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
