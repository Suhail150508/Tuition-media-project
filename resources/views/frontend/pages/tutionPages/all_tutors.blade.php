
@extends('frontend.pages.tutionPages.navbar')
@section('content');





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
            @foreach ($tuitions as $tuition)
            <div class="card mb-3 " style="width: 400px;margin:.1rem .8rem;height:180px;display:flex;flex-wrap:wrap;overflow:hidden"><a href="{{ url('/student_details/'.$tuition->id) }}" style="color: whitesmoke">

            <div class="row no-gutters" style="background-color:teal;color:white;display:flex;box-shadow:4px 4px 3px black;margin:.2rem;text-decoration:none">
              <div class="col-md-2 inner">
                {{-- <img src="{{ asset('/teacher/'.$teacher->image) }}" alt="img" style="height: 130px;width:130px"> --}}
              </div>
              <div class="col-md-10 " style="padding:10px">
                <div class="card-body" style="height:600px;overflow:hidden">
                    <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Student Name:- </span>  {{ $tuition->name }}</p>
                    <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Class: </span> {{ $tuition->class }}</p>
                    <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Medium: </span> {{ $tuition->medium }}</p>
                    <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Schedule: </span> {{ $tuition->schedule }}</p>
                    <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Days: </span> {{ $tuition->days }}</p>
                    <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Salary: </span> {{ $tuition->salary }}</p>

                </div>
              </div>

            </div>
        </a>
    </div>
    @endforeach
<div class="" style="margin-left: 24rem">
    {{ $tuitions->withQueryString()->links() }}
</div>

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
		{{-- <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script> --}}



</body>
</html>
@endsection
