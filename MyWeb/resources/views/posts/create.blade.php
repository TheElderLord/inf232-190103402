<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new post</title>
</head>
<body>
<form method="POST" action="{{route('create-post')}}">
 @csrf
  <input type="text" name="title" placeholder="Title of your post" required>
  <input type="text" name="body" placeholder="Type your post" required>
  <button type="submit">Create post</button>
</form>
    
</body>
</html>