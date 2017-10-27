<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<title>Todolist</title>
	<?php
    require 'pdo.php';
    ?>
</head>

<body>
	<main>
		<?php
	require 'fetch_all.php';
    require 'form.php';
    require 'type_info.php';
    echo "<div class='col-xs-12'><h1 style='text-align: center;'>Färdiga todos</h1></div>";
    require 'fetch_all_comp.php';
    require 'type_info.php';
    ?>
	</main>
</body>

</html>
