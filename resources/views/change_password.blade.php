

@extends('frontend.pages.tutionPages.navbar');
@section('content')
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
<div>

<div class=" bg-primary">
</div>
<div  class="row" style="background-color:lightseagreen;text-align:center;padding:3rem">
    <div  class="col-md-3"><img src="./img/place_left.png" style="height: 400px;width:240px" alt=""></div>


 <div  class="col-md-8 " style="font-size:2.5rem ;border-radius:15px;background-color:ghostwhite;color:black">
    <h2 class="col-md-9" style="padding-top:2rem">Inter Information </h2>
    <div style="margin:1.5rem;text-align:center;background-color:darkseagreen">
        <form action="{{url('/change-password-store')}}" method="POST" style="padding-top:3rem;padding-left:2rem;">
           @csrf
            {{-- <div class="form-row "  > --}}
              <div class="form-group col-md-9" >
                <input type="password" class="form-control" name="old_password" placeholder="inter Old password" style="margin-top:1rem;border: .1px solid black;padding:20px">
                @error('old_password')
                    <h5 class="text-danger">{{ $message }}</h5>
                @enderror
              </div>

                <div class="form-group col-md-9" >
                    <input type="password" class="form-control" name="new_password" placeholder="inter New password" style="margin-top:1rem;border: .1px solid black;padding:20px">
                    @error('new_password')
                        <h5 class="text-danger">{{ $message }}</h5>
                    @enderror
                </div>

                <div class="form-group col-md-9" >
                    <input type="password" class="form-control" name="confirm_password" placeholder="inter Confirm  password" style="margin-top:1rem;border: .1px solid black;padding:20px">
                    @error('confirm_password')
                        <h5 class="text-danger">{{ $message }}</h5>
                    @enderror
                </div>
                <div class="d-flex">
                    <button type="submit" class=" default-btn btn col-md-4  form-group form-control" style="width:100%;height:4rem;border-radius:50px" >Change Password</button>
                </div>
        </form>

    </div>


    </div>

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
</div>
@endsection











{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="m-3 p-3 bg-dark" style="">

    <form action="{{url('/change-password')}}" method="POST">
        @csrf
        <div class="form-group">
          <input type="password" class="form-control" name="old_password" placeholder="inter Old password" style="margin-top:1rem">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="new_password" placeholder="inter New password" style="margin-top:1rem">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="confirm_password" placeholder="inter Confirm  password" style="margin-top:1rem">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html> --}}
