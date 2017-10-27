<?php
require 'pdo.php';
foreach($todolist as $todo){
    ?>
    <form action="index.php" method="post">
        <div id="postit" class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <?php
        $todoitem = "<h3>" . $todo['createdBy'] . "</h3>" . "<br/>" . "<h3>" . $todo['title'] . "</h3>" . "<br/>";
        echo $todoitem;
        require 'completed.php';
		require 'delete.php';
	?>
        </div>
    </form>
    <?php
    };
?>