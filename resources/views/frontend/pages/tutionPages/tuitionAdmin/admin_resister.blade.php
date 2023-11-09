
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
    <h2 class="col-md-9" style="margin-top:3rem;margin-bottom:2rem">Resister here </h2>
        <form action="{{ url('/resister-admin-store') }}" method="POST" style="padding:3rem">
           @csrf
            <div class="form-row "  >
              <div class="form-group col-md-9" >
                <input type="text" class="form-control" name="name" placeholder="Enter Name" style="border: .1px solid black">
              </div>
              <div class="form-group col-md-9" >
                <input type="email" class="form-control" name="email" placeholder="Enter Email" style="border: .1px solid black">
              </div>
              <div class="form-group col-md-9" >
                  <input type="password" class="form-control" name="password" placeholder="Enter Password" style="border: .1px solid black">
                </div>
                <div class="form-group col-md-9" >
                  <input type="number" class="form-control" name="mobile" placeholder="Enter mobile" style="border: .1px solid black">
                </div>
                <button type="submit" class=" button btn-success col-md-5 py-2 form-group form-control" style="width: 5rem;height:4rem" >Resister</button>
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
</div>
@endsection
