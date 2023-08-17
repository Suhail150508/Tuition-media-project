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
<div  class="row" style="background-color:lightseagreen;text-align:center;padding:3rem">
    <div  class="col-md-3"><img src="./img/place_left.png" style="height: 400px;width:240px" alt=""></div>


 <div  class="col-md-8 " style="font-size:2.5rem ;border-radius:15px;background-color:ghostwhite;color:black">
    <h2 class="col-md-9" style="margin-top:3rem;margin-bottom:2rem">PARENT/STUDENT INFORMATION</h2>
        <form action="{{ url('/places1') }}" method="POST" style="padding:3rem">
           @csrf
            <div class="form-row "  >
              <div class="form-group col-md-9" >
                <input type="text" class="form-control" name="name" placeholder="Name" style="border: .1px solid black">
              </div>

              <div class="form-group col-md-9">
                <select id="inputState" class="form-control" name="class" style="border: .1px solid black">
                  <option selected >Class </option>
                  <option>Five</option>
                  <option>Six</option>
                  <option>Seven</option>
                  <option>Eight</option>
                  <option>Nine</option>
                  <option>Ten</option>
                  <option>Intermediate</option>
                </select>
              </div>

              <div class="form-group col-md-9" >
                <input type="text" class="form-control" name="subject" placeholder="Subjects: (eg: Math,English,Physics,All-Subject....)" style="border: .1px solid black">
              </div>


              <div class="form-group col-md-9">
                <select id="inputState" class="form-control" name="medium" placeholder="" style="border: .1px solid black">
                  <option selected>Medium</option>
                  <option>Bangla</option>
                  <option>English</option>
                </select>
              </div>



              <div class="form-group col-md-9">
                <select  class="form-control" name="gender"  style="border: .1px solid black">
                  <option  selected>Gender</option>
                  <option>male</option>
                  <option>female</option>
                </select>
              </div>


            {{-- <div class="form-row"> --}}

                <div class="form-group col-md-9" >
                    <select id="inputState" class="form-control" name="schedule"   style="border: .1px solid black">
                      <option  selected>Tution Schedule</option>
                      <option >Morning</option>
                      <option>Afternoon</option>
                      <option>Evening</option>
                      <option>Night</option>
                      <option>Other</option>
                    </select>
                  </div>

                <div class="form-group col-md-9">
                    <select id="inputState" class="form-control" name="days" placeholder="District" style="border: .1px solid black">
                      <option selected>Days per week</option>
                      <option >1 Day/Week</option>
                      <option>2 Day/Week</option>
                      <option>3 Day/Week</option>
                      <option>4 Day/Week</option>
                      <option>5 Day/Week</option>
                      <option>6 Day/Week</option>
                      <option>7 Day/Week</option>
                    </select>
                  </div>


                <div class="form-group col-md-9" >
                    <select id="inputState" class="form-control" name="student_number" placeholder="District" style="border: .1px solid black">
                      <option selected>Number of Students</option>
                      <option >1 </option>
                      <option>2 </option>
                      <option>3 </option>
                      <option>4 </option>
                      <option>5 </option>
                      <option>6 </option>
                      <option>7 </option>
                      <option>Batch </option>
                    </select>
                  </div>

                <div class="form-group col-md-9" >
                    <select id="inputState" class="form-control" name="salary" placeholder="Salary" style="border: .1px solid black">
                      <option selected>Salary Range</option>
                      <option > 2000 </option>
                      <option> 3000 </option>
                      <option> 4000 </option>
                      <option> 5000 </option>
                      <option> 6000 </option>
                      <option> 7000 </option>
                      <option> 8000 </option>
                      <option> 9000 </option>
                      <option> 10000 </option>
                      <option> 100009 </option>
                    </select>
                  </div>

                  <div class="form-group col-md-9">
                    <select id="inputState" class="form-control" name="district" placeholder="District" style="border: .1px solid black">
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
                    </select>
                  </div>


                  <div class="form-group col-md-9" >
                  <textarea class="form-control cleditor"  name="local_address" placeholder=" Local Address: (eg: post, home location...) " style="border: .1px solid black"></textarea>
                 </div>

                  <div class="form-group col-md-9" >
                  <input type="number" class="form-control" name="mobile" placeholder="Mobile number" style="border: .1px solid black">
                 </div>
                <button type="submit" class=" button btn-success py-4 form-group col-md-3 form-control" style="width: 7rem;height:4rem" >Submit</button>
              </form>

    </div>

 <div  class="col-md-3"><img src="./img/place_right.png" style="height: 420px;width:280px;margin-left:6rem" alt=""></div>

</div>


<script>
    @if (Session::has('message'))

    toastr.options={
          'clossButton':true,
          'progressBar':true
    }

    toastr.success("{{ Session::get('message') }}"
    // , 'Success! New Student added'
    );

    // toastr.warnig("{{ Session::get('message') }}"
    // , 'Success! New Student added'
    // );

    @endif
</script>
</body>
</html>
