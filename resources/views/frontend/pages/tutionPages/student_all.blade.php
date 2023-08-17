<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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

                    <div class="#" style="background-color:gray;padding:3rem;display:flex;flex-wrap:wrap;">
                        @foreach ($students as $student )
                        <div class="all_stu_card" style="background-color:teal;width:240px;height:auto;padding:.6rem;border-radius:11px;margin:1rem;list-style-type:none;"><a href="{{ url('/student_details/'.$student->id) }}">
                            <p class="" style="font-size: 1.35rem;color:black;"><span style="font-size: 1.5rem;font-weight:200;color:white;">Student Name:- </span>  {{ $student->name }}</p>
                            <p class="" style="font-size: 1.35rem;color:black"><span style="font-size: 1.5rem;font-weight:200;color:white">Class: </span> {{ $student->class }}</p>
                            <p class="" style="font-size: 1.35rem;color:black"><span style="font-size: 1.5rem;font-weight:200;color:white">Medium: </span> {{ $student->medium }}</p>
                            <p class="" style="font-size: 1.35rem;color:black"><span style="font-size: 1.5rem;font-weight:200;color:white">Schedule: </span> {{ $student->schedule }}</p>
                            <p class="" style="font-size: 1.35rem;color:black"><span style="font-size: 1.5rem;font-weight:200;color:white">Days: </span> {{ $student->days }}</p>
                            <p class="" style="font-size: 1.35rem;color:black"><span style="font-size: 1.5rem;font-weight:200;color:white">Salary: </span> {{ $student->salary }}</p>
                            <h3 style="" class="button">View Details</h3>
                        </a>
                    </div>
                    @endforeach
                        </div> <!-- end of text-container -->
                </div >

    <div class="col-md-4" style="background-color: darkseagreen">
hskjdhskd
    </div>

</div>

</body>
</html>
