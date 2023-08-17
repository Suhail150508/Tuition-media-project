
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="row mt-5" style="margin-top: 3rem">

        <div class="span4">

        </div>
        <div class="span8">

    <div class="create_catagory " >

    <form action="{{ url('/students_image/') }}" method="post" enctype="multipart/form-data">
       @csrf

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="name">
        </div>
        @error('name')
        <div class="error" style="color:red">{{ $message }}</div>
         @enderror


        <div class="form-group ">
          <label for="image">image</label>
          <input type="file" class="form-control" name="image" placeholder="image">
        </div>
        @error('image')
        <div class="error" style="color:red">{{ $message }}</div>
         @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      </div>
    </div>
    </div>

</body>
</html>

