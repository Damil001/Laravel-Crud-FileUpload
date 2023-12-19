<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500&family=Manrope:wght@200;300;400;500;600;700;800&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    .maincontainer{
        font-family: 'DM Sans', sans-serif;
        font-family: 'Manrope', sans-serif;
        font-family: 'Rubik', sans-serif;
        width:100%;
        height:100vh;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
    }
    th,td{
        padding:3px;
    }
    .button{
        
        cursor: pointer;
                    outline: 0;
                    display: inline-block;
                    font-weight: 400;
                    line-height: 1.5;
                    text-align: center;
                    background-color: transparent;
                    border: 1px solid transparent;
                    padding: 6px 12px;
                    font-size: 1rem;
                    border-radius: .25rem;
                    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                    color: #0d6efd;
                    border-color: #0d6efd;

                
    }
    .button:hover {
                        color: #fff;
                        background-color: #0d6efd;
                        border-color: #0d6efd;
                    }
    
                    tr{
                        background-color: #ddd;
                    }
</style>
<body>
    
    <div>
        @if(session()->has('success'))
            <div>
                    {{session('success')}}
            </div> 
        @endif 

    </div>
    
    <div class="maincontainer">
    <h1>Student</h1>
        <table border = "1">
            <tr>
                <th>Id</th>
                <th>cnic</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->cnic}}</td>
                    <td>{{$student->name}}</td>
                    <td>
                        <a class = "button" href = "{{route('student.edit', ['student' => $student]) }}">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('student.delete' , ['student' => $student])}}">
                            @csrf
                            @method('delete')
                            <input class = "button" type = "submit" value="Delete"/>
                        </form>
                    </td>
                </tr>

            @endforeach
        </table>

    </div>
</body>
</html>