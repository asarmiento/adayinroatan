<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="zipline, monkey and sloth, west bay beach, private tours, roatan, west end">
    <meta name="author" content="Maya Digital Agency">

    <title>{{env('APP_NAME')}}</title>

    <!--  favicon -->
    <!-- <link rel="shortcut icon" href="assets/img/ico/favicon.png"> -->
    <!--  apple-touch-icon -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png"> -->

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Material Icons CSS -->
    <link href="{{asset('assets/fonts/iconfont/material-icons.css')}}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="{{asset('assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <!-- flexslider -->
    <link href="{{asset('assets/flexSlider/flexslider.css')}}" rel="stylesheet">
    <!-- materialize -->
    <link href="{{asset('assets/materialize/css/materialize.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- shortcodes -->
    <link href="{{asset('assets/css/shortcodes/shortcodes.css')}}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Restaurant CSS -->
    <link href="{{asset('assets/css/skins/restaurant.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- OG TAGS -->
    <meta prefix="og: http://ogp.me/ns#" property="og:title" content="Snorkeling, Mangrove Tunnel, Zipline, Daniel Johnson's Monkey and Sloth Hangout, West Bay beach tours in Roatan | A Day In Roatan" />
    <meta prefix="og: http://ogp.me/ns#" property="og:type" content="website" />
    <meta prefix="og: http://ogp.me/ns#" property="og:url" content="http://www.adayinroatan.com">
    <meta prefix="og: http://ogp.me/ns#" property="og:image" content="http://www.adayinroatan.com/images/share.jpg" />
    <meta prefix="og: http://ogp.me/ns#" property="og:site_name" content="A Day In Roatan">
    <meta prefix="og: http://ogp.me/ns#" property="og:description" content="Tour agency in Roatan, which has been working since the cruise industry began, offering private tours, zip-line, snorkeling, island, beach, monkey & sloth park, sightseeing tours, family & group packages promotions.">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Start of Async Drift Code -->
    <script>
      !function() {
        var t;
        if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
          t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
          t.factory = function(e) {
            return function() {
              var n;
              return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
            };
          }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
        }), t.load = function(t) {
          var e, n, o, i;
          e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
            n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
        });
      }();
      drift.SNIPPET_VERSION = '0.3.1';
      drift.load('cihbetchrrsm');
    </script>
    <!-- End of Async Drift Code -->
</head>
<div class="top-bar brand-bg visible-md visible-lg">
    <div class="container">
        <div class="row">
            <!-- Social Icon -->
            <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                    <li><a href="https://www.facebook.com/adayinroatan/" target="_blank" title="Follow Us in Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.twitter.com/adayinroatan" target="_blank" title="Follow Us in Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/adayinroatan/" target="_blank" title="Follow Us in Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="http://www.tripadvisor.com/Attraction_Review-d13824808"><i class="fa fa-tripadvisor" target="_blank" title="Rate Us in TripAdvisor"></i></a></li>
                </ul>
            </div>

            <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                    <li class="mr-20">
                        <a href="mailto:infoadayinroatan@gmail.com" title="Email Us"><i class="material-icons mr-10">&#xE0B9;</i>infoadayinroatan@gmail.com</a>
                    </li>
                    <li>
                        <a href="tel:+01150495024918" title="Call Us"><i class="material-icons mr-10">&#xE0CD;</i> +011 (504) 9502-4918</a>
                    </li>

                    <li style="text-align: right; margin-left: 20px">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                        @endauth
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
<header id="header" class="tt-nav nav-center-align">
    <div class="light-header">
        <div class="container mainmenu">
            <div id="materialize-menu" class="menuzord">
                <!-- logo -->
                <a href="index.php" title="A Day In Roatan Tours" class="logo-brand">
                    <img src="{{asset('assets/img/restaurant/logo.png')}}" alt="A Day In Roatan Tours"/>
                </a>

                <!-- menu -->
                <ul class="menuzord-menu border-tb" id="menu-list">

                    <li class="active"><a href="index.php" title="Home">Home</a></li>



                    <li class="active"><a href="tours.php" title="Tours">Tours</a></li>



                    <li class="active"><a href="cruise-passengers.php" title="Cruise Passengers">Cruise Passengers</a></li>



                    <li class="active"><a href="about-a-day-in-roatan.php" title="About A Day In Roatan">About Us</a></li>



                    <li class="active"><a href="gallery.php" title="More About Roatan">Gallery</a></li>


                    <li class="active"><a href="reservation.php" title="Book with us" class="waves-light btn" style="color:white!important;line-height:50px;">BOOK NOW</a></li> <!-- class="btn btn-lg" -->
                </ul>
            </div>
        </div>

        <!--alternate menu appear start-->
        <div class="menu-appear-alt" >
            <div class="container">
                <div id="materialize-menu-alt" class="menuzord" >
                    <!--alternate menu appearing here ... -->
                </div>
            </div>
        </div>
        <!--alternate menu appear end-->
    </div>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-110148665-1', 'auto');
      ga('send', 'pageview');
    </script>

