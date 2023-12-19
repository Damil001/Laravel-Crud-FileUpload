<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Form</title>
</head>
<body>
    <h1>Edit a Student Profile</h1>
    <div>
        @if($errors->any())
        <ul>

            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    <form action="{{route('student.update' , ['student' => $student])}}" method="POST">
        @csrf
        @method('put')
        <label for="cnic">CNIC:</label>
        <input type="text" id="cnic" name="cnic" placeholder="Enter CNIC Number"  value = "{{$student->cnic}}"><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter Name"  value = "{{$student->name}}"><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
