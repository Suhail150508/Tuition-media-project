<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    {{-- tostr notification --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="newtem/css/bootstrap.css" rel="stylesheet">
    <link href="newtem/css/fontawesome-all.css" rel="stylesheet">
    <link href="newtem/css/swiper.css" rel="stylesheet">
	<link href="newtem/css/magnific-popup.css" rel="stylesheet">
	<link href="newtem/css/styles.css" rel="stylesheet">


    <style>

    </style>
    </head>
    <body>
        <!-- Navigation-->

        <!-- Header-->
        {{-- <header class=" py-5" style="background-color:rgba(34, 140, 98, 0.9) ;height:150px">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white" style="margin-top:-5rem">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header> --}}
        <!-- Section-->

        {{-- <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                        <div class=" tution col mb-3" style="flex-wrap: wrap">
                            @foreach ($location as  $locations)
                          <a style="text-decoration: none" href="#">  <div class="card h-100"  style="height:200px;width:240px" > --}}

                            <!-- Sale badge-->
                                {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><h4>{{ $locations->gender }}</h4></div>
                                <!-- Product image--> --}}
                                {{-- <img class="" src="./img/cartoon.png" alt="img" style="height: 20px;width:20px" />
                                <!-- Product details--> --}}
                                {{-- <div class="card-body p-2">
                                    <div class="text-center"> --}}
                                        <!-- Product name-->
                                        {{-- <h4 class="fw-bolder">Class: <span style="font-size: 1rem">{{ $locations->class }}</span></h4>
                                        <h5 class="fw-bolder">Medium: <span style="font-size: 1rem">{{ $locations->medium }}</span></h5>
                                        <h5 class="fw-bolder">Group: <span style="font-size: 1rem">{{ $locations->group }}</span></h5>
                                        <h4 class="fw-bolder">Id: <span style="font-size: 1rem">{{ $locations->id }}</span></h4> --}}

                                        <!-- Product reviews-->
                                        {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div> --}}
                                        <!-- Product price-->


                                    {{-- </div>
                                </div> --}}
                                <!-- Product actions-->
                                {{-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                                </div>
                            </div>
                        </div>

                    </a>
                    @endforeach
                </div>
            </div>
        </section> --}}
        <!-- Footer-->
        {{-- <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer> --}}
        <!-- Bootstrap core JS-->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS--> --}}
        {{-- <script src="js/scripts.js"></script> --}}
<div class="bg-primary" style="height: 150px">
header

</div>
<div class="" style="display: flex;flex-wrap:wrap;background-color:gray">
@foreach ($location as  $locations)
<div class="m-4" >
    <div class="card bg-success" >
        {{-- @php
            $image =
        @endphp --}}
        <img class="" src="./img/cartoon.png" alt="img" style="height: 20px;width:20px" />
        <div class="card-body text-center">
            <h4 class="card-title">need male teacher</h4>
            <h4 class="fw-bolder">Class: <span style="font-size: 1rem">{{ $locations->class }}</span></h4>
            <h5 class="fw-bolder">Medium: <span style="font-size: 1rem">{{ $locations->medium }}</span></h5>
            <h5 class="fw-bolder">Group: <span style="font-size: 1rem">{{ $locations->group }}</span></h5>
            <h4 class="fw-bolder">Id: <span style="font-size: 1rem">{{ $locations->id }}</span></h4>

            <a href="#" class="btn btn-primary">View Profile</a>
        </div>
    </div>
</div>
@endforeach
</div>


<div class="bg-dark" style="height: 300px">
    Footer
</div>

    </body>
</html>



















