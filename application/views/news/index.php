<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<title><?php echo $title ?></title>
</head>
<body>
<div class="container">
	<h4 class="">All News</h4>
	<div class="table">
		<table class="table table-hover col-md-8">
			<tr>
				<th>Title</th>
				<th>Slug</th>
				<th>Content</th>
				<th>Action</th>
			</tr>
			<?php foreach ($news as $data):?>
			<tr>

				<td><?php echo $data->title ?></td>
				<td><?php echo $data->slug ?></td>
				<td><?php echo $data->text ?></td>
				<td><a href="<?php echo base_url('index.php/news/edit/'.$data->id)?>" class="btn fa fa-edit text-warning">Edit</a>||
				<a href="<?php echo base_url('index.php/news/delete/'.$data->id)?>" class="btn fa fa-trash-o text-danger">Delete</a></td>

			</tr>
			<?php endforeach; ?>

		</table>
	</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
