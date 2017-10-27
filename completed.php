<?php
if (isset($_POST['todo_complete'])){
    $complete = "UPDATE todo SET completed = 1 WHERE id = :complete_id";
    $statement = $pdo->prepare($complete);
    $statement->execute(array(':complete_id' => $_POST['todo_complete']));
    header('Location: index.php');
    return;
};
?>
    <input type="hidden" name="todo_complete" value=<?php echo $todo[ "id"]; ?> >
    <button type="submit" name="completed" id="complete_button" class="btn btn-success btn-lg">Completed</button>
