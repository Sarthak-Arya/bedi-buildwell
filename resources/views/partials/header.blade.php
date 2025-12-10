<div id="site-header" class="site-header site-header-classic header-brand-left header-transparent">
    <div class="site-header-inner wrap">
        <div class="header-content">
            <div class="header-brand">
                <a href="{{ route('welcome') }}">
                    <img width="180" height="104"
                        src="{{ asset('assets/logo_full_text_dark.svg') }}"
                        alt="Bedi Buildwell" class="logo logoDefault" /> </a>
            </div>

            <nav class="navigator" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">


                <ul id="menu-main-menu" class="menu menu-primary">
                    <li id="menu-item-176"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-176">
                        <a href="{{ route('about') }}">About</a>
                        <ul class="sub-menu">
                            <li id="menu-item-381"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381">
                                <a href="{{ route('about') }}">Company</a>
                            </li>
                            <li id="menu-item-512"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512">
                                <a href="{{ route('core-values') }}">Core Values</a>
                            </li>
                            <li id="menu-item-380"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380">
                                <a href="{{ route('leadership') }}">Leadership</a>
                            </li>
                            <li id="menu-item-781"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-781">
                                <a href="{{ route('why-choose-us') }}">Why choose us</a>
                            </li>
                            <li id="menu-item-175"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li id="menu-item-787"
                                class="sm has-border menu-item menu-item-type-custom menu-item-object-custom menu-item-787">
                                <a href="{{ route('why-choose-us') }}#testimonials">Testimonials</a>
                            </li>
                            <li id="menu-item-886"
                                class="sm menu-item menu-item-type-custom menu-item-object-custom menu-item-886">
                                <a href="{{ route('about') }}#history">Our History</a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-171"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-171">
                        <a href="{{ route('experience') }}">Experience</a>
                        <ul class="sub-menu">
                            <li id="menu-item-874"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-874">
                                <a href="{{ route('experience') }}">What we do</a>
                            </li>
                            <li id="menu-item-872"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-872">
                                <a href="{{ route('experience') }}#services">Our Services</a>
                            </li>
                            <li id="menu-item-876"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-876">
                                <a href="{{ route('experience') }}#safety">Safety</a>
                            </li>
                            <li id="menu-item-873"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-873">
                                <a href="{{ route('experience') }}#markets">Markets we Serve</a>
                            </li>
                            {{-- <li id="menu-item-887"
                                class="sm has-border menu-item menu-item-type-post_type menu-item-object-page menu-item-887">
                                <a href="{{route('experience')}}property-and-buildings/">Property
                                    and Buildings</a>
                            </li> --}}
                        </ul>
                    </li>
                    {{-- <li id="menu-item-131"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-131">
                        <a href="{{ route('projects') }}">Projects</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1087"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1087">
                                <a href="{{ route('projects') }}">Projects</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li id="menu-item-132"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-132"><a
                            href="{{ route('blog') }}">Blog</a></li>
                    {{-- <li id="menu-item-1142"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1142"><a
                            href="#">Shop</a></li> --}}
                </ul>
            </nav>

            <div class="extras">
                <div class="header-info-text">
                    <ul class="info-list">
                        <li>
                            <a href="#">
                                <i class="hank-screen-rotation"></i>
                                <p>
                                    <span>Call us Now!</span>
                                    <span class="lg">+91 99901 16198</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="hank-b-meeting"></i>
                                <p>
                                    <span>Talk to us</span>
                                    <span class="lg">info@bedibuildwell.com</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>


                {{-- <ul class="navigator menu-extras">
                    <li class="search-box">
                        <a href="#">
                            <i class="hank-zoom icon-32"></i>
                        </a>
                        <div class="widget widget_search">
                            <form role="search" method="get" class="search-form"
                                action="https://live.21lab.co/hank/">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search &hellip;"
                                        value="" name="s" />
                                </label>
                                <input type="submit" class="search-submit" value="Search" />
                            </form>
                        </div>
                    </li>
                </ul> --}}
            </div>

            <a href="javascript:;" data-target="off-canvas-right" class="off-canvas-toggle">
                <span></span>
            </a>

        </div>
    </div>
    <!-- /.site-header-inner -->
</div>
<!-- /.site-header -->

