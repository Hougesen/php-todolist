<?php
require "./conn.inc.php";

if (isset($_POST)) {
    $task = $_POST["taskInput"];
    $sql_insert = "INSERT INTO tasks (task) VALUES ('$task')";

    if ($conn->query($sql_insert) === true) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
