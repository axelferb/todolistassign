<?php
require 'pdo.php';
$statement = $pdo->prepare("SELECT * FROM todo WHERE completed = 1 ORDER BY id DESC");
    $statement->execute();
    $todolist = $statement->fetchAll(PDO::FETCH_ASSOC);
?>