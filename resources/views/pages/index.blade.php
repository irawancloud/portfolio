@section('title')
Home
@endsection
@extends('layout.main')
@section('bodyClass')

<body class="home">
    @endsection
    @section('content')
    <section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <!-- <img src="http://via.placeholder.com/300x300.jpg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" /> -->
                    <img src="{{ asset('template/img/k-studio.jpeg') }}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                    <h1 class="poppins-font">Irawan<span>Web Developer</span></h1>
                    <p class="open-sans-font">I'm a Indonesian based web developer, I am passionate about building excellent software that improves the lives of those around me.</p>
                    <a class="button" href="{{ route('about') }}">
                        <span class="button-text">More about me</span>
                        <span class="button-icon fa fa-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endsection