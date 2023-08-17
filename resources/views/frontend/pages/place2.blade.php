<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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




    <style>
        a .dropdown-toggle{
            background-color: gray;
            box-shadow: 2px 2px 3px black;
        }
        a .dropdown-toggle:hover{
            background-color:deeppink;
        }
        .dropdown-menu a:hover {
            background-color:mediumorchid;
        }
    </style>
</head>

<body>



    <div class=" bg-primary">
        <h2 class="text-center " style="padding:3rem 1px">জায়গা পছন্দ করুন</h2>
    </div>
<div style="background-color:lightseagreen;height:auto;margin-top:-.8rem;padding-bottom:rem">
    <div class="row" style="display:flex;justify-content:space-around">
        <div class="col-md-3" style="margin-top: 12rem">
            <img src="./img/place_left.png" style="height: 400px;width:240px;" alt="">
        </div>




        <div style="margin-top: 9rem">

            <div class="dropdown show  dropright">
              <a  href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    >
                    <h1 class=" dropdown-toggle" style="color: white;padding:5px;margin-top:2rem;border-radius:5px;"> Dhaka</h1>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left: 23rem;margin-top:-5rem;">
                    @foreach ($dhaka as $dhakas)
                    <a class="dropdown-item" style="font-size: 2rem;padding:5px;display:flex; flex-wrap:wrap;border:.5px solid black" href="{{ url('/locations/'.$dhakas->location) }}">{{$dhakas->location }}</a>
                    {{-- <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="{{ url('/mirpur') }}">Dhaka Mirpur</a>
                    <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="#">Dhaka Mohakhali</a> --}}
                    @endforeach
                </div>
            </div>

            <div class="dropdown show  dropright">
                <a  href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                      >
                      <h1 class=" dropdown-toggle" style="color: white;padding:5px;margin-top:2rem;border-radius:5px"> Dinajpur</h1>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left: 23rem;margin-top:-5rem">
                      @foreach ($dinajpur as $dinajpurs)
                      <a class="dropdown-item" style="font-size: 2rem;padding:5px;display:flex; flex-wrap:wrap;border:.5px solid black" href="{{ url('/locations/'.$dinajpurs->location) }}">{{$dinajpurs->location }}</a>
                      {{-- <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="{{ url('/mirpur') }}">Dhaka Mirpur</a>
                      <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="#">Dhaka Mohakhali</a> --}}
                      @endforeach
                  </div>
              </div>


              <div class="dropdown show  dropright">
                <a  href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                      >
                      <h1 class=" dropdown-toggle" style="color: white;padding:5px;margin-top:2rem;border-radius:5px"> Pabna</h1>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left: 23rem;margin-top:-5rem">
                      @foreach ($pabna as $pabnas)
                      <a class="dropdown-item" style="font-size: 2rem;padding:5px;display:flex; flex-wrap:wrap;border:.5px solid black" href="{{ url('/locations/'.$pabnas->location) }}">{{$pabnas->location }}</a>
                      {{-- <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="{{ url('/mirpur') }}">Dhaka Mirpur</a>
                      <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="#">Dhaka Mohakhali</a> --}}
                      @endforeach
                  </div>
              </div>


              <div class="dropdown show  dropright">
                <a  href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                      >
                      <h1 class=" dropdown-toggle" style="color: white;padding:5px;margin-top:2rem;border-radius:5px"> Rangpur</h1>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left: 23rem;margin-top:-5rem">
                      @foreach ($rangpur as $rangpurs)
                      <a class="dropdown-item" style="font-size: 2rem;padding:5px;display:flex; flex-wrap:wrap;border:.5px solid black" href="{{ url('/locations/'.$rangpurs->location) }}">{{$rangpurs->location }}</a>
                      {{-- <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="{{ url('/mirpur') }}">Dhaka Mirpur</a>
                      <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="#">Dhaka Mohakhali</a> --}}
                      @endforeach
                  </div>
              </div>



        </div>
        {{-- </h3>
        <h3><a href="#" class="list-group-item  list-group-item-action"> Dhaka Banani</a></h3>
        <h3><a href="#" class="list-group-item  list-group-item-action">Dhaka Kakrail</a></h3>
        <h3><a href="#" class="list-group-item  list-group-item-action">Dinajpur </a></h3>
        <h3><a href="#" class="list-group-item  list-group-item-action disabled"></a></h3>
      </div> --}}

        <div class="col-md-3" style="margin-top: 7rem">
            <img src="./img/place_right.png" style="height: 420px;width:280px;margin-left:6rem" alt="">
        </div>
    </div>
</div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
