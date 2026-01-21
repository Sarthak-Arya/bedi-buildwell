@php
    $isAboutSection = request()->routeIs('about') || request()->routeIs('core-values') || request()->routeIs('leadership') || request()->routeIs('why-choose-us');
@endphp
<div id="site-header" class="site-header site-header-classic header-brand-left header-transparent">
    <div class="site-header-inner wrap">
        <div class="header-content">
            <div class="header-brand">
                <a href="{{ route('welcome') }}">
                    <img width="220" height="128" style="height:auto;margin-top:-40px;"
                        src="{{ asset('assets/icons/logo_with_text_dark.png') }}"
                        alt="Bedi Buildwell" class="logo logoDefault" /> </a>
            </div>

            <nav class="navigator" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" aria-label="Main Navigation" role="navigation">
                <ul id="menu-main-menu" class="menu menu-primary" role="menubar">
                    <li id="menu-item-home"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"
                        role="none">
                        <a href="{{ route('welcome') }}" 
                           role="menuitem"
                           {{ request()->routeIs('welcome') ? 'aria-current="page"' : '' }}>Home</a>
                    </li>
                    <li id="menu-item-176"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-176"
                        role="none">
                        <a href="{{ route('about') }}" 
                           role="menuitem"
                           aria-haspopup="true"
                           aria-expanded="false"
                           {{ $isAboutSection ? 'aria-current="page"' : '' }}>About</a>
                        <ul class="sub-menu" role="menu" aria-label="About submenu">
                            <li id="menu-item-381"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381"
                                role="none">
                                <a href="{{ route('about') }}" 
                                   role="menuitem"
                                   {{ request()->routeIs('about') ? 'aria-current="page"' : '' }}>Company</a>
                            </li>
                            <li id="menu-item-512"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512"
                                role="none">
                                <a href="{{ route('core-values') }}" 
                                   role="menuitem"
                                   {{ request()->routeIs('core-values') ? 'aria-current="page"' : '' }}>Core Values</a>
                            </li>
                            <li id="menu-item-380"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380"
                                role="none">
                                <a href="{{ route('leadership') }}" 
                                   role="menuitem"
                                   {{ request()->routeIs('leadership') ? 'aria-current="page"' : '' }}>Leadership</a>
                            </li>
                            <li id="menu-item-781"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-781"
                                role="none">
                                <a href="{{ route('why-choose-us') }}" 
                                   role="menuitem"
                                   {{ request()->routeIs('why-choose-us') ? 'aria-current="page"' : '' }}>Why choose us</a>
                            </li>
                            <li id="menu-item-175"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"
                                role="none">
                                <a href="{{ route('contact') }}" 
                                   role="menuitem"
                                   {{ request()->routeIs('contact') ? 'aria-current="page"' : '' }}>Contact</a>
                            </li>
                            <li id="menu-item-787"
                                class="sm has-border menu-item menu-item-type-custom menu-item-object-custom menu-item-787"
                                role="none">
                                <a href="{{ route('why-choose-us') }}#testimonials" role="menuitem">Testimonials</a>
                            </li>
                            <li id="menu-item-886"
                                class="sm menu-item menu-item-type-custom menu-item-object-custom menu-item-886"
                                role="none">
                                <a href="{{ route('about') }}#history" role="menuitem">Our History</a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-171"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-171"
                        role="none">
                        <a href="{{ route('experience') }}" 
                           role="menuitem"
                           aria-haspopup="true"
                           aria-expanded="false"
                           {{ request()->routeIs('experience') ? 'aria-current="page"' : '' }}>Experience</a>
                        <ul class="sub-menu" role="menu" aria-label="Experience submenu">
                            <li id="menu-item-874"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-874"
                                role="none">
                                <a href="{{ route('experience') }}" 
                                   role="menuitem"
                                   {{ request()->routeIs('experience') ? 'aria-current="page"' : '' }}>What we do</a>
                            </li>
                            <li id="menu-item-872"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-872"
                                role="none">
                                <a href="{{ route('experience') }}#services" role="menuitem">Our Services</a>
                            </li>
                            <li id="menu-item-876"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-876"
                                role="none">
                                <a href="{{ route('experience') }}#safety" role="menuitem">Safety</a>
                            </li>
                            <li id="menu-item-873"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-873"
                                role="none">
                                <a href="{{ route('experience') }}#markets" role="menuitem">Markets we Serve</a>
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
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-132"
                        role="none">
                        <a href="{{ route('blog') }}" 
                           role="menuitem"
                           {{ request()->routeIs('blog') ? 'aria-current="page"' : '' }}>Blog</a>
                    </li>
                    <li id="menu-item-calculator"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-calculator"
                        role="none">
                        <a href="{{ route('calculator') }}" 
                           role="menuitem"
                           {{ request()->routeIs('calculator') ? 'aria-current="page"' : '' }}>Calculator</a>
                    </li>
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

