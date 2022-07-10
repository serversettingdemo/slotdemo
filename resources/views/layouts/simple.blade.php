<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    @yield('title')
    {!! SEOMeta::generate() !!}
    <meta name="author" content="mentari138">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    {!! OpenGraph::generate() !!}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="pubkI4MIkzJulAnvM8t2NWsBTRuSxbuOi8IsY95lMYM" />

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/logo222.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('media/favicons/logo222.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('media/favicons/logo222.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/magnific-popup/magnific-popup.css') }}">
    @yield('css_after')
</head>

<body>
    <div id="page-container" class="sidebar-dark side-scroll page-header-glass main-content-boxed side-trans-enabled">
        <!-- Sidebar -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="bg-header-dark">
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="tracking-wide" href="{{ route('homepage') }}">
                        <img src="{{ asset('frontend/logo.png') }}" alt="Slot Demo" width="200" height="200"
                            class="img-fluid mt-4">
                    </a>
                    <!-- Options -->
                    <div>
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                            data-action="sidebar_close">
                            <i class="fa fa-times-circle"></i>
                        </button>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ Request::is('/') ? 'active' : '' }}"
                                href="{{ route('homepage') }}">
                                <i class="nav-main-link-icon fa fa-home"></i>
                                <span class="nav-main-link-name">Beranda</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ Request::is('demo-slot-pragmatic/*') ? 'active' : '' }}"
                                href="/">
                                <span class="nav-main-link-name">Demo Slot Pragmatic</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ Request::is('demo-slot-pg-soft/*') ? 'active' : '' }}"
                                href="/">
                                <span class="nav-main-link-name">Demo Slot Pg Soft</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header bg-dark">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Logo -->
                    <a class="fs-lg" href="{{ route('homepage') }}">
                        <img src="{{ asset('frontend/logo.png') }}" alt="Slot Demo" width="200" height="200"
                            class="img-fluid mt-4">
                    </a>
                    <!-- END Logo -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- Menu -->
                    <div class="d-none d-lg-block">
                        <ul class="nav-main nav-main-horizontal nav-main-hover">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ Request::is('/') ? 'active' : '' }}"
                                    href="{{ route('homepage') }}">
                                    <!-- <i class="nav-main-link-icon fa fa-home"></i> -->
                                    <span class="nav-main-link-name">Beranda</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link {{ Request::is('demo-slot-pragmatic', 'demo-slot-pragmatic/*') ? 'active' : '' }}"
                                    href="/">
                                    <span class="nav-main-link-name">Demo Slot Pragmatic</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link {{ Request::is('demo-slot-pg-soft') ? 'active' : '' }}"
                                    href="{{ route('pgsoft') }}">
                                    <span class="nav-main-link-name">Demo Slot Pg Soft</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Menu -->

                    <!-- Toggle Sidebar -->
                    <button type="button" class="btn btn-alt-secondary d-lg-none me-1" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary-darker">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->

        @include('frontend.footer')
    </div>
    <!-- END Page Container -->

    <!-- Dashmix Core JS -->
    <script src="{{ mix('/js/dashmix.app.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    @yield('js_after')
</body>

</html>
