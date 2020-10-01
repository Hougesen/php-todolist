<?php
require "./conn.inc.php";

$sql_clear = "DELETE FROM tasks";

if ($conn->query($sql_clear) === TRUE) {
    header("Location: ../index.php");
    echo "List cleared";
} else {
    header("Location: ../index.php");
    echo "Error: " . $sql_clear . "<br>" . $conn->error;
}
