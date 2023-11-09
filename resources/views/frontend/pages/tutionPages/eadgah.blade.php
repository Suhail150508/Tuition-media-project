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
        @if ($tutors->isNotEmpty())
            @foreach ($tutors as $tutor)
                <div class="card mb-3 single-education-card" style="width: 340px;margin-left:.7rem;height:180px;overflow:hidden"><a
                        href="{{ url('/teacher_details/' . $tutor->id) }}" style="color: whitesmoke">

                    <div class="d-flex ">
                        <div class="inner">
                            <img src="{{ asset('/teacher/' . $tutor->image) }}" alt="img"
                                style="height: 140px;width:190px">
                        </div>
                        <div class=" ">
                            <div class="card-body" style="height:600px;">
                                <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff">Name: </span> {{ $tutor->full_name }}</p>
                                <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff"> Ins: </span> {{ $tutor->institution }}</p>
                                <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff">Sub: </span> {{ $tutor->subject }}</p>
                                <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff"> Dis: </span> {{ $tutor->district }}</p>
                                {{-- <p>This is a respected tutor, so you have to respect him/har ,because he is a
                                    teacher ,otherwise you can not shine your life .</p> --}}
                            </div>

                        </div>

                    </div>
                    </a>
                </div>
            @endforeach


        {{-- @foreach ($tutors as $teacher)
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
@endforeach --}}

@else
<h2>Not data found</h2>
@endif
<div class="mt-4" style="margin-left: 35rem">
    {{ $tutors->withQueryString()->links() }}
</div>
</div><!-- end of div -->
</div>


<div class="col-md-4 bg-secondary" style="margin-top:-1.6rem">
<div class="p-5 text-white "  style="background-color:purple;">

          <div class="col-md-12 py-5">
            <h3>Search Tutors for any feature</h3>

            <form action="/search-tutors">
                @csrf
                <input class="py-2 form-control" style="width:100%" type="text" name="search" placeholder="Search.. Ex.  Ins: Sub: dist:" value="{{ isset($search) ? $search :'' }}"/>
                <button type="submit" class="btn btn-success" style="width: 100%;font-size:1.4rem; margin-top:1rem">Search </button>
            </form>
        </div>

        </div>
     </div>
     </div>


@endsection
