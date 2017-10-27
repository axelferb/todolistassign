<?php
if ( isset($_POST['delete']) && isset($_POST['todo_delete'])){
	$delete = "DELETE FROM todo WHERE id = :delete_id";
	$statement = $pdo->prepare($delete);
	$statement->execute(array(':delete_id' => $_POST['todo_delete']));
    header('Location: index.php');
    return;
};
?>
    <input type="hidden" name="todo_delete" value=<?php echo $todo[ "id"]; ?> >
    <button type="submit" name="delete" id="delete_button" class="btn btn-danger btn-lg">Delete</button>
