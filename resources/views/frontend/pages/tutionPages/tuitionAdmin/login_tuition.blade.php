
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
    <div  class="col-md-4"><img src="./img/place_left.png" style="height: 400px;width:240px" alt=""></div>


 <div  class="col-md-6 " style="font-size:2.5rem ;border-radius:15px;background-color:ghostwhite;color:black">
    <h2 class="col-md-9" style="padding-top:2rem">Login here </h2>
    <div style="margin:1.5rem;text-align:center;background-color:darkseagreen">
        <form action="{{ url('/login-tuition-store') }}" method="POST" style="padding-top:3rem;padding-left:2rem;">
           @csrf
            {{-- <div class="form-row "  > --}}
              <div class="form-group col-md-9" >
                <input type="email" class="form-control" name="email" placeholder="Enter Email" style="border: .1px solid black;padding:20px">
                @error('email')
                    <h5 class="text-danger">{{ $message }}</h5>
                @enderror
              </div>

                <div class="form-group col-md-9" >
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" style="border: .1px solid black;padding:20px">
                    @error('password')
                        <h5 class="text-danger">{{ $message }}</h5>
                    @enderror
                </div>

                {{-- </div> --}}
                <div class="col-md-9">
                    {!! NoCaptcha::renderJs() !!}
                    {{-- {!! NoCaptcha::renderJs('fr', true, 'recaptchaCallback') !!} --}}
                    {!! NoCaptcha::display() !!}
                    {{-- {!! NoCaptcha::display(['data-theme' => 'dark']) !!} --}}
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <h5 style="color:red">{{ $errors->first('g-recaptcha-response') }}</h5>
                        </span>
                    @endif
                    <br>
                </div>
                <div class="d-flex">
                    <button type="submit" class=" default-btn btn col-md-4 py-2 form-group form-control" style="width:100%;height:4rem;border-radius:50px" >Log in</button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link col-md-8" style="padding-bottom:2rem;font-size:1.4rem" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
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
