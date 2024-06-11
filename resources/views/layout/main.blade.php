<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=”apple-touch-icon” href="{{ asset('logo.png') }}">
    <link rel=”manifest” href="{{ asset('manifest.json') }}">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('template/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('template/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('template/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('template/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('template/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('template/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('template/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('template/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('template/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('template/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('template/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('template/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('template/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff"> -->

    <!-- Template CSS Files -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/preloader.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/circle.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/fm.revealator.jquery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ asset('template/css/skins/blueviolet.css') }}" rel="stylesheet">

    <!-- Modernizr JS File -->
    <script src="{{ asset('template/js/modernizr.custom.js') }}"></script>
</head>
@yield('bodyClass')
<!-- <body class="home"> -->
<!-- Header Starts -->
@include('layout._navigation')
<!-- Header Ends -->
<!-- Main Content Starts -->
@yield('content')
<!-- Main Content Ends -->

<!-- Template JS Files -->
<script src="{{ asset('template/js/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('template/js/preloader.min.js') }}"></script>
<script src="{{ asset('template/js/fm.revealator.jquery.min.js') }}"></script>
<script src="{{ asset('template/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('template/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('template/js/classie.js') }}"></script>
<script src="{{ asset('template/js/cbpGridGallery.js') }}"></script>
<script src="{{ asset('template/js/jquery.hoverdir.js') }}"></script>
<script src="{{ asset('template/js/popper.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.js') }}"></script>
<script src="{{ asset('template/js/custom.js') }}"></script>


</script>

</body>

</html>
