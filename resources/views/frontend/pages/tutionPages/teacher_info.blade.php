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
    <h2 class="text-center " style="padding:3rem 1px"> শিক্ষক / শিক্ষিকা পরিচয় দিন ইংরেজীতে </h2>
</div>
<div  class="row" style="background-color:lightseagreen;text-align:center;padding:3rem">
    <div  class="col-md-3"><img src="./img/place_left.png" style="height: 400px;width:240px" alt=""></div>


 <div  class="col-md-9 " style="font-size:2.5rem ;border-radius:15px;background-color:ghostwhite;color:black">
    <h2 class="col-md-9" style="margin-top: 2rem">LOGIN INFORMATION</h2>
        <form action="{{ url('/teachers_information') }}" method="POST" style="padding:3rem" enctype="multipart/form-data">
           @csrf
            <div class="form-row "  >
              <div class="form-group col-md-9" >
                <input type="text" class="form-control" name="name" placeholder="Name" style="border: .1px solid black">
              </div>
              <div class="form-group col-md-9" >
                <input type="email" class="form-control" name="email" placeholder="Enter Email No:" style="border: .1px solid black">
              </div>
              <div class="form-group col-md-9" >
                <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile No:" style="border: .1px solid black">
              </div>
                <h2 class="col-md-9  " style="margin-top: 3rem">TUTOR RESUME</h2>


                <div class="form-group col-md-9" >
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" style="border: .1px solid black">
                  </div>

              <div class="form-group col-md-9">
                <select id="inputState" class="form-control" name="gender"  style="border: .1px solid black">
                  <option selected>Gender</option>
                  <option>male</option>
                  <option>female</option>
                </select>
              </div>


              <div class=" col-md-9" >
                 <select id="inputState" class="form-control" name="institution"  required style="border: .1px solid black">
                  <option selected>Institution Name</option> <i class="fa fa-sort-desc" aria-hidden="true"></i>
                  <option>University of Dhaka</option>
                  <option>Bangladesh University of Engineering and Technology</option>
                  <option>Khulna University of Engineering & Technology</option>
                  <option>Rajshahi University of Engineering & Technology</option>
                  <option>Chittagong University of Engineering & Technology</option>
                  <option>Dhaka University of Engineering & Technology, Gazipur</option>
                  <option>University of Rajshahi</option>
                  <option>Jahangirnagar University</option>
                  <option>Khulna University</option>
                  <option>Jagannath University</option>
                  <option>Bangladesh University of Textiles</option>
                  <option>Islamic Arabic University</option>
                  <option>Begum Rokeya University</option>
                  <option>Sher-e-Bangla Agricultural University</option>
                  <option>Shahjalal University of Science and Technology</option>
                  <option>Pabna University of Science and Technology</option>
                  <option>Patuakhali Science and Technology University</option>
                  <option>Rangamati Science and Technology University</option>
                  <option>Hajee Mohammad Danesh Science & Technology University</option>
                  <option>Bangabandhu Sheikh Mujib Medical University</option>
                  <option>Mawlana Bhashani Science and Technology University</option>
                  <option>Jashore University of Science and Technology</option>
                  <option>Noakhali Science and Technology University</option>
                  <option>Bangabandhu Sheikh Mujibur Rahman Science and Technology University</option>
                  <option>Bogura Science and Technology University</option>
                  <option>Jashore University of Science and Technology</option>
                  <option>Jashore University of Science and Technology</option>
                  <option>Others</option>
                </select>
              </div>

              <div class="col-md-9" style="margin-top: 1rem">
                <input class="form-control" id="inputLocation" type="text" name="subject" placeholder="Subject Name" required style="border: .1px solid black" style="margin-top: 3rem">
            </div>

            <div class="col-md-9" style="margin-top: 1rem">
            <select id="inputState" class="form-control" name="district"  required style="border: .1px solid black">
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
            </div>



            <div class="col-md-9" style="margin-top: 1rem">
                <textarea class="form-control cleditor" id="inputBirthday" type="text" name="experience" placeholder="Share some of your experiences " required style="border: .1px solid black"></textarea>
            </div>

            <div class="col-md-9" style="margin-top: 1rem">
                <textarea class="form-control cleditor" id="inputBirthday" type="text" name="present_address" placeholder="Enter your present address" required style="border: .1px solid black"></textarea>
            </div>


            <div class="form-group col-md-9" >
                <h2 class="col-md-9 my-5" style="margin-top: 3rem" >Tutor Image</h2>
                <input type="file" class="form-control" name="image" placeholder="image">
              </div>


            <h2 class="col-md-9 my-5" style="margin-top: 3rem">TUTOR REQUIREMENTS</h2>


            <div class="form-group col-md-9" >
                <input type="text" class="form-control" name="schedule" placeholder="Available Tuition Schedule: Any Schedule " style="border: .1px solid black">
               </div>
            <div class="form-group col-md-9" >
                <input type="text" class="form-control" name="student_level" placeholder="Expected Students Level : Level 0 - Level 10" style="border: .1px solid black">
               </div>
            <div class="form-group col-md-9" >
                <input type="text" class="form-control" name="prefered_subject" placeholder="Prefered Subject : English, Bangla, Mathematics, GS, GK, BGS, Computer Operations & any subject" style="border: .1px solid black">
               </div>
            <div class="form-group col-md-9" >
                <input type="text" class="form-control" name="salary" placeholder="Expected Salary : (3000-10000) or Negotiable (BDT)" style="border: .1px solid black">
               </div>


                <button type="submit" class=" button  py-4  col-md-9 " style="height:4rem" >Submit</button>
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
