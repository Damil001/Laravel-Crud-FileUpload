<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="form_body">
<form action="{{route('send_mail')}}" method="post">
@csrf
<label for="">Email To</label><br>
<input type="email" name="email"
placeholder="Example@email.com"><br><br>
<label for="">cc</label><br>
<input type="email" name="cc"
placeholder="Example@email.com"><br><br>
<label for="">bcc</label><br>
<input type="email" name="bcc"
placeholder="Example@email.com"><br><br>
<label for="">Subject</label><br>
<input type="text" name="subject" placeholder="Subject"><br><br>
<label for="">Body</label><br>
<textarea name="details" id="" cols="30"
rows="5"></textarea><br><br>
<input class="submit" type="submit" name="SubmitButton" id="">
</form> </div>
</div>
</body>
    
</body>
</html>