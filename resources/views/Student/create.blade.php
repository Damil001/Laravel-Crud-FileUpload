<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Form</title>
</head>
<body>
    <h1>Create a Student Profile</h1>
    <div>
        @if($errors->any())
        <ul>

            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        @method('post')
        <label for="cnic">CNIC:</label>
        <input type="text" id="cnic" name="cnic" placeholder="Enter CNIC Number" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter Name" required><br><br>

        <input type="submit" value="Save Student Input">
    </form>
</body>
</html>
