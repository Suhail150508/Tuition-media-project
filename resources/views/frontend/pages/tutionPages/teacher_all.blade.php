
@extends('frontend.pages.tutionPages.navbar')
@section('content');



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


	<!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    {{-- tostr notification --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />



    <style>
        .all_stu_card{
         box-shadow: 2px 2px 2px black;

        }
        .all_stu_card:hover{
         box-shadow: 4px 4px 4px black;

        }

        /*---- button----- */
.button{
    height:45px;
    width:120px;
    color:white;
    font-size:20px;
    text-align:center;
    display: flex;
    justify-content: center;
    align-items: center;
     background-color:#d67f06;
  cursor: pointer;
  transition: all 0.5s;
  border-radius: 6px;
}
.button:hover,.button:focus{
  background-color:rgb(247, 62, 244);

  outline:2px solid #d61a06;
  outline-offset:8px;
}
    </style>
</head>
<body>

<div class="row">
    <div class="col-md-8">
           <!-- Slide -->
           <div class="" style="display:flex;flex-wrap:wrap;width:100%;margin:1rem;box-sizing:border-box">
            @foreach ($teachers as $teacher)
            <div class="card mb-3 " style="width: 400px;margin:.1rem .8rem;height:180px;display:flex;flex-wrap:wrap;overflow:hidden"><a href="{{ url('/teacher_details/'.$teacher->id) }}" style="color: whitesmoke">

            <div class="row no-gutters" style="background-color:teal;color:white;display:flex;box-shadow:4px 4px 3px black;margin:.2rem;text-decoration:none">
              <div class="col-md-4 inner">
                <img src="{{ asset('/teacher/'.$teacher->image) }}" alt="img" style="height: 130px;width:130px">
              </div>
              <div class="col-md-8 " style="padding:10px">
                <div class="card-body" style="height:600px;">
                  <h4 class="card-title"style="margin-top:-.2rem" >{{$teacher->full_name  }}</h4>
                  <p class="card-title" style="margin-top:-.5rem">{{$teacher->subject  }}</p>
                   <p style="margin-top:-.5rem">This is a respected teacher, so you have to respect him/har ,because he is a teacher ,otherwise you can not shine your life .</p>
                </div>
              </div>

            </div>
        </a>
    </div>
    @endforeach
</div><!-- end of div -->
    </div>
    <div class="col-md-4" style="background-color: darkseagreen">
hskjdhskd

<div class="col-md-12">

    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>


    </div>

</div>
</div>


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>



</body>
</html>
@endsection
