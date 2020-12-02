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

<div class="container">
<?php //var_dump($news); ?>
	<form	class="form-group"  <?php echo form_open('news/update'); ?>
	<?php if($this->session->flashdata('msg')): ?>
		<p style="background:limegreen;"><?php echo $this->session->flashdata('msg'); ?></p>
	<?php endif; ?>
	<label for="title">Title</label>
	<input type="text"  class="form-control" name="title" value="<?php echo $news['title']; ?>" /><br />
	<?php echo form_error('title'); ?>
	<label for="text">Text</label>
	<textarea class="form-control" name="text" ><?php echo $news['text']; ?></textarea><br />
	<?php echo form_error('text'); ?>

	<input type="submit" name="submit" value="Update" />

	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
