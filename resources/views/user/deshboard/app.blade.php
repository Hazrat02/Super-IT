<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Super-it eCommmerce Marketplace HTML Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('userstyle') }}/assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = {{ asset('userstyle') }} '/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    
    <!-- Bootstrap CSS v5.2.1 -->

    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/fonts/wolmart87d5.woff?png09e" as="font"
        type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('userstyle') }}/assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/css/style.min.css">

















    
    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/vendor/animate/animate.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ asset('userstyle') }}/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/vendor/photoswipe/default-skin/default-skin.min.css">
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('userstyle') }}/assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/css/style.min.css">
    <style>
        @media only screen and (max-width: 765px) {

            .menuhide {
                display: none;
            }
        }

        @media only screen and (min-width: 766px) {

            .menumobile {
                display: none;
            }
        }
    </style>
</head>



<body>


    <header class="header ">
        @include('user\deshboard\header')
    </header>


    @yield('maincontent')

    <!-- Start of PageContent -->

 
  

    <!-- Plugin JS File -->
    <script src="{{ asset('userstyle') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/js/main.min.js"></script>



    <script src="{{ asset('userstyle') }}/assets/vendor/sticky/sticky.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
 
    <script src="{{ asset('userstyle') }}/assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/photoswipe/photoswipe.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/photoswipe/photoswipe-ui-default.js"></script>


</body>

</html>
