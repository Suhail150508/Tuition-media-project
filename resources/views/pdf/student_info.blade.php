<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <style>
        /* Define your styles here */
    </style>
</head>
<body class="m-2 p-2" style="border: 2px solid #f2e">
    <div class="m-2" style="padding:2rem">
    <h1>Tuition Information</h1>
    <p>Id No: {{ $student->id + 100  }}</p>
    <p>Name: {{ $student->name }}</p>
    <p>Gender: {{ $student->gender }}</p>
    <p>Class: {{ $student->class }}</p>
    <p>Medium: {{ $student->medium }}</p>
    <p>Subject: {{ $student->subject }}</p>
    <p>District: {{ $student->district }}</p>
    <p>Location: {{ $student->local_address }}</p>
    <br>
    <p>Schedule: {{ $student->schedule }}</p>
    <p>Salary: {{ $student->salary }}</p>
    </div>
    <!-- Add other student information fields as needed -->

    <!-- You can style the content as required -->
</body>
</html>
