{{-- @extends('frontend.pages.tutionPages.navbar')

@section('content') --}}

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
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="newtem/css/bootstrap.css" rel="stylesheet">
    <link href="newtem/css/fontawesome-all.css" rel="stylesheet">
    <link href="newtem/css/swiper.css" rel="stylesheet">
    <link href="newtem/css/magnific-popup.css" rel="stylesheet">
    <link href="newtem/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    {{-- AOS ANIMATION
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}

    {{-- toastr --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    {{-- New css --}}
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">


    {{-- TemplateMo 557 Grad School --}}






<style>
 * {
    margin: 0;
    padding: 0
}

body {
    background-color: #545454
}

.card {
    width: 600px;
    margin: 0 auto;
    /* height: 100vh; */
    padding: 20px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.2)
}

.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 25px;
    font-weight: bold
}

.idd {
    font-size: 20px;
    font-weight: 600
}

.idd1 {
    font-size: 20px
}

.number {
    font-size: 27px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 20px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 25px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 22px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
</style>
</head>

<body class="bg-primary">
<div style="height:6rem;width:100%;background-color:#000;text-align:center">
    <h1 style="color: #ffffffff;padding-top:1rem">Your Profile</h1>
</div>
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center text-dark" style="background-color:darkgrey">

        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center">
                <button
                    class="btn btn-secondary" style="margin: 20px">
                    {{-- <img src="https://i.imgur.com/wvxPV9S.png" height="100"
                    width="100" /> --}}
                    <img src="{{ asset('/teacher/' . $profiles->image) }}" alt="img"
                    height="135" width="135" style="border-radius:80px;">
                </button> <span class="name mt-3">{{ $profiles->name }} </span> <span
                    class="idd">@eleanorpena</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span
                        class="idd1">Oxc4c16a645_b21a</span> <span><i class="fa fa-copy"></i></span> </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">1069
                        <span class="follow">Followers</span></span> </div>
                <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>
                <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital
                        artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i
                            class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i
                            class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>
            </div>
        </div>

    </div>
<div class="" style="width: 100%;height:14rem;background-color:#000">
    <h5>
        Thanks all
    </h5>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
    integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    @if (Session::has('message'))

        toastr.options = {
            'clossButton': true,
            'progressBar': true
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
{{-- @endsection --}}
