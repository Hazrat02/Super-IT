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
    <link rel="icon" type="image/png" href="{{asset('img\super it.jpg')}}">

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
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/vendor/animate/animate.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('userstyle') }}/assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ asset('userstyle') }}/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('userstyle') }}/assets/vendor/photoswipe/default-skin/default-skin.min.css">
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('userstyle') }}/assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/css/style.min.css">
    <style>
        .activeside{
            border-bottom: solid rgb(0, 157, 214);
            
            
        }
        
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
    @if (session('message'))
        <div style="width: fit-content; position: absolute; top: 50%;left: 50%; z-index: 88888888888; background-color: rgba(252, 251, 255, 0.995)"
            class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @if (session('error'))
        <div style="width: fit-content; position: absolute; top: 50%;left: 50%; z-index: 88888888888; background-color: rgba(252, 251, 255, 0.995)"
            class="alert alert-dark" role="alert">
            {{ session('error') }}
        </div>
    @endif


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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <!-- If you want to use the popup integration, -->
    <script>
        var obj = {};
        obj.cus_name = $('#customer_name').val();
        obj.cus_phone = $('#mobile').val();
        obj.cus_email = $('#email').val();
        obj.cus_addr1 = $('#address').val();
        obj.amount = $('#total_amount').val();

        $('#sslczPayBtn').prop('postdata', obj);

        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7); // USE THIS FOR SANDBOX
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
</body>

</html>
