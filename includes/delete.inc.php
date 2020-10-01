<?php
require "./conn.inc.php";

foreach ($_POST as $key => $value) {
    $sql_delete = "DELETE FROM tasks WHERE id='$value'";

    if ($conn->query($sql_delete) === true) {
        header("Location: ../index.php");
    } else {
        header("Location: ../index.php");
    }
}

header("Location: ../index.php");
