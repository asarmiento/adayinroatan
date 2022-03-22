<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="{{asset('assets/css/nifty.min.css')}}">

    <!-- Nifty Demo Icons [ OPTIONAL ] -->
    <link rel="stylesheet" href="{{asset('assets/css/demo-purpose/demo-icons.min.css')}}">

    <!-- Demo purpose CSS [ DEMO ] -->
    <link rel="stylesheet" href="{{asset('assets/css/demo-purpose/demo-settings.min.css')}}">
    <!-- Nifty Demo Icons [ OPTIONAL ] -->
    <link rel="stylesheet" href="{{asset('assets/premium/icon-sets/icons/line-icons/premium-line-icons.css')}}">

    <!-- Demo purpose CSS [ DEMO ] -->
    <link rel="stylesheet" href="{{asset('assets/premium/icon-sets/icons/solid-icons/premium-solid-icons.css')}}">
    <!-- Styles -->

</head>
<body class="jumping">
<!-- PAGE CONTAINER -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div id="root" class="root mn--max mn--sticky hd--expanded">

    <!-- CONTENTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <section id="content" class="content">
        <div class="content__header content__boxed">
            <div class="content__wrap">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                        {{--<li class="breadcrumb-item"><a href="./layouts.html">Layouts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sticky Navigation</li>--}}
                    </ol>
                </nav>
                <!-- END : Breadcrumb -->

                <h1 class="page-title mb-0 mt-2">A day in Roatan</h1>

                <p class="lead">
                    Sistema de Historial de reservaciones
                </p>

            </div>

        </div>

        <div class="content__boxed">
            <div id="app" class="content__wrap">
	          @yield('content')

            </div>
        </div>
        <!-- FOOTER -->
        <footer class="mt-auto">
            <div class="content__boxed">
                <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                    <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; {{date('Y')}} <a href="#"
                                                                                            class="ms-1 btn-link fw-bold">A day in Roatan</a></div>
                    <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto" style="row-gap: 0 !important;">
                        <a class="nav-link px-0" href="#">Policy Privacy</a>
                        <a class="nav-link px-0" href="#">Terms and conditions</a>
                        <a class="nav-link px-0" href="#">Contact Us</a>
                    </nav>
                </div>
            </div>
        </footer>
        <!-- END - FOOTER -->

    </section>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - CONTENTS -->

    <!-- HEADER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    @include('layouts.header')
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - HEADER -->

    <!-- MAIN NAVIGATION -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <nav id="mainnav-container" class="mainnav">
        <div class="mainnav__inner">

            <!-- Navigation menu -->
            <div class="mainnav__top-content scrollable-content pb-5">

                <!-- Profile Widget -->
                <div class="mainnav__profile mt-3 d-flex3">

                    <div class="mt-2 d-mn-max"></div>

                    <!-- Profile picture  -->
                    <div class="mininav-toggle text-center py-2">
                        <img class="mainnav__avatar img-md rounded-circle border"
                             src="{{asset('assets/img/profile-photos/1.png')}}" alt="Profile Picture">
                    </div>

                    <div class="mininav-content collapse d-mn-max">
                        <div class="d-grid">

                            <!-- User name and position -->
                            <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse"
                                    data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                    <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                        <h6 class="mb-0 me-3">{{auth()->user()->name}}</h6>
                                    </span>
                                <small class="text-muted"></small>
                            </button>

                            <!-- Collapsed user menu -->
                            <div id="usernav" class="nav flex-column collapse">
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-male fs-5 me-2"></i>
                                    <span class="ms-1">Perfil</span>
                                </a>
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logoutform').submit();">
                                    <i class="demo-pli-unlock fs-5 me-2"></i>
                                    <span class="ms-1">Cerrar Sesión</span>
                                </a>
                            </div>
                            <form id="logoutform" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End - Profile widget -->

                <!-- Navigation Category -->
               @include('layouts.navigation')
                <!-- END : Navigation Category -->




            </div>
            <!-- End - Navigation menu -->

            <!-- Bottom navigation menu -->
            <div class="mainnav__bottom-content border-top pb-2">
                <ul id="mainnav" class="mainnav__menu nav flex-column">
                    <li class="nav-item has-sub">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logoutform').submit();">
                            <i class="demo-pli-unlock fs-5 me-2"></i>
                            <span class="nav-label ms-1">Cerrar Sesión</span>
                        </a>
                        <ul class="mininav-content nav flex-column collapse">
                            <li class="nav-item">
                                <a href="#" class="nav-link">This device only</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">All Devices</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lock screen</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- End - Bottom navigation menu -->

        </div>
    </nav>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - MAIN NAVIGATION -->

    <!-- SIDEBAR -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SIDEBAR -->

