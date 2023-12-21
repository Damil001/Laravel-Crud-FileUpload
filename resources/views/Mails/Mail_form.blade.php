<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 60%;
            margin: 50px auto;
        }

        .form_body {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form_body form {
            display: flex;
            flex-direction: column;
        }

        .form_body label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form_body input[type="email"],
        .form_body input[type="text"],
        .form_body textarea {
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            width: 100%;
        }

        .form_body input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form_body input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form_body">
        @if(session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif
            <form action="{{route('send_mail')}}" method="post">
                @csrf
                <label for="email">Email To</label><br>
                <input type="email" name="email" id="email" placeholder="Example@email.com"><br><br>
                <label for="cc">cc</label><br>
                <input type="email" name="cc" id="cc" placeholder="Example@email.com"><br><br>
                <label for="bcc">bcc</label><br>
                <input type="email" name="bcc" id="bcc" placeholder="Example@email.com"><br><br>
                <label for="subject">Subject</label><br>
                <input type="text" name="subject" id="subject" placeholder="Subject"><br><br>
                <label for="details">Body</label><br>
                <textarea name="details" id="details" cols="30" rows="5"></textarea><br><br>
                <input class="submit" type="submit" name="SubmitButton" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
