@extends('frontend.pages.tutionPages.navbar')
@section('content')
     <style>

        *{

            text-decoration: none;
            box-sizing: border-box;
            list-style-type: none;
        }
        body{

            text-decoration: none;

        }

        .card{
    position: relative;
    background-color: #323458;
    width: 200px;
    height: 250px;
    text-decoration: none;
    box-shadow: 1.5px 1.2px 7px cadetblue;
}
.card:hover{
    box-shadow: 3px 3px 7px darkviolet;
/* border: 1px solid rgb(20, 255, 122); */
}

.inner{
    overflow: hidden;

}
.inner img{
    transition: all 1.5s ease;
}
.inner:hover img{
transform: scale(1.5);


}
/*---- button----- */
.button{
    height:55px;
    width:150px;
    color:white;
    font-size:20px;
    text-align:center;
    display: flex;
    justify-content: center;
    align-items: center;
     background-color:#d61a06;
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
    <body>


        <!-- Navigation-->
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav> --}}
        <!-- Header-->

        <!-- Section-->

  <div class="row">
    <div class="col-md-12" style="background-color:rgb(139, 127, 173);width:100vw;display:flex;flex-wrap:wrap">
        <div class="" style="display:flex;flex-wrap:wrap;width:100%;margin:1rem;box-sizing:border-box">

            <div class="" style="display:flex;flex-wrap:wrap;width:100%;margin:1rem;box-sizing:border-box">
                @if ($tuitions->isNotEmpty())
                    @foreach ($tuitions as $tuition)

                <div class="card mb-3 " style="width: 400px;margin:.1rem .8rem;height:180px;display:flex;flex-wrap:wrap;overflow:hidden"><a href="{{ url('/tuition_details/'.$tuition->id) }}" style="color: whitesmoke">
                 <div class="row no-gutters" style="background-color:teal;color:white;display:flex;box-shadow:4px 4px 3px black;margin:.2rem;text-decoration:none">
                    <div class="col-md-2 inner"></div>
                        <div class="col-md-10 " style="padding:10px">
                            <div class="card-body" style="height:600px;overflow:hidden">
                                <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">tuition Name:- </span>  {{ $tuition->name }}</p>
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
                @else
                <h2 >Not data found</h2>
                @endif



    </div><!-- end of div -->

    </div>
    </div>
</div>

@endsection
