<?php
require "./includes/conn.inc.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Todolist</title>
    <link rel="stylesheet" href="./styles/main.css" />
    <!--  <script src="./scripts/app.js" defer></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="list">
        <div class="content">
            <h1>Todolist</h1>
            <form action="./includes/insert.inc.php" method="POST">
                <label for="taskInput">Add a new task:</label>
                <br>
                <input type="text" id="taskInput" name="taskInput">
                <button type="submit">New task</button>
            </form>
            <!--  <form action="./includes/clearlist.inc.php"> <button>Clear list</button>-->
            </form>
            <form action="./includes/delete.inc.php" method="POST">
                <button type="submit" class="deleteDone">Delete done</button>
                <br>
                <div class="tasks">
                    <?php require "./includes/select.inc.php"; ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>