<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Suhil</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="   https://use.fontawesome.com/releases/v5.7.2/css/all.css"> --}}

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="newtem/css/bootstrap.css" rel="stylesheet">
    <link href="newtem/css/fontawesome-all.css" rel="stylesheet">
    <link href="newtem/css/swiper.css" rel="stylesheet">
    <link href="newtem/css/magnific-popup.css" rel="stylesheet">
    <link href="newtem/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    {{-- AOS ANIMATION
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}

    {{-- toastr --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- New css --}}
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">


    {{-- TemplateMo 557 Grad School --}}

    <style>
        .logo1-image{
            height:67px;
            width: 70px;
            border-radius: 70%;
        }
        .logo1-image:hover{
            transition: 1s;
           transform:rotate(360deg);
           height: 77px;
           width: 80px;
        }


        .header {
            padding-top: 7.5rem;
            padding-bottom: 7.5rem;
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(../assets/images/tuition4.jpg) center center no-repeat;
            background-size: cover;
        }

        .card:hover {
            color: #fff;
            transform: scale(1.025);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 5px 10px
        }

        .card:hover .backgroundEffect {
            bottom: 0;
            height: 320px;
            width: 100%;
            position: absolute;
            z-index: -1;
            background: #1b9ce3;
            animation: popBackground 0.3s ease-in
        }

        @keyframes popBackground {
            0% {
                height: 20px;
                border-top-left-radius: 50%;
                border-top-right-radius: 50%
            }
            50% {
                height: 80px;
                border-top-left-radius: 75%;
                border-top-right-radius: 75%
            }
            75% {
                height: 160px;
                border-top-left-radius: 85%;
                border-top-right-radius: 85%
            }
            100% {
                height: 320px;
                border-top-left-radius: 100%;
                border-top-right-radius: 100%
            }
        }
        .card .pic {
            position: relative
        }

        .card .pic img {
            width: 100%;
            height: 280px;
            object-fit: cover
        }
        .card .date {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 70px;
            background-color: #1b9ce3;
            color: white;
            position: absolute;
            bottom: 0px;
            transition: all ease
        }
        .card .date .day {
            font-size: 14px;
            font-weight: 600
        }
        .card {
            position: relative;
            background-color: #323458;
            width: 200px;
            height: 250px;
            box-shadow: 1.5px 1.2px 7px cadetblue;
        }

        .card:hover {
            box-shadow: 2px 2px 4px darkviolet;
            /* border: 1px solid rgb(20, 255, 122); */
        }

        /* --------------zoom start */
        .inner {
            overflow: hidden;

        }
        .inner img {
            transition: all 1.5s ease;
        }
        .inner:hover img {
            /* transform: scale(1.5); */
        }

        /*---- button----- */
        .button {
            height: 55px;
            width: 150px;
            color: white;
            font-size: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #d61a06;
            cursor: pointer;
            transition: all 0.5s;
            border-radius: 6px;
        }
        .button:hover,
        .button:focus {
            background-color: rgb(62, 247, 87);
            outline: 2px solid #d61a06;
            outline-offset: 8px;
        }
        .name-left {
            animation: nameleft 4s ease forwards;
        }

        @keyframes nameleft {
            0% {
                transform: translateX(-100rem);
                opacity: 1;
            }
            100% {
                transform: translateX(0);
                opacity: 1
            }
        }


        .name-right {
            animation: nameright 4s ease forwards;
        }

        @keyframes nameright {
            0% {
                transform: translateX(100rem);
                opacity: 1;
            }
            100% {
                transform: translateX(0);
                opacity: 1
            }
        }

        .visible-class {
            display: block; /* or any other style you want to apply when visible */
        }

        .hidden-class {
            display: none; /* or any other style you want to apply when hidden */
        }

        @media (min-width: 768px) {

        }
        @media (min-width: 992px) {

        }
        @media (min-width: 1200px) {

        }
    </style>

</head>

<body class="container " data-spy="scroll" data-target=".fixed-top" id="home">

    {{-- <-- Navigation --> --}}
    <nav class="container navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <!-- Image Logo -->
            <a class="navbar-brand" href="/"><img class="logo1-image" src="newtem/images/logoimage.png" alt="alternative"></a>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" style="font-size:1.3rem" href="{{ url('#home') }}">{{__('Home')}}<span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" style="font-size:1.3rem" href="{{ url('#tutors') }}">{{ __('Tutors') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" style="font-size:1.3rem"
                            href="{{ url('#students') }}">{{ __("Tuitions") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" style="font-size:1.3rem"
                            href="{{ url('#contact') }}">{{ __("Contact") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="font-size:1.3rem" href="{{ url('/login-tutor') }}" id="dropdown01"
                        >{{ __("Sign in") }}</a>
                        {{-- <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" style="padding-top:1.3rem;font-size:1rem" href="{{ url('/login-tutor') }}">{{ __("Login Tutor") }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" style="font-size:1rem" href="{{ url('/login-tuition') }}">{{ __("Login Tuition") }}</a>
                        </div> --}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" style="font-size:1.3rem" href="#" id="dropdown01"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __("Sign up") }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item"  style="padding-top:1.3rem;font-size:1rem" href="{{ url('/teacher_info') }}">{{ __("Register Tutor") }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" style="font-size:1rem" href="{{ url('/places1') }}">{{ __("Register Tuition") }}</a> </div>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link" style="font-size:1.1rem;" href="#" id="dropdown01"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                            {{-- @php
                                $user = Session()->get('user');
                            @endphp

                            @if($user)
                                <span class="d-block" style=" padding: 4px; background-color: darkslategray; border-radius: 8px">
                                    {{ $user }}
                                    <i class="fas fa-arrow-down"></i>
                                </span>
                            @else
                                <span class="d-none"></span>
                            @endif --}}

                            <span  {{ Session()->get('user') }}? class="d-block" : class="d-none" style="font-size:1.3rem;padding:4px;background-color:darkslategray;border-radius:8px">{{ Session()->get('user')}}</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">

                            {{-- @php
                            $userT = NewTeacher::where('id',Session::get('user'))->first();
                            $userS = NewStudent::where('id',Session::get('user'))->first();
                            @endphp
                            <a class="dropdown-item page-scroll  {{ $userT ? 'visible-class' : 'hidden-class' }}" href="{{ url('profile/'.$userT->id }}">{{ __("Your Profile") }}</a>
                            <a class="dropdown-item page-scroll  {{ $userS ? 'visible-class' : 'hidden-class' }}" href="{{ url('profile/'.$userS->id }}">{{ __("Your Profile") }}</a> --}}
                            @php
                            $user = Session()->get('user');
                            $userT = App\Models\NewTeacher::where('user',$user)->first();
                            $userS = App\Models\NewStudent::where('user',$user)->first();
                            @endphp
                            @if ($userT)
                                <a class="dropdown-item page-scroll visible-class" href="{{ url('profile/'.$userT->user) }}">
                                    {{ __("Your Profile") }}
                                </a>
                                <a class="dropdown-item page-scroll" href="{{ url('/change-password') }}">{{ __("Change Password") }}</a>
                                <a class="dropdown-item page-scroll" href="{{ url('/logout') }}">{{ __("Log out") }}</a>
                            @endif
                            @if ($userS)
                                <a class="dropdown-item page-scroll visible-class" href="{{ url('profile/'.$userS->user) }}">
                                    {{ __("Your Profile") }}
                                </a>
                                <a class="dropdown-item page-scroll" href="{{ url('/logout') }}">{{ __("Log out") }}</a>
                                <a class="dropdown-item page-scroll" href="{{ url('/logout') }}">{{ __("Log out") }}</a>
                            @endif

                            <div class="dropdown-divider"></div>
                        </div>
                    </li>

                </ul>
                <span class="nav-item social-icons">
                    {{-- <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span> --}}
                    <div class="change_language" >
                        <select class="form-control lang-change" name="language" style="width:6.5rem;height:2rem">
                            <option value="en" {{ session()->get('lang_code')=='en' ? 'selected' : ''}}> English</option>
                            <option value="bn" {{ session()->get('lang_code')=='bn' ? 'selected' : ''}}> Bangla</option>
                        </select>
                    </div>
                    {{-- <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span> --}}
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header container">
        <div class="row container" >
            <div class="col-md-2"></div>
            <div class="col-md-5 name-left">
                <img src="./assets/images/t1.png" alt="" style="height:100px;width:110px">
                <img src="./assets/images/u1.png" alt="" style="height:100px;width:80px;margin-left:-35px;">
                <img src="./assets/images/I1.png" alt="" style="height:100px;width:80px;margin-left:-35px;">
                <img src="./assets/images/t1.png" alt="" style="height:100px;width:80px;margin-left:-35px;">
                <img src="./assets/images/I1.png" alt="" style="height:100px;width:80px;margin-left:-35px;">
                <img src="./assets/images/O1.png" alt="" style="height:100px;width:80px;margin-left:-35px;">
                <img src="./assets/images/N1.png" alt="" style="height:100px;width:80px;margin-left:-35px;">
            </div>
            <div class="col-md-4 name-right" style="">
                <img src="./assets/images/M1.png" alt="" style="height:100px;width:80px">
                <img src="./assets/images/E1.png" alt="" style="height:100px;width:80px;margin-left:-35px">
                <img src="./assets/images/D1.png" alt="" style="height:100px;width:80px;margin-left:-35px">
                <img src="./assets/images/I1.png" alt="" style="height:100px;width:80px;margin-left:-35px">
                <img src="./assets/images/A1.png" alt="" style="height:100px;width:80px;margin-left:-35px">
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="container">

            <div class="row container">
                <div class="col-lg-12">

                    <!-- Text Slider -->
                    <div class="slider-container" style="margin-top:4rem;margin-bottom:-5rem;">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                {{-- <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="image-container">
                                                <img class="img-fluid" src="newtem/images/bird-image.png"
                                                    alt="alternative" style="opacity:1">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6 col-xl-5">
                                            <div class="text-container">
                                                <h3 class="h3-large " style="margin-top: 10rem"> If at the first try
                                                    you don’t succeed, try, try again!...</h3>

                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide --> --}}
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="image-container">
                                                <img class="img-fluid" src="newtem/images/student3.avif"
                                                    alt="alternative"
                                                    style="height:330px;width:450px; border-radius:30px;border:2px solid #ec1487">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6 col-xl-5">
                                            <div class="text-container">
                                                {{-- <h3 class="h3-large" style="margin-top: 10rem">If you get angry, you
                                                    lose.</h3> --}}

                                                {{-- <a class="btn-outline-lg page-scroll" href="#features">DISCOVER</a> --}}
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="image-container">
                                                <img class="img-fluid" src="newtem/images/images8.jpg"
                                                    alt="alternative"
                                                    style="height:330px;width:450px; border-radius:30px;border:2px solid #ec1487">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6 col-xl-5">
                                            <div class="text-container">
                                                {{-- <h3 class="h3-large" style="margin-top: 10rem">Don't Waste Time As a
                                                    Student...</h3> --}}

                                                {{-- <a class="btn-outline-lg page-scroll" href="#features">DISCOVER</a> --}}
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="image-container">
                                                <img class="img-fluid" src="newtem/images/student7.jpg"
                                                    alt="alternative"
                                                    style="height:330px;width:450px; border-radius:30px;border:2px solid #ec1487">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6 col-xl-5">
                                            <div class="text-container">
                                                {{-- <h3 class="h3-large" style="margin-top: 10rem">Don't Waste Time As a
                                                    Student...</h3> --}}

                                                {{-- <a class="btn-outline-lg page-scroll" href="#features">DISCOVER</a> --}}
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row" style="margin-top:7rem">
                <div class="col-lg-12">

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

{{-- <div>
    @extends('lang');
    {{ __('text.content') }}
</div> --}}


    <!-- Registration -->
    <div class="form-1 bg-dark-blue">

        {{-- new start here --}}

        <div class="row" style="margin-bottom: 12rem;margin-top:1.7rem;">
            <div class="col-lg-2 col-12"></div>
            <div class="col-lg-4 col-12">
                <div class="features-post">
                    <div class="features-content py-4">
                        <div class="content-show">
                            <h2><i class="fa fa-pencil" style="color: chocolate"></i> ছাএ/ছাএী</h2>
                        </div>
                        <div class="content-hide" style="font-weight:lighter;color:rgb(69, 39, 186)">
                            <h6>আস্সালামুআলাইকুম।<br>আপনি কি হোম টিউটর খুজছেন !! আমাদের এখানে ইন্জিনিয়ার ,ডাক্তার এবং
                                অন্নান্য সাবজেক্টের মেধাবি ছাএ/ছাএিদেরকে প্রাইভেটের জন্য দিয়ে থাকি ৷
                                <br>আপনি যদি চান তাহলে ক্লিক করে আপনার ইনফরমেশন দিন,ধন্যবাদ।
                            </h6>
                            {{-- <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p> --}}
                            <div class="button "><a href="{{ url('/places1') }}">ক্লিক করুন</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post second-features">
                    <div class="features-content py-4">
                        <div class="content-show">
                            <h2><i class="fa fa-graduation-cap" style="color:  chocolate"></i> শিক্ষক</h2>
                        </div>
                        <div class="content-hide" style="font-weight:lighter;color: rgb(69, 39, 186)">
                            <h6>আস্সালামুআলাইকুম।<br>আপনি কি টিউশনি খুজছেন !! আমাদের এখানে বিভিন্ন গ্রুপ এবং ভার্সনের
                                ছাএ/ছাএী শিক্ষকের জন্য আবেদন করেছেন। আপনি যদি চান তাহলে ক্লিক করে আপনার ইনফরমেশন দিন,ধন্যবাদ ।৷
                            </h6>
                            {{-- <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p> --}}
                            <div class=" button"><a href="{{ url('/teacher_info') }}">Click Here</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12"></div>
        </div>


        {{-- features tutor start --}}
        <div class="container" id="tutors">
            <div style="margin-top: 13rem;margin-bottom:4rem">
                <h2 class="col-lg-12 text-center">{{ __("Featured Tutors") }}...</h2>
                <p class=" text-center" style="margin-top:-1rem">{{ __("There are many featured tutors here") }} ,
                    {{ __("They are very good intelizent and experienced")}} . {{ __("They have included own informations in this card") }} .
                    {{ __("They are looking for good student to teach")}} . {{ __("Click on the card if you want to see the tutor details") }} ..
                </p>
                     <!-- Text Slider -->
            </div>

            <div class="" style="display:flex;flex-wrap:wrap;width:100%;margin:.4rem;box-sizing:border-box">
                @foreach ($teachers as $teacher)
                    <div class="card mb-3 single-education-card"
                        style="width: 340px;margin-left:.6rem;height:180px;overflow:hidden"><a
                            href="{{ url('/teacher_details/' . $teacher->id) }}" style="color: whitesmoke">

                            <div class="d-flex">
                                <div class="inner col-md-4">
                                    <div style="width:200px;height:140;margin-left:-1rem">
                                        <a class="" href="{{ url('/teacher_details/' . $teacher->id) }}">
                                            <img src="{{ asset('/teacher/' . $teacher->image) }}" alt="img"
                                                style="height:140px;width:200px">
                                        </a>
                                    </div>
                                    <div style="display:flex;flex:wrap:wrap; margin-left:-1rem;width:100px">
                                        <a href="{{ url('/application-tutors/' .$teacher->id) }}"
                                         class="btn btn-primary btn-sm text-center" style="position: absolute;display:flex;flex-wrap:wrap;width:200px"
                                         >
                                         {{ __("Apply Now") }}
                                        </a>
                                    </div>
                                </div>
                                <div class="" style="display:flex;flex-wrap:wrap;width:100%"><a href="{{ url('/teacher_details/' . $teacher->id) }}">
                                        <div class="card-body" style="height:600px">
                                            <p class="" style="color:lightgray;margin-top:-.8rem"> <span
                                                    style="font-size:1.2rem;color:#ffff">Name: </span>
                                                {{ $teacher->name }}</p>
                                            <p class="" style="color:lightgray;margin-top:-.8rem"> <span
                                                    style="font-size:1.2rem;color:#ffff">Ins: </span>
                                                {{ $teacher->institution }}</p>
                                            <p class="" style="color:lightgray;margin-top:-.8rem"> <span
                                                    style="font-size:1.2rem;color:#ffff">Sub: </span>
                                                {{ $teacher->subject }}</p>
                                            <p class="" style="color:lightgray;margin-top:-.8rem"> <span
                                                    style="font-size:1.2rem;color:#ffff">Dis: </span>
                                                {{ $teacher->district }}</p>
                                            {{-- <p>This is a respected teacher, so you have to respect him/har ,because he is a
                                            teacher ,otherwise you can not shine your life .</p> --}}
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div><!-- end of div -->

        </div>
        <div class="text-center">
            <a class="container default-btn btn " style="margin-top:2rem;width:12rem;border-radius:50px"
                href="{{ url('/search-tutors') }}">{{ __("View All Tutors") }}</a>
        </div>

        <!-- Button trigger modal -->

        {{-- end feature tutor --}}

        <div style="margin-top: 13rem;margin-bottom:-5rem" id="students">
            <h2 class="col-lg-12 text-center" style="margin-top: 13rem;margin-bottom:-4rem">{{ __("Available Tuition") }}</h2>
            <p class="p-heading text-center" style="margin-top: 5rem">{{ __("There are many students here") }} , {{ __("They are looking for a good teacher")}}..</p> <!-- Text Slider -->
        </div>
        <div class="slider-container" style="margin-top: 10rem;margin-bottom:-5rem;">

            <div class="swiper-container text-slider">
                <div class="swiper-wrapper">
                    <!-- Slide -->
                    @foreach ($students as $student)
                        <div class="swiper-slide">

                            <div class="row">
                                <div class="col-lg-4 col-xl-4">

                                </div>

                                <div class="col-lg-4 col-xl-4 container" style="background-color:gray;padding:3rem;border-radius:30px"><a
                                        href="{{ url('/student_details/' . $student->id) }}">

                                        <p class="" style="font-size: 1.35rem;color:black"><span
                                                style="font-size: 1.5rem;font-weight:200;color:white">
                                                Name:- </span> {{ $student->name }}</p>
                                        <p class="" style="font-size: 1.35rem;color:black"><span
                                                style="font-size: 1.5rem;font-weight:200;color:white">Class:
                                            </span> {{ $student->class }}</p>
                                        <p class="" style="font-size: 1.35rem;color:black"><span
                                                style="font-size: 1.5rem;font-weight:200;color:white">Medium:
                                            </span> {{ $student->medium }}</p>
                                        <p class="" style="font-size: 1.35rem;color:black"><span
                                                style="font-size: 1.5rem;font-weight:200;color:white">Schedule:
                                            </span> {{ $student->schedule }}</p>
                                        <p class="" style="font-size: 1.35rem;color:black"><span
                                                style="font-size: 1.5rem;font-weight:200;color:white">Days: </span>
                                            {{ $student->days }}</p>
                                        <p class="" style="font-size: 1.35rem;color:black"><span
                                                style="font-size: 1.5rem;font-weight:200;color:white">Salary:
                                            </span> {{ $student->salary }}</p>
                                        {{-- <p class="p-large">The first desktop app for web designers. Create beautiful websites with minimum HTML/CSS</p>
                                        <a class="btn-solid-lg page-scroll" href="#registration">FREE TRIAL</a>
                                        <a class="btn-outline-lg page-scroll" href="#features">DISCOVER</a> --}}
                                        <div style="margin-bottom:-2rem;display:flex;justify-content:space-between"><a
                                                class="text-dark btn btn-warning py-2"
                                                href="{{ url('/student_details/' . $student->id) }}"
                                                style="width: 50%">Show Details</a>
                                                <a class="btn btn-primary"  href="{{ url('/application-tuition/' . $student->id) }}" style="width: 50%;margin-left:2rem">Apply Now</a>
                                            </div>
                                    </a>

                                </div> <!-- end of text-container -->


                                <div class="col-lg-4 col-xl-4">
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of swiper-slide -->
                    @endforeach
                    <!-- end of slide -->
                </div> <!-- end of swiper-wrapper -->
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- end of add arrows -->
            </div> <!-- end of swiper-container -->
        </div> <!-- end of slider-container -->
        <!-- end of text slider -->

        <div class="text-center">
            <a class="container default-btn btn " style="margin-top:8rem;width:13rem;border-radius:50px"
               href="{{ url('/all_students') }}">{{ __("View All Tuitions") }}</a>
        </div>

        <!-- Features -->
        <div class="container" id="features" class=" bg-dark-blue" style="margin-top: 15rem">
            <div class="text-center">
                <h2 class="h2-heading">{{ __("Our Services") }}..</h2>
                <p class="p-heading">{{ __("This website is providing many services like providing tuition") }},
                 {{ __("website design and development") }}.</p>
            </div> <!-- end of div -->
        </div> <!-- end of cards-1 -->
        <!-- end of features -->


        <div class="tabs container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-5">
                        <div class="tabs-container">
                            <!-- Tabs Links -->
                            <ul class="nav nav-tabs" id="revoTabs" role="tablist">
                                <li class="nav-item">
                                    <a style="font-size: .9rem" class="nav-link active" id="nav-tab-1"
                                        data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
                                        aria-selected="true"> {{ __("Tutor Provide") }}</a>
                                </li>
                                <li class="nav-item">
                                    <a style="font-size: .9rem" class="nav-link" id="nav-tab-2" data-toggle="tab"
                                        href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
                                        {{ __("Website Design") }}</a>
                                </li>
                            </ul>

                            <!-- end of tabs links -->
                        </div> <!-- end of tabs-container -->

                    </div> <!-- end of col -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="revoTabsContent">

                        <!-- Tab -->
                        <div class="container tab-pane fade show active" id="tab-1" role="tabpanel"
                            aria-labelledby="tab-1">

                            <div class="row" style="width: 100%">
                                <div class="col-md-5">

                                    <h4>{{ __("Our Services") }}..</h4>
                                    <p>{{ __("Here we give meritorious students of engineering") }} , {{ __("doctor and other subjects for private") }}.</p>
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="media">
                                            <i class="fas fa-square"></i>
                                            <div class="media-body"><strong>{{ __("We provide tutors and tuitions in Bangladesh area") }}.</strong></div>
                                        </li>

                                    </ul>

                                </div>

                                <div class="col-md-2"></div>
                                <div class="col-md-5">

                                    <div class="image-container" dtat-aos="zoom-in">
                                        <img class="img-fluid" src="newtem/images/student7.jpg" alt="alternative"
                                            style="height:320px; width:650px">
                                    </div> <!-- end of image-container -->

                                </div> <!-- end of tab-pane -->
                                <!-- end of tab -->

                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="container tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2"
                            style="position: relative">

                            <div class="row" style="width: 100%">
                                <div class="col-md-5">
                                    <h4>{{ __("Our Services") }}..</h4>
                                    <p>{{ __("This website provides various types of website design such as") }}, {{ __("Personal website") }}, {{ __("Ecommerce website") }}, {{ __("Community website") }}, {{ __("School management website") }}.</p>
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="media">
                                            <i class="fas fa-square"></i>
                                            <div class="media-body"><strong>{{ __("We provide varius types of website design and development in Bangladesh area") }}</strong> .
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- end of tab-pane -->
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <div class="image-container">
                                        <img class="img-fluid" src="newtem/images/website_image1.png" alt="alternative"
                                            style="height:320px; width:650px">
                                    </div> <!-- end of image-container -->
                                </div>
                            </div>
                        </div>

                        <!-- end of tab -->

                        <!-- Tab -->

                    </div> <!-- end of tab-pane -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of tabs -->
    </div>
     <!-- end of tab -->




    <!-- Details 1 -->
    <div id="details" class="container basic-1 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container single-education-card "
                        style="position: relative;background-color:white;height:320px;width:400px;border:4px solid deeppink">
                        {{-- <img class="img-fluid" src="newtem/images/details-1.jpg" alt="alternative" style="position: relative;"> --}}
                        <img class="img-fluid" src="newtem/images/suhail.jpeg" alt="alternative"
                            style="height:300px;width:220px;position: absolute;">
                        <h4 style="padding: 3px;color:black"> Suhail..</h4>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>{{ __("A few talk about our website") }}..</h2>
                        <p>{{ __("This website has designed by php language with laravel framework") }} . {{ __("This website provides Tutors and Tuitions in bangladesh area") }}.
                             {{ __("And provides website design and development") }}..
                        </p>
                        <p>{{ __("Our mission is to bring convenience to everyone") }}</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>{{ __("You can visit my personal website") }}.. </strong>
                                </div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg " href="{{ url('https://suhail008.netlify.app') }}">{{ __("VISIT") }}</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details Lightbox -->
    <!-- Lightbox -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="/newtem/images/details-lightbox.jpg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Goals Setting</h3>
                <hr>
                <p>The app can easily help you track your personal development evolution if you take the time to
                    set it up.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help
                    improve your productivity.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Splash screen panel</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Statistics graph report</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Events calendar layout</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Location details screen</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#registration">FREE TRIAL</a> <button
                    class="btn-outline-reg mfp-close as-button" type="button">BACK</button>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 2 -->



    <!-- Video -->
    <div class="basic-2 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">{{ __("Video") }} </h2>
                    <p class="p-heading">{{ __("Sometimes we need refreshment") }}. {{ __("Let us listen some important boyan") }}... </p>

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=z0fsoUKgebg"
                                data-effect="fadeIn">
                                <img class="img-fluid" src="newtem/images/vedio image.jpg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->


    <!-- Testimonials -->
    <div class="slider-1 container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="cards">
                                        <img class="card-image" src="newtem/images/Rakib.PNG" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I just finished my trial period and was
                                                so amazed with the support and results that I quickly purchased
                                                the app</p>
                                            <p class="testimonial-author">Jude Thorn - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="cards">
                                        <img class="card-image" src="newtem/images/husain.PNG" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I don't know how I managed to get work
                                                done without Revo. The speed of this application is amazing!</p>
                                            <p class="testimonial-author">Roy Smith - Developer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="cards">
                                        <img class="card-image" src="newtem/images/asad.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">This app has the potential of becoming
                                                a mandatory tool in every developer's day to day regular
                                                operations</p>
                                            <p class="testimonial-author">Marsha Singer - Marketer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="cards">
                                        <img class="card-image" src="newtem/images/Shimul.PNG" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">This app has the potential of becoming
                                                a mandatory tool in every developer's day to day regular
                                                operations</p>
                                            <p class="testimonial-author">Marsha Singer - Marketer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="cards">
                                        <img class="card-image " src="newtem/images/Alamin.PNG" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Searching for a great prototyping and
                                                layout design app was difficult but thankfully I found Revo
                                                suite</p>
                                            <p class="testimonial-author">Tim Shaw - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="cards">
                                        <img class="card-image" src="newtem/images/mita.PNG" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Revo's support team is amazing. They've
                                                helped me with some issues and I am so grateful to the entire
                                                team</p>
                                            <p class="testimonial-author">Lindsay Spice - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->

                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->

    <div class="container" style="background-color: #0b0433">
        <div id="contact">
            <div class="text-center py-5">
                <h2>{{ __("Stay with us") }}</h2>
                <h5>{{ __("Sent your opinion about any matter and Stay with us") }}..</h5>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container" style="margin-top: -.1rem">
                        {{-- <h2>Sent your opinion</h2> --}}
                        <img src="./assets/images/opinion.jpg" alt="img" style="height: 280px;width:450px">
                        {{-- <p>You are just a few clicks away from using the first desktop app dedicated to web designers and developers. Fill out the form to get the 30-day trial and you will receive the download link</p> --}}

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 ">

                    <!-- Registration Form -->
                    <form id="registrationForm" action="{{ url('/opinions') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="name" id="rname" required>
                            <label class="label-control" for="rname">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="opinion" id="roccupation"
                                required>
                            <label class="label-control" for="roccupation">Write your opinion...</label>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-input" name="image" id="remail" required>
                            <label class="label-control" for="remail">Image</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Sent SMS</button>
                        </div>
                    </form>
                    <!-- end of registration form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="row p-5">
                    <div class=" col-md-4">
                        <h6>About website</h6>
                        <p class="p-small">Here we give meritorious students of engineer, doctor and other subjects for
                            private.
                            This website provides various types of website design such as Personal website , Ecommerce
                            website, School management website.</p>
                    </div> <!-- end of footer-col -->
                    <div class="col-md-4">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="#">Terms & Conditions</a>, <a href="#">Privacy
                                    Policy</a></li>
                            <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a
                                    href="#">Illustrations</a></li>
                            <li>Menu: <a class="page-scroll" href="#">Home</a>, <a class="page-scroll"
                                    href="#">Trial</a>, <a class="page-scroll" href="#">Features</a>, <a
                                    class="page-scroll" href="#">Details</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third col-md-3">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.whatsapp.com/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-whatsapp fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/feed/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a
                                href="mailto:contact@website.com"><strong>contact@website.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Name</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-12">
                    <p class="p-small">Designed By: <a href="https://themewagon.com/" target="_blank">Suhail</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="newtem/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="newtem/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="newtem/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="newtem/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="newtem/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="newtem/js/scripts.js"></script> <!-- Custom scripts -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="assets/js/isotope.min.js"></script> --}}
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        // AOS ANIMATION

        // <script src = "https://unpkg.com/aos@next/dist/aos.js" >
        //
    </script>
    //
    <script>
        //     AOS.init();
        //
    </script>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('message'))

            toastr.options = {
                'clossButton': true,
                'progressBar': true
            }

            toastr.success("{{ Session::get('message') }}"
                // , 'Success! New Student added'
            );

            // toastr.warnig("{{ Session::get('message') }}"
            // , 'Success! New Student added'
            // );
        @endif
    </script>

    <script>
        var url = "{{ route('lang.change') }}";

        $('.lang-change').change(function(){
        let lang_code = $(this).val();
        window.location.href = url + "?lang="+ lang_code;
        });

    </script>

</body>

</html>
