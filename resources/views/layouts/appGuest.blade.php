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
                                                                                            class="ms-1 btn-link fw-bold">Educación
                            a Distancia</a></div>
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

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - HEADER -->

    <!-- MAIN NAVIGATION -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

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
