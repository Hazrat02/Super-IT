<!doctype html>
<html lang="en">

<head>
    <title>Super-IT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Cinzel:wght@600&family=Courgette&family=Philosopher&display=swap"
        rel="stylesheet">




    {{-- card section ----------------------------------------------------- --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{asset('img\super it.jpg')}}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{asset('img\super it.jpg')}}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{asset('img\super it.jpg')}}">
    <link rel="mask-icon" href="{{asset('img\super it.jpg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('user/dist/') }}/assets/css/libs.bundle.css" />

    <!-- Main CSS -->
   

</head>















<body>


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
    </div> @endif
    <header style="position:
        sticky;top: 0px; z-index: 44444;">
    <!-- place navbar here -->
    @include('user.layouts.header')
    </header>



    <main>
        @yield('usermain')
    </main>













    <footer>
        <!-- place footer here -->
        @include('user\layouts\footer')
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    {{-- top views --}}
    <script src="{{ asset('user\carousel.js') }}"></script>


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="{{ asset('user/dist/') }}assets/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="{{ asset('user/dist/') }}/assets/js/theme.bundle.js"></script>
    </body>

</html>
