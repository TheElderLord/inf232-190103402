<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>

		<form action="upload" method="POST" enctype="multipart/form-data">
		  @csrf
			<h1>Laravel Form</h1>
			<div class = "form-group">
				<label for="Name">Name</label>
				<input type="text" placeholder="Name" name="name" class ="form-control" required>
			</div>
			<div class = "form-group">
				<label for="Surname">Surname</label>
				<input type="text" placeholder="Surname" name="surname" class ="form-control" required>
			</div>
			<div class = "form-group">
				<label for="Email">Email</label>
				<input type="email" placeholder="Email" name="email" class ="form-control" required>
			</div>
			<div class = "form-group">
				<label for="Profile Photo">Profile Photo</label>
				<input class="form-control" type="file" name="photos" multiple />
				<input id="btn" type="submit" class="btn btn-primary" value="Submit" />
				
			</div>
		</form>
</body>
</html>