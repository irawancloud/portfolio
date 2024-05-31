@section('title')
About
@endsection
@extends('layout.main')
@section('bodyClass')

<body class="about">
    @endsection
    @section('content')
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>ABOUT <span>ME</span></h1>
        <span class="title-bg">Resume</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <!-- Personal Info Starts -->
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="custom-title mb-0 ft-wt-600">Personal Info</h3>
                        </div>
                        <div class="col-12 d-block d-sm-none">
                            <img src="{{ asset('template/img/k-studio.jpeg') }}" class="img-fluid main-img-mobile" alt="my picture" />
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">first name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Irawan</span> </li>
                                <!-- <li> <span class="title">last name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Milner</span> </li> -->
                                <li> <span class="title">Age :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">
                                        <?php
                                        $age = date('Y') - 1984;
                                        echo $age;
                                        ?> Years
                                    </span>
                                </li>
                                <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Indonesia</span> </li>
                                <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span> </li>
                                <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+62 857 8060 5338</span> </li>
                                <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">irawanbellamy@gmail.com</span> </li>
                                <li> <span class="title">LinkedIn :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a href="https://www.linkedin.com/in/irawanbellamy/">https://www.linkedin.com/in/irawanbellamy/</a></span> </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li>
                                    <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">
                                        Tenjo City Residence Tahap 3 <br>
                                        Jl. Raya Cileles, Singabangsa, <br>
                                        Kec. Tenjo, Kabupaten Bogor, <br>
                                        Jawa Barat 16370
                                    </span>
                                </li>
                                <li> <span class="title">Languages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Bahasa, English</span> </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-3">
                            <a class="button" href="#">
                                <span class="button-text">Download CV</span>
                                <span class="button-icon fa fa-download"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Personal Info Ends -->
                <!-- Boxes Starts -->
                <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">
                                    <?php
                                    $exprerience = date('Y') - 2022;
                                    echo $exprerience;
                                    ?>
                                </h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">8</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boxes Ends -->
            </div>
            <hr class="separator">
            <!-- Skills Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p100">
                        <span>HTML</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p100">
                        <span>CSS</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p100">
                        <span>JS</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p100">
                        <span>PHP</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p100">
                        <span>SQL</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p100">
                        <span>Laravel</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p100">
                        <span>Python</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p100">
                        <span>React</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skills Ends -->
            <hr class="separator mt-1">
            <!-- Experience & Education Starts -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience</h3>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">March 2022 - Present</span>
                                <h5 class="poppins-font text-uppercase">IT Manager <span class="place open-sans-font">Ongkir Express</span></h5>
                                <!-- <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore adipisicing elit, </p> -->
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">October 2021 - February 2022</span>
                                <h5 class="poppins-font text-uppercase">Operation Analyst <span class="place open-sans-font">Lion Parcel</span></h5>
                                <!-- <p class="open-sans-font">Lorem incididunt dolor sit amet, consectetur eiusmod dunt doldunt dol elit, tempor incididunt</p> -->
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">December 2015 - September 2021</span>
                                <h5 class="poppins-font text-uppercase">IT Supervisor <span class="place open-sans-font">SAP Express</span></h5>
                                <!-- <p class="open-sans-font">Lorem ipsum dolor sit amet, tempor incididunt ut laboreconsectetur elit, sed do eiusmod tempor duntt</p> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Experience & Education Ends -->
        </div>
    </section>
    <!-- Main Content Ends -->
    @endsection
