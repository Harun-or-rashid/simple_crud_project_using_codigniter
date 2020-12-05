<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<title>Document</title>
</head>
<body>
<div class="container">
	<form action="user/image_upload" class="form-group mt-5" enctype="multipart/form-data">
		<div class="col-md-5 ">
			<label for="title">Upload Image</label>
			<input type="file"  class="form-control fa-file" name="image" /><br />
			<?php echo form_error('image'); ?>
			<input type="submit" class="col-md-2 btn btn-info" value="Upload">

		</div>
	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
