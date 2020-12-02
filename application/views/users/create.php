






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

<?php //echo validation_errors(); ?>
<div class="row">
<div class="container">
<div class="col-md-6">
<!--	--><?php //var_dump($formdata); ?>
	<h4>Sign Up Here</h4>
	<form	class="form-group"  <?php echo form_open('user/create'); ?>

	<?php if($this->session->flashdata('msg')): ?>
		<p style="background:limegreen;"><?php echo $this->session->flashdata('msg'); ?></p>
	<?php endif; ?>

	<div class="col-md-5">
	<label for="title">Name</label>
	<input type="text"  class="form-control" name="name" /><br />
	<?php echo form_error('name'); ?>
	</div>
		<div class="col-md-5">
	<label for="title">Email</label>
	<input type="email"  class="form-control" name="email" /><br />
	<?php echo form_error('email'); ?>
		</div>

	<div class="col-md-5">
	<label for="title">Mobile</label>
	<input type="text"  class="form-control" name="mobile" /><br />
	<?php echo form_error('mobile'); ?>
	</div>

	<div class="col-md-5">
	<label for="title">Password</label>
	<input type="password"  class="form-control" name="password" /><br />
	<?php echo form_error('password'); ?>
	</div>

	<div class="col-md-8">
	<label for="text">Address</label>
	<textarea class="form-control" name="address"></textarea><br />
	<?php echo form_error('address'); ?>
	</div>

	<div class="col-md-5">
		<input type="submit" class="btn btn-info" value="Sign Up" >
	</div>

	</form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

















