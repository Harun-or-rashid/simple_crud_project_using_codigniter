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
	<h4>All News</h4>
	<div class="table">
		<table>
			<th>

			</th>
		</table>
	</div>
<!--	--><?php //var_dump($news); ?>
	<?php foreach ($news as $new):?>
	<h5><?php echo $new->title ?></h5>
	<h5><?php echo $new->slug ?></h5>
	<h5><?php echo $new->text ?></h5>
<?php endforeach;	?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
