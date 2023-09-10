@foreach($settings as $setting)
<!-- Main header-->
<header class="main-header header-style-one">
    <div class="header-style-one__inner">
        <div class="main-logo-box">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo.png') }}" alt="Awesome Logo" title=""></a>
        </div>
        <!--Start Header Top-->
        <div class="header-style-one__header-content">
            <div class="header-top">
                <div class="auto-container">
                    <div class="outer-box">

                        <div class="header-top__left">
                            <div class="welcome-text">
                                <p>Welcome!... Proof Of Quality Is On The Roof.</p>
                            </div>
                        </div>

                        <div class="header-top__right">
                            <div class="header-contact-info text-right-rtl">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-phone-call-3"></span>
                                        </div>

                                        <div class="text">
                                            <h6><a href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-email-1"></span>
                                        </div>
                                        <div class="text">
                                            <h6><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-social-link">
                                <div class="inner-title">
                                    <h4>Follow On:</h4>
                                </div>
                                <div class="social-link">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="https://facebook.com/{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Top-->

            <!--Start Header-->
            <div class="header">
                <div class="auto-container">
                    <div class="outer-box">

                        <div class="header-left">
                            <div class="nav-outer style1 clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <div class="inner">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div>
                                </div>
                                <!-- Main Menu -->
                                <nav class="main-menu style1 navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix"
                                         id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li><a href="{{ route('index') }}">@lang('main.main')</a></li>
                                            <li><a href="{{ route('about') }}">@lang('main.about')</a></li>
                                            <li><a href="{{ route('services') }}">@lang('main.service')</a>
                                            <li><a href="{{ route('contact') }}">@lang('main.contact')</a></li>
                                            <li class="dropdown">
                                                <a href="#">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                                                <ul>
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <li>
                                                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                {{ $properties['native'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                        </div>

                        <div class="header-right">

                            <div class="header-right_buttom">
                                <div class="btns-box">
                                    <a class="btn-one" href="{{ route('contact') }}">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <span class="txt">Get A Quote</span>
                                    </a>
                                </div>
                            </div>
                            <div class="side-content-button">
                                <a class="navSidebar-button" href="#"><span class="flaticon-menu"></span></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--End header-->
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="{{ route('index') }}" class="img-responsive"><img
                            src="{{ asset('assets/images/resources/sticky-logo.png') }}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/mobilemenu-logo.png') }}"
                                                            alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>

@endforeach