</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- END - PAGE CONTAINER -->

<!-- SCROLL TO TOP BUTTON -->
<div class="scroll-container">
    <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- END - SCROLL TO TOP BUTTON -->

<!-- BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div id="_dm-boxedBgContent" class="_dm-boxbg offcanvas offcanvas-bottom" data-bs-backdrop="false" data-bs-scroll="true"
     tabindex="-1">


    <div class="offcanvas-body p-4">

        <!-- Content Header -->
        <div class="offcanvas-header border-bottom p-0 pb-3">
            <div>
                <h4 class="offcanvas-title">Background Images</h4>
                <span class="text-muted">Add an image to replace the solid background color</span>
            </div>
            <button type="button" class="btn-close btn-lg text-reset shadow-none" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>
        <!-- End - Content header -->

        <!-- Collection Of Images -->
        <div id="_dm-boxedBgContainer" class="row mt-3">

            <!-- Blurred Background Images -->
            <div class="col-lg-4">
                <h5 class="mb-4">Blurred</h5>
                <div class="_dm-boxbg__img-container d-flex flex-wrap">
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/1.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/2.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/3.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/4.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/5.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/6.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/7.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/8.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/9.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/10.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/11.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/12.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/13.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/14.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/15.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/16.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                </div>
            </div>
            <!-- End - Blurred Background Images -->

            <!-- Polygon Background Images -->
            <div class="col-lg-4">
                <h5 class="mb-4">Polygon &amp; Geometric</h5>
                <div class="_dm-boxbg__img-container d-flex flex-wrap">
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/1.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/2.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/3.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/4.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/5.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/6.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/7.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/8.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/9.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/10.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/11.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/12.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/13.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/14.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/15.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/16.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                </div>
            </div>
            <!-- End - Polygon Background Images -->

            <!-- Abstract Background Images -->
            <div class="col-lg-4">
                <h5 class="mb-4">Abstract</h5>
                <div class="_dm-boxbg__img-container d-flex flex-wrap">
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/1.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/2.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/3.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/4.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/5.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/6.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/7.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/8.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/9.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/10.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/11.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/12.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/13.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/14.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/15.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                    <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                        <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/16.jpg"
                             alt="Background Image" loading="lazy">
                    </a>
                </div>
            </div>
            <!-- End - Abstract Background Images -->

        </div>
        <!-- End - Collection Of Images -->

    </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- END - BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->


<!-- OFFCANVAS [ DEMO ] -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div id="_dm-offcanvas" class="offcanvas" tabindex="-1">

    <!-- Offcanvas header -->
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Offcanvas Header</h5>
        <button type="button" class="btn-close btn-lg text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
    </div>

    <!-- Offcanvas content -->
    <div class="offcanvas-body">
        <h5>Content Here</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos nihil earum aliquam quod in dolor,
            aspernatur obcaecati et at. Dicta, ipsum aut, fugit nam dolore porro non est totam sapiente animi recusandae
            obcaecati dolorum, rem ullam cumque. Illum quidem reiciendis autem neque excepturi odit est accusantium,
            facilis provident molestias, dicta obcaecati itaque ducimus fuga iure in distinctio voluptate nesciunt
            dignissimos rem error a. Expedita officiis nam dolore dolores ea. Soluta repellendus delectus culpa quo. Ea
            tenetur impedit error quod exercitationem ut ad provident quisquam omnis! Nostrum quasi ex delectus vero,
            facilis aut recusandae deleniti beatae. Qui velit commodi inventore.</p>
    </div>

</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- END - OFFCANVAS [ DEMO ] -->
</div>
</body>
</html>
