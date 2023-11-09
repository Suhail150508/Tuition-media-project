
@extends('frontend.pages.tutionPages.navbar')
@section('content')

<style>
    .all_stu_card{
     box-shadow: 2px 2px 2px black;

    }
    .all_stu_card:hover{
     box-shadow: 4px 4px 4px black;

    }

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
<div>

<div class="row bg-secondary">
<div class="col-md-8">
       <div class="" style="display:flex;flex-wrap:wrap;width:100%;margin:1rem;box-sizing:border-box">
        @if ($students->isNotEmpty())
        @foreach ($students as $student)
        <div class="card mb-3 single-education-card" style="width: 340px;margin-left:.7rem;height:180px;overflow:hidden"><a
                href="{{ url('/student_details/'.$student->id) }}" style="color: whitesmoke">

            <div class="d-flex ">
                {{-- <div class="inner">
                    <img src="{{ asset('/teacher/' . $student->image) }}" alt="img"
                        style="height: 140px;width:190px">
                </div> --}}
                <div class=" ">
                    <div class="card-body" style="height:600px;">
                        <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff">Name: </span> {{ $student->name }}</p>
                        <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff">Class: </span> {{ $student->class}}</p>
                        <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff">Medium: </span> {{ $student->medium }}</p>
                        <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff">Schedule:</span> {{ $student->schedule }}</p>
                        <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff">Days:</span> {{ $student->days }}</p>
                        <p class="" style="color:lightgray;margin-top:-.8rem"> <span style="font-size:1.2rem;color:#ffff">Salary:</span> {{ $student->salary }}</p>
                        {{-- <p>This is a respected teacher, so you have to respect him/har ,because he is a
                            teacher ,otherwise you can not shine your life .</p> --}}
                    </div>
                </div>
            </div>
            </a>
        </div>
    @endforeach

        {{-- @foreach ($students as $student)
        <div class="card mb-3 " style="width: 400px;margin:.1rem .8rem;height:180px;display:flex;flex-wrap:wrap;overflow:hidden"><a href="{{ url('/student_details/'.$student->id) }}" style="color: whitesmoke">
         <div class="row no-gutters" style="background-color:teal;color:white;display:flex;box-shadow:4px 4px 3px black;margin:.2rem;text-decoration:none">
            <div class="col-md-2 inner"></div>
                <div class="col-md-10 " style="padding:10px">
                    <div class="card-body" style="height:600px;overflow:hidden">
                        <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Student Name:- </span>  {{ $student->name }}</p>
                        <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Class: </span> {{ $student->class }}</p>
                        <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Medium: </span> {{ $student->medium }}</p>
                        <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Schedule: </span> {{ $student->schedule }}</p>
                        <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Days: </span> {{ $student->days }}</p>
                        <p class="" style="font-size: 1.2rem;color:black"><span style="font-size: 1.3rem;font-weight:200;color:white">Salary: </span> {{ $student->salary }}</p>

                    </div>
                </div>

            </div>
                </a>
        </div>
    @endforeach --}}
        @else
        <h2 >Not data found</h2>
        @endif

<div class="" style="margin-left: 24rem">
{{ $students->withQueryString()->links() }}
</div>

</div>
</div>
<div class="col-md-4" style="background-color: darkseagreen">

<div class="col-md-12 py-5">
    <h3>Search Tuition for any feature</h3>

    <form action="/search-tuition">
        @csrf
        <input class="py-2 form-control" style="width:100%" type="text" name="search" placeholder="Search.. Ex. Sub: Class: medium: salary " value="{{ isset($search) ? $search :'' }}"/>
        <button type="submit" class="btn btn-success" style="width: 100%;font-size:1.4rem; margin-top:1rem">Search</button>
    </form>
</div>
</div>

</div>

@endsection



