<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Suhil</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="   https://use.fontawesome.com/releases/v5.7.2/css/all.css"> --}}



    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="../newtem/css/bootstrap.css" rel="stylesheet">
    <link href="../newtem/css/fontawesome-all.css" rel="stylesheet">
    <link href="../newtem/css/swiper.css" rel="stylesheet">
	<link href="../newtem/css/magnific-popup.css" rel="stylesheet">
	<link href="../newtem/css/styles.css" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

{{-- AOS ANIMATION --}}
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

           {{-- toastr --}}
           {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
           <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

{{-- New css --}}
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        {{-- <link rel="stylesheet" href="../assets/css/fontawesome.css">
        <link rel="stylesheet" href="../assets/css/templatemo-grad-school.css">
        <link rel="stylesheet" href="../assets/css/owl.css">
        <link rel="stylesheet" href="../assets/css/lightbox.css"> --}}



</head>
<body data-spy="scroll" data-target=".fixed-top">

    {{-- <-- Navigation --> --}}
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="margin-top: -1.5rem">
        <div class="container">



            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="../newtem/images/logoe.png" alt="alternative" style="height: 70px;margin-top:-1rem"></a>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ url('#teachers') }}">TUTORS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{url('#students')  }}">TUITIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ url('#contact') }}">CONTACT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DROP</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="article.html">ARTICLE DETAILS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="terms.html">TERMS CONDITIONS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.html">PRIVACY POLICY</a>
                        </div>
                    </li>

                </ul>           <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <header class="bg-dark" style="height: 16vh;margin-top:-1.7rem">
    </header>

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

        <body>

    <div class="row">

        <div  class="col-md-7" style="background-color:lightgrey;color:blue" >
            <a class="btn btn-success float-right m-2" href="{{url('/download-pdf-teacher/' . $teachers->id) }}">Download Tutor Info</a>

            <div style="display: flex;margin-top:1rem;margin-left:4rem">
                <img src="{{asset('teacher/'.$teachers->image)  }}" alt="" style="height: 15rem;width:15rem">
               <div>
                <div style="color:#9932cc ;margin:2rem">Aboute: {{$teachers->full_name   }}</div>
                <p style="color:#d45698;margin:2rem;font-size:1.1rem"> {{$teachers->experience   }}</p>
             </div>
            </div>
         <div  class="" style="margin-top:3rem;paddig-left:2rem;margin-left:4rem;width:500px">
            <h2 class="" style="border-bottom: 5px solid #cc3277">{{ __("Tutor Details") }}</h2>
            <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:#9932cc">{{ __("ID No") }}: </span> {{ $teachers->id + 100 }}</p>
            <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:#9932cc">{{ __("Name") }}: </span> {{ $teachers->name }}</p>
            <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:darkorchid">{{ __("Gender") }}: </span> {{ $teachers->gender }}</p>
            <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:darkorchid">{{ __("Institution") }}: </span> {{ $teachers->institution }}</p>
            <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:darkorchid">{{ __("Subject") }}: </span> {{ $teachers->subject }}</p>
            <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:darkorchid"> {{ __("District") }}: </span> {{ $teachers->district }}</p>
            <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:darkorchid"> {{ __("Present address") }}: </span> {{ $teachers->present_address }}</p>

         </div>

         <h2 class="" style="border-bottom: 5px solid #cc3277;width:500px;margin-left:4rem;margin-top:3rem">{{ __("Tutor Requirements") }}</h2>
         <div  class="" style="margin-top:1rem;paddig-left:2rem;margin-left:4rem;width:500px">
         <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:#9932cc">{{ __("Available Tuition Schedule") }} : </span> {{ $teachers->schedule}}</p>
         <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:darkorchid">{{ __("Expected Students Level") }}: </span> {{ $teachers->student_level }}</p>
         <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:darkorchid">{{ __("Prefered Subject") }}: </span> {{ $teachers->prefered_subject }}</p>
         <p style="color:#d45698;font-size:1.1rem;font-weight:500"><span style="font-size:1.3rem;color:darkorchid">{{ __("Expected Salary") }}: </span> {{ $teachers->salary }}</p>
         </div>
            <div class="my-2">
            <a class=" button " href="{{ url('/search-tutors') }}" style="font-size:1.6rem;padding:1rem; margin-left:17rem;width:32%">{{ __("View All Tutors") }}</a>
            </div>
        </div>



                <div class="col-md-5" style="background-color: darkcyan;height:150vh">

                    <div class="text-white p-5 " style="background-color:purple;margin-left:-.8rem">
                        <h3 class="mb-5">{{ __("Apply for this tutor") }}</h3>
                        <form action="{{ url('/application-tuition') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" name="tutor_id" placeholder="Enter Tutor id" style="border: .1px solid black">
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" style="border: .1px solid black">
                            </div>

                            <div class="form-group col-md-9">
                                <select id="inputState" class="form-control" name="class" style="border: .1px solid black">
                                  <option selected > Select your Class </option>
                                  <option>Five</option>
                                  <option>Six</option>
                                  <option>Seven</option>
                                  <option>Eight</option>
                                  <option>Nine</option>
                                  <option>Ten</option>
                                  <option>Intermediate</option>
                                </select>
                              </div>
                              <div class="form-group col-md-9">
                                <input type="text" class="form-control" name="subject" placeholder="Enter your subjects,eg: math, english, physics..etc. " style="border: .1px solid black">
                            </div>

                              <div class="form-group col-md-9">
                                <select  class="form-control" name="gender" style="border: .1px solid black">
                                  <option  selected>Select Gender</option>
                                  <option>male</option>
                                  <option>female</option>
                                </select>
                              </div>

                              <div class="form-group col-md-9">
                                <select id="inputState" class="form-control" name="district" placeholder="District" style="border: .1px solid black">
                                  <option selected>Select your District</option>
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

                              <div class="form-group col-md-9">
                                  <textarea class="form-control cleditor" name="location" placeholder="Inter your present location" style="border: .1px solid black"></textarea>
                              </div>

                              <div class="form-group col-md-9" >
                                <input type="number" class="form-control" name="mobile" placeholder="Inter your mobile number" style="border: .1px solid black">
                               </div>

                              <div class="form-group col-md-9">
                                <button type="submit" class="form-control button btn-primary " style="width:100%">{{ __("Apply Now") }}</button>
                              </div>

                        </form>
                    </div>




                    {{-- <div class="text-white p-5 "  style="background-color:purple;margin-left:-.8rem">
                        <h2 class="mb-5">Find Tutor accordting to Gender and District</h2>
                        <form action="{{ url('/search_tutor') }}" method="POST"  enctype="multipart/form-data">
                            @csrf


                            <select class="form-select my-2 py-2 text-center" name="gender" aria-label="Default select example" style="width:100%">
                                <option selected>Gender</option>
                                <option>male</option>
                                <option>female</option>
                            </select>

                            <select class="form-select my-2 py-2 text-center" name="district" aria-label="Default select example" style="width:100%">
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



                            <button type="submit" class="button btn-primary" style="width:100%;margin-top:1rem">Submit</button>
                          </form>
                        </div>
                    </div> --}}
                </div>
           </div>




    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Revo</h6>
                        <p class="p-small">Revo is a desktop app website Bootstrap HTML template created for desktop applications, to present their features and control panel options</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="terms.html">Terms & Conditions</a>, <a href="privacy.html">Privacy Policy</a></li>
                            <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                            <li>Menu: <a class="page-scroll" href="#header">Home</a>, <a class="page-scroll" href="#registration">Trial</a>, <a class="page-scroll" href="#features">Features</a>, <a class="page-scroll" href="#details">Details</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a href="mailto:contact@website.com"><strong>contact@website.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Name</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-12">
                    <p class="p-small">Distributed By: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="newtem/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="newtem/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="newtem/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="newtem/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="newtem/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="newtem/js/scripts.js"></script> <!-- Custom scripts -->



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

{{-- <script src="assets/js/isotope.min.js"></script> --}}
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
//
{{-- //   <script>
//     AOS.init();
//   </script> --}}



{{-- //   -- toastr info here -- --}}

//  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
