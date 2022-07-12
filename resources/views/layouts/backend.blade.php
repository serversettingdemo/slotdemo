<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Slot Demo Dashboard</title>

    <meta name="description" content="Slot Demo">
    <meta name="author" content="slot demo">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/logo222.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('media/favicons/logo222.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('media/favicons/logo222.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
    @yield('css_after')

    <!-- Scripts -->
    <!-- <script>
        window.Laravel = {
            !!json_encode(['csrfToken' => csrf_token()]) !!
        };
    </script> -->

    <script>
        window.Laravel = {
            "csrfToken": "{{ csrf_token() }}"
        }
    </script>

</head>

<body>
    <!-- Page Container -->
    <!--
 Available classes for #page-container:

 GENERIC

  'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                - Theme helper buttons [data-toggle="theme"],
                - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

 SIDEBAR & SIDE OVERLAY

  'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
  'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
  'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
  'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
  'sidebar-dark'                              Dark themed sidebar

  'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
  'side-overlay-o'                            Visible Side Overlay by default

  'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

  'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

 HEADER

  ''                                          Static Header if no class is added
  'page-header-fixed'                         Fixed Header


 FOOTER

  ''                                          Static Footer if no class is added
  'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

 HEADER STYLE

  ''                                          Classic Header style if no class is added
  'page-header-dark'                          Dark themed Header
  'page-header-glass'                         Light themed Header with transparency by default
                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
  'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

 MAIN CONTENT LAYOUT

  ''                                          Full width Main Content if no class is added
  'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
  'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

 DARK MODE

  'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
  -->
    <div id="page-container"
        class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="bg-image"
                style="background-image: url('{{ asset('media/various/bg_side_overlay_header.jpg') }}')">
                <div class="bg-primary-op">
                    <div class="content-header">
                        <!-- User Avatar -->
                        <a class="img-link me-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}"
                                alt="">
                        </a>
                        <!-- END User Avatar -->

                        <!-- User Info -->
                        <div class="ms-2">
                            <a class="text-white fw-semibold"
                                href="javascript:void(0)">{{ auth()->user()->username }}</a>
                            <div class="text-white-75 fs-sm">Super Admin</div>
                        </div>
                        <!-- END User Info -->

                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout"
                            data-action="side_overlay_close">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Side Overlay -->
                    </div>
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <div class="block pull-x mb-0">
                    <!-- Color Themes -->
                    <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row g-sm text-center">
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme"
                                    data-theme="default" href="#">
                                    Default
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme"
                                    data-theme="{{ mix('/css/themes/xwork.css') }}" href="#">
                                    xWork
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme"
                                    data-theme="{{ mix('/css/themes/xmodern.css') }}" href="#">
                                    xModern
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme"
                                    data-theme="{{ mix('/css/themes/xeco.css') }}" href="#">
                                    xEco
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme"
                                    data-theme="{{ mix('/css/themes/xsmooth.css') }}" href="#">
                                    xSmooth
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme"
                                    data-theme="{{ mix('/css/themes/xinspire.css') }}" href="#">
                                    xInspire
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme"
                                    data-theme="{{ mix('/css/themes/xdream.css') }}" href="#">
                                    xDream
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme"
                                    data-theme="{{ mix('/css/themes/xpro.css') }}" href="#">
                                    xPro
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme"
                                    data-theme="{{ mix('/css/themes/xplay.css') }}" href="#">
                                    xPlay
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Color Themes -->

                    <!-- Sidebar -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row g-sm text-center">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Sidebar -->

                    <!-- Header -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase fs-sm fw-bold">Header</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row g-sm text-center mb-2">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="header_style_light" href="javascript:void(0)">Light</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="header_mode_static" href="javascript:void(0)">Static</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Header -->

                    <!-- Content -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase fs-sm fw-bold">Content</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row g-sm text-center">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                            </div>
                            <div class="col-12 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Content -->
                </div>
                <div class="block pull-x mb-0">
                    <!-- Content -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase fs-sm fw-bold">Heading</span>
                    </div>
                    <div class="block-content">
                        <p>
                            Content..
                        </p>
                    </div>
                    <!-- END Content -->
                </div>
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
  Sidebar Mini Mode - Display Helper classes

  Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
  Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
   If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

  Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
  Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
  Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
 -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="bg-header-dark">
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="fw-semibold text-white tracking-wide" href="/">
                        <span class="smini-visible">
                            T<span class="opacity-75">x</span>
                        </span>
                        <span class="smini-hidden">
                            Slot<span class="opacity-75">demo</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Toggle Sidebar Style -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                            data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                            onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                        </button>
                        <!-- END Toggle Sidebar Style -->

                        <!-- Dark Mode -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                            data-target="#dark-mode-toggler" data-class="far fa"
                            onclick="Dashmix.layout('dark_mode_toggle');">
                            <i class="far fa-moon" id="dark-mode-toggler"></i>
                        </button>
                        <!-- END Dark Mode -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
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
                <!-- Side Actions -->
                <div class="content-side content-side-full bg-black-10 text-center">
                    <div class="smini-hide">
                        <a href="/" target="_blank">
                            <button type="button" class="btn btn-sm btn-secondary bg-gd-primary"
                                data-bs-toggle="tooltip" title="Visit Web">
                                <i class="fa fa-fw fa fa-location-arrow"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <!-- END Side Actions -->
                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}"
                                href="{{ route('dashboard') }}">
                                <i class="nav-main-link-icon fa fa-location-arrow"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Description</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->is('pages/homedesc') ? ' active' : '' }}"
                                href="{{ route('homedesc') }}">
                                <i class="nav-main-link-icon fa fa-globe"></i>
                                <span class="nav-main-link-name">Desc Game</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">Slot Pragmatic</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->is('pages/gamelist') ? ' active' : '' }}"
                                href="{{ route('gamelist.index') }}">
                                <i class="nav-main-link-icon fa fa-globe"></i>
                                <span class="nav-main-link-name">Slot Pragmatic</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">Slot Pg Soft</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->is('pages/pgsoft') ? ' active' : '' }}"
                                href="{{ route('pgsoft.index') }}">
                                <i class="nav-main-link-icon fa fa-globe"></i>
                                <span class="nav-main-link-name">Slot Pg Soft</span>
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
            <div class="content-header">
                <!-- Left Section -->
                <div class="space-x-1">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-alt-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-alt-secondary" data-toggle="layout"
                        data-action="header_search_on">
                        <i class="fa fa-fw opacity-50 fa-search"></i> <span
                            class="ms-1 d-none d-sm-inline-block">Search</span>
                    </button>
                    <!-- END Open Search Section -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="space-x-1">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">{{ auth()->user()->username }} </span>
                            <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-start p-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-2">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <!-- <a class="dropdown-item" type="submit" href="{{ route('logout') }}">
             <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Logout
            </a> -->
                                    <button type="submit" class="dropdown-item"><i
                                            class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-alt-secondary" data-toggle="layout"
                        data-action="side_overlay_toggle">
                        <i class="far fa-fw fa-list-alt"></i>
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-header-dark">
                <div class="content-header">
                    <form class="w-100" action="{{ route('dashboard') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-primary" data-toggle="layout"
                                data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-header-dark">
                <div class="bg-white-10">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="#"
                            target="_blank">slot demo</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                        <a class="fw-semibold" href="#" target="_blank">Dashmix</a> &copy;
                        <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Dashmix Core JS -->
    <script src="{{ mix('js/dashmix.app.js') }}"></script>

    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    @yield('js_after')
</body>

</html>
