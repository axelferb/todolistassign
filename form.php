<?php
require 'pdo.php';
if (isset($_POST['title']) && isset($_POST['createdBy'])){
    $statement = $pdo->prepare("INSERT INTO todo (title, createdBy) VALUES (:title, :createdBy)");
	$statement->execute(array(
	":title" => $_POST["title"],
	":createdBy" => $_POST["createdBy"]
	)
	);
	require 'fetch_all.php';
    echo "<div class='col-xs-12'><h1 style='text-align: center;'>Ny Todo skriven!</h1></div>";
}
?>
<div class="col-xs-12">
	<form action="index.php" method="POST">
		<input name="title" type="text" placeholder="Vad ska göras?">
		<br>
		<input name="createdBy" type="text" placeholder="Säger vem?">
		<br>
		<button type="submit" class="btn btn-primary btn-sm">Submit</button>
	</form>
</div>
