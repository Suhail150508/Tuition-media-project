@extends('frontend.pages.tutionPages.navbar');
@section('content');

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


<div class="row">


<div class="col-md-8" style="background-color:lightgray;margin-top:-1.6rem">
    <div class="" style="display:flex;flex-wrap:wrap;width:100%;margin:1rem;box-sizing:border-box">
        @foreach ($teachers as $teacher)
        <div class="card mb-3 " style="width: 400px;margin:.1rem .8rem;height:180px;display:flex;flex-wrap:wrap;overflow:hidden"><a href="{{ url('/teacher_details/'.$teacher->id) }}" style="color: whitesmoke">

        <div class="row no-gutters" style="background-color:teal;color:white;display:flex;box-shadow:4px 4px 3px black;margin:.2rem;text-decoration:none">
          <div class="col-md-4 inner">
            <img src="{{ asset('/teacher/'.$teacher->image) }}" alt="img" style="height: 130px;width:130px">
          </div>
          <div class="col-md-8 " style="padding:10px;">
            <div class="card-body" style="height:600px;">
              <h4 class="card-title"style="margin-top:-.2rem" >{{$teacher->full_name  }}</h4>
              <p class="card-title" style="margin-top:-.5rem">{{$teacher->subject  }}</p>
               <p style="margin-top:-.5rem;">This is a respected teacher, so you have to respect him/har ,because he is a teacher ,otherwise you can not shine your life .</p>
            </div>
          </div>

        </div>
    </a>
</div>
@endforeach
<div class="mt-4" style="margin-left: 35rem">
    {{ $teachers->withQueryString()->links() }}
</div>
</div><!-- end of div -->
</div>


<div class="col-md-4 bg-secondary" style="margin-top:-1.6rem">
<div class="p-5 text-white "  style="background-color:purple;">
    <h3 class="mb-5">Find Tutor accordting to Gender and District</h3>
        <form action="{{ url('/search_tutor') }}" method="POST"  enctype="multipart/form-data">
@csrf


<select class="form-select my-2 py-2" name="gender" aria-label="Default select example" style="width: 100%;">
    <option selected>Gender</option>
    <option>male</option>
    <option>female</option>
  </select>

            <select class="form-select py-2 mb-2" name="district" aria-label="Default select example" style="width: 100%">
                <option selected>District</option>
                <option >Dhaka</option>
                <option>Rajshahi</option>
                <option>Dinajpur</option>
                <option>Rangpur</option>
                <option>Pabna</option>
                <option>Kushtia</option>
                <option>Khulna</option>
                <option>Mymensingh</option>
                <option>Jessore</option>
                <option>Chittagong</option>
                <option>Others</option>
              </select>



            <button type="submit" class="button btn-primary" style="width: 100%">Submit</button>
          </form>
        </div>
     </div>
     </div>


@endsection
