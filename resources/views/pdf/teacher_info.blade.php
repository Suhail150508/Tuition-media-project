<!DOCTYPE html>
<html>
<head>
    <title>Tutor Information</title>
    <style>
        /* Define your styles here */
        /* img {
            max-width: 200px;
        } */
    </style>
</head>
<body class="m-2 p-2" style="border: 2px solid #f2e">
    {{-- <img src="{{ asset('/teacher/' . $teacher->image) }}" alt="img" style="height:140px;"> --}}
    {{-- <img src="data:image/jpeg;base64,{{ base64_encode($teacher->image) }}" alt="teacher Image"> --}}
    <div class="m-2" style="padding:2rem">
    <h1>Tutor Information</h1>
    <p>Id No: {{ $teacher->id + 100  }}</p>
    <p>Name: {{ $teacher->name }}</p>
    <p>Gender: {{ $teacher->gender }}</p>
    <p>Institution: {{ $teacher->institution }}</p>
    <p>Subject: {{ $teacher->subject }}</p>
    <p>District: {{ $teacher->district }}</p>
    <p>Present address: {{ $teacher->present_address }}</p>
    <p>Experience: {{ $teacher->experience }}</p>
    </div>
    <!-- Add other teacher information fields as needed -->

    <!-- You can style the content as required -->
</body>
</html>