</header>


<!-- map-section -->
<section id="myMap" class="height-350"></section>
<!-- /.map-section -->

<!-- contact-form-section -->
<section class="section-padding">

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <!-- success errors -->
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() AS $error)
                            <li>{{$error}}</li>
                            @endforeach
                    </ul>
                </div>
                @endif

                <!-- Success message -->
                    @if(Session::has('errors'))
                        <div class="alert alert-success">
                            Session::get('success')
                        </div>
                    @endif
                <form name="contact-form" id="contactForm" action="{{route('store-reservation')}}" method="POST">
{{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input type="text" name="name" class="validate" id="name"  value="{{old('name')}}"  >
                                <label for="name">Name</label>
                            </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <label  for="email">Email</label>
                                <input id="email" type="email" name="email" class="validate" required value="{{old('email')}}"  >
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="phone" type="tel" name="phone" class="validate"  value="{{old('phone')}}"  required>
                                <label for="phone">Phone Number</label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <select id="terminal" name="terminal" required>
                                    <option value="" disabled selected>Choose Port Terminal</option>
                                    <option value="Mahogany Bay Port">Mahogany Bay Port</option>
                                    <option value="Town Center / Roatan Village Port">Town Center / Roatan Village Port</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="adults" type="number" name="adults"  class="validate"  value="{{old('adults')}} " required>
                                <label for="adults">Adults</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="kids" type="number" name="kids" class="validate" value="{{old('kids')}}"  required>
                                <label for="kids">Kids</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <select id="tour" name="tour" required>
                                    <option value="" disabled selected>Choose Tour</option>
                                    <option value="Roatan West Bay Beach">Roatan West Bay Beach</option>
                                    <option value="Roatan West End Village">Roatan West End Village</option>
                                    <option value="Mayan Jungle Zipline and West Bay Beach">Mayan Jungle Zipline &amp; West Bay Beach</option>
                                    <option value="Daniel Johnson's Monkey & Sloth Hang Out">Daniel Johnson's Monkey &amp; Sloth Hang Out</option>
                                    <option value="Glass Bottom Boat & Roatan Island Tour">Glass Bottom Boat &amp; Roatan Island Tour</option>
                                    <option value="Horseback Riding & West Bay Beach">Horseback Riding &amp; West Bay Beach</option>
                                    <option value="All Inclusive Roatan Snorkeling Tour">All Inclusive Roatan Snorkeling Tour</option>
                                    <option value="Roatan East End & Mangrove Tour">Roatan East End &amp; Mangrove Tour</option>
                                    <option value="Pirates Of The Caribbean Zipline & Las Palmas Beach">Pirates Of The Caribbean Zipline &amp; Las Palmas Beach</option>
                                    <option value="Roatan East End & Mangrove Tour">Day In Little French Key Paradise Excursion</option>
                                    <option value="Roatan Free-Style/Custom Tour">Roatan Free-Style/Custom Tour</option>
                                    <option value="Discover Roatan Buggy Tour">Discover Roatan Buggy Tour</option>
                                    <option value="Discover Roatan Buggy Tour All-Inclusive">Discover Roatan Buggy Tour All-Inclusive</option>
                                    <option value="Buggy Tour At Sol Y Mar">Buggy Tour At Sol Y Mar</option>
                                    <option value="Roatan Island Brewing Tour">Roatan Island Brewing Tour</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-field">
                                <input type="date" class="form-control" name="date" value="{{old('date')}}" required>
                                <label for="Arrival Date">Arrival Date</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                        <label for="message">Message</label>
                    </div>

                    <button type="submit" name="submit" class="waves-effect waves-light btn pull-right text-medium mt-30 mb-sm-30">Send <i class="material-icons right">send</i></button>
                </form>
            </div><!-- /.col-md-8 -->

            <div class="col-md-4 contact-info">

                <address class="clearfix">
                    <i class="material-icons brand-color">&#xE8B4;</i>
                    <div class="address">
                        Coxen Hole, Roatan, Bay Islands<br>
                        Honduras, 34101

                        <!-- <hr>

                        <p>Hoffman Parkway, P.O Box 154 Mountain View.<br>
                        United States of America.</p> -->
                    </div>

                    <i class="material-icons brand-color">&#xE61C;</i>
                    <div class="phone">
                        <p>
                            Tour Guides:<br>
                            <!-- Jonathan Nuñez Senior: (+504) 9604-4511<br> -->
                            Elvis Ruiz Nuñez: +011(504) 9502-4918<br>
                            Jonathan Nuñez Junior: +011(504) 9800-1790<br>
                            Moises Nuñez: +011(504) 9924-1820
                        </p>
                    </div>

                    <i class="material-icons brand-color">&#xE0B7;</i>
                    <div class="mail">
                        <p><a href="mailto:infoadayinroatan@gmail.com" title="Email us: infoadayinroatan@gmail.com">infoadayinroatan@gmail.com</a><br>
                            <a href="http://www.adayinroatan.com" title="Official Website">www.adayinroatan.com</a></p>
                    </div>
                </address>

            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div>

</section>
<!-- contact-form-section End -->

<footer class="footer footer-four">
    <div class="primary-footer brand-bg text-center">
        <div class="container">

            <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light" data-section="#top">
                <i class="material-icons">&#xE316;</i>
            </a>

            <ul class="social-link tt-animate ltr mt-20">
                <li><a href="https://www.facebook.com/adayinroatan/" target="_blank" title="Follow Us in Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com/adayinroatan" target="_blank" title="Follow Us in Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/adayinroatan/" target="_blank" title="Follow Us in Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="http://www.tripadvisor.com/Attraction_Review-d13824808"><i class="fa fa-tripadvisor" target="_blank" title="Rate Us in TripAdvisor"></i></a></li>
            </ul>
            <hr class="mt-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-logo">
                        <img src="{{asset('assets/img/restaurant/logo-wt.png')}}" alt="A Day In Roatan Tours">
                    </div>

                    <span class="copy-text">Copyright &copy; 2020 <a href="http://www.adayinroatan.com" title="A Day In Roatan Tours">www.adayinroatan.com</a> &nbsp; | &nbsp;  All Rights Reserved &nbsp; | &nbsp;  Handcrafted By <a href="http://www.mayadigital.com" title="Maya Digital Agency">www.mayadigital.com</a></span>
                    <div class="footer-intro">
                        <p>Our tour agency is committed to practices that help the conservation and protection of our environment.</p>
                        <p>Call or WhatsApp Available:<br>Elvis: +011(504) 9502-4918 | Jonathan: +011(504) 9800-1790 | Moises: +011(504) 9924-1820</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="secondary-footer brand-bg darken-2 text-center">
        <div class="container">
            <ul>
                <li><a href="https://jeovannybarrera.com/adayinroatan/index.php" title="Home">Home</a></li>
                <li><a href="https://jeovannybarrera.com/adayinroatan/tours.php" title="Tours">Tours</a></li>
                <li><a href="https://jeovannybarrera.com/adayinroatan/cruise-passengers.php" title="Cruise Passengers">Cruise Passengers</a></li>
                <li><a href="https://jeovannybarrera.com/adayinroatan/about-a-day-in-roatan.php" title="About Us">About Us</a></li>
                <li><a href="https://jeovannybarrera.com/adayinroatan/gallery.php" title="Gallery">Gallery</a></li>
                <li><a href="{{url('/')}}" title="Reservation">Reservation</a></li>
            </ul>
        </div>
    </div>
</footer>


<!-- Preloader -->
<div id="preloader">
    <div class="preloader-position">
        <img src="{{asset('assets/img/logo-colored.png')}}" alt="logo" >
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/materialize/js/materialize.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/js/smoothscroll.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.min.js')}}"></script>
<script src="{{asset('assets/js/menuzord.js')}}"></script>
<script src="{{asset('assets/js/equalheight.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/flexSlider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTyrJM9I7lPZZ9CNA_cqJcQzy4CqUiMdE"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>


<!-- Google Map Customization  -->
<script type="text/javascript">
  jQuery(document).ready(function() {

    $('#terminal').material_select();
    $('#tour').material_select();

    $('.datepicker').pickadate({
                                 selectMonths: true, // Creates a dropdown to control month
                                 selectYears: 15, // Creates a dropdown of 15 years to control year,
                                 today: 'Today',
                                 clear: 'Clear',
                                 close: 'Ok',
                                 closeOnSelect: false // Close upon selecting a date,
                               });

    //set your google maps parameters
    var $latitude = 16.342049, //Visit http://www.latlong.net/convert-address-to-lat-long.html for generate your Lat. Long.
        $longitude = -86.511841,
        $map_zoom = 11 /* ZOOM SETTING */

    //google map custom marker icon
    var $marker_url = 'assets/img/pin.png';

    //we define here the style of the map
    var style = [{
      "stylers": [{
        "hue": "#241507"
      }, {
        "saturation": 10
      }, {
        "gamma": 2.15
      }, {
        "lightness": 12
      }]
    }];

    //set google map options
    var map_options = {
      center: new google.maps.LatLng($latitude, $longitude),
      zoom: $map_zoom,
      panControl: true,
      zoomControl: true,
      mapTypeControl: true,
      streetViewControl: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false,
      styles: style
    }
    //inizialize the map
    var map = new google.maps.Map(document.getElementById('myMap'), map_options);
    //add a custom marker to the map
    var marker = new google.maps.Marker({
                                          position: new google.maps.LatLng($latitude, $longitude),
                                          map: map,
                                          visible: true,
                                          icon: $marker_url
                                        });

    var contentString = '<div id="mapcontent">' + '<p>Roatan, Bay Islands, Honduras, Central America.</p></div>';
    var infowindow = new google.maps.InfoWindow({
                                                  maxWidth: 320,
                                                  content: contentString
                                                });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  });
</script>
</body>

</html>

