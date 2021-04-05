<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<style>
div{
    display:block;
}
</style>
<body>
<?php
echo Form::open(array('url'=>'/uploadfile','files'=>
'true'));
echo 'Select file to upload';
echo Form::file('image');
echo Form::submit('Upload file');
echo Form::close();
?>



    <div>
<form method="POST" action="{{route('create_user')}}">
@csrf
<input type="text" name="name" placeholder="Enter your name">
<input type="text" name="surname" placeholder="Enter surname">
<input type="text" name="email" placeholder="Your Email">
<input type="text" name="image">
<button type="submit">Register</button>
</form></div>
    
</body>
</html>