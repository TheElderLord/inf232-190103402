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




    <div>
    <form action="upload" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" name="name" placeholder="Enter your name">
<input type="text" name="surname" placeholder="Enter surname">
<input type="text" name="email" placeholder="Your Email">
<input type="file" name="photos" multiple>
<button type="submit">Register</button>
</form></div>
    
</body>
</html>