<!DOCTYPE html>
<!--
Template Name:DEEPMIND
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Clinique Clémence </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="deepmind" />
    <meta name="keywords" content="medical/deepmind/hospital" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="{{asset('images/Iconpic.png')}}" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="{{asset('images/preloader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!--top header start-->
    @include('body.header')

    <!--header wrapper end-->
    <!--slider wrapper start-->
    @yield('page')
    <!--news wrapper end-->
    <!-- footer wrapper start-->
    @include('body.footer')
    <!--footer wrapper end-->
    <!--main js files-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!--js code-->
    <script>
        function initMap() {
            var newLocation = {
                lat: 12.466153,
                lng: -1.427369
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                scrollwheel: false,
                center: newLocation
            });
            var marker = new google.maps.Marker({
                position: newLocation,
                map: map,
                title: "Votre localisation" // Texte optionnel au survol
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBctr8WYTfFDi_oGbPEolSDzn4VZaAKVK0&callback=initMap">
    </script>
    <!-- map Script-->
</body>

</html>