<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- toastr info here --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>

/* search---- */
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

.button{
    height:55px;
    width:150px;
    color:white;
    font-size:20px;
    text-align:center;
    display: flex;
    justify-content: center;
    align-items: center;
     background-color:#320cbd;
  cursor: pointer;
  transition: all 0.5s;
  border-radius: 6px;

}
.button:hover,.button:focus{
  background-color:rgb(62, 247, 87);

  outline:2px solid #d61a06;
  outline-offset:8px;
}
</style>
</head>
<body>

<div class=" bg-primary">
    <h2 class="text-center " style="padding:3rem 1px"> ছাত্র / ছাত্রির পরিচয় দিন ইংরেজীতে </h2>
</div>
{{-- <div  class="" style="background-color:lightseagreen;text-align:center;padding:3rem"> --}}
<div class="row">






<div  class="col-md-7" style="background-color:lightgrey;color:blue" style="position: relative;" >

    {{-- <div style="display: flex">
        <img src="#" alt="" style="height: 15rem;width:15rem">
        <div style="color:#9932cc ;margin:2rem">Aboute: {{$students->full_name   }}</div>
    </div> --}}
 <div  class="" style="margin-top:3rem;paddig-left:2rem;margin-left:4rem;width:500px">
    <h2 class="" style="border-bottom: 5px solid #cc3277">Student Details</h2>
    <p style="color: white"><span style="font-size:1.3rem;color:#9932cc">Name: </span> {{ $students->name }}</p>
    <p style="color: white"><span style="font-size:1.3rem;color:darkorchid">Gender: </span> {{ $students->gender }}</p>
    <p style="color: white"><span style="font-size:1.3rem;color:darkorchid">Class: </span> {{ $students->class }}</p>
    <p style="color: white"><span style="font-size:1.3rem;color:darkorchid">Medium: </span> {{ $students->medium }}</p>
    <p style="color: white"><span style="font-size:1.3rem;color:darkorchid">Subject: </span> {{ $students->subject }}</p>
    <p style="color: white"><span style="font-size:1.3rem;color:darkorchid"> District: </span> {{ $students->district }}</p>

 </div>

 <h2 class="" style="border-bottom: 5px solid #cc3277;width:500px;margin-left:4rem;margin-top:3rem">Student Requirements</h2>
 <div  class="" style="margin-top:1rem;paddig-left:2rem;margin-left:4rem;width:500px">
 <p style="color: white"><span style="font-size:1.3rem;color:#9932cc">Available Tuition Schedule: </span> {{ $students->schedule}}</p>
 <p style="color: white"><span style="font-size:1.3rem;color:darkorchid">Expected Students Level: </span> {{ $students->student_level }}</p>
 <p style="color: white"><span style="font-size:1.3rem;color:darkorchid">Prefered Subject: </span> {{ $students->prefered_subject }}</p>
 <p style="color: white"><span style="font-size:1.3rem;color:darkorchid">Expected Salary: </span> {{ $students->salary }}</p>
 </div>








 <img src="./img/place_left.png" style="height: 400px;width:240px" alt="">

</div>



<div  class="col-md-5" >

    <div class="">


        <div class=" bg-primary">
            <h2 class="text-center " style="padding:3rem 1px">জায়গা পছন্দ করুন</h2>
        </div>
    <div style="background-color:lightseagreen;height:auto;margin-top:-.8rem;padding-bottom:rem">
        <div class="row" style="display:flex;justify-content:space-around">





            <div style="margin-top: 9rem">

                <div class="dropdown show  dropright">
                  <a  href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        >
                        <h1 class=" dropdown-toggle" style="color: white;padding:5px;margin-top:2rem;border-radius:5px;"> Dhaka</h1>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left: 23rem;margin-top:-5rem;">
                        @foreach ($dhaka as $dhakas)
                        <a class="dropdown-item" style="font-size: 2rem;padding:5px;display:flex; flex-wrap:wrap;border:.5px solid black" href="{{ url('/locations/'.$dhakas->local_address) }}">{{$dhakas->local_address }}</a>
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
                          <a class="dropdown-item" style="font-size: 2rem;padding:5px;display:flex; flex-wrap:wrap;border:.5px solid black" href="{{ url('/locations/'.$dinajpurs->local_address) }}">{{$dinajpurs->local_address }}</a>
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
                          <a class="dropdown-item" style="font-size: 2rem;padding:5px;display:flex; flex-wrap:wrap;border:.5px solid black" href="{{ url('/locations/'.$pabnas->local_addresslocal_address) }}">{{$pabnas->local_addresslocal_address }}</a>
                          {{-- <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="{{ url('/mirpur') }}">Dhaka Mirpur</a>
                          <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="#">Dhaka Mohakhali</a> --}}
                          @endforeach
                      </div>
                  </div>


                  <div class="dropdown show  dropright" >
                    <a  href="#" role="button" id="dropdownMenuLink"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                          >
                          <h1 class=" dropdown-toggle" style="color: white;padding:5px;margin-top:2rem;border-radius:5px"> Rangpur</h1>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left: 23rem;margin-top:-5rem">
                          @foreach ($rangpur as $rangpurs)
                          <a class="dropdown-item" style="font-size: 2rem;padding:5px;display:flex; flex-wrap:wrap;border:.5px solid black" href="{{ url('/locations/'.$rangpurs->local_address) }}">{{$rangpurs->local_address }}</a>
                          {{-- <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="{{ url('/mirpur') }}">Dhaka Mirpur</a>
                          <a class="dropdown-item" style="font-size: 2rem;padding:5px" href="#">Dhaka Mohakhali</a> --}}
                          @endforeach
                      </div>
                  </div>
            </div>


        </div>
    </div>

    </div>
</div>
</div>

</div>



</body>
</html>

