<?php

$sql_select = "SELECT id, task FROM tasks";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        echo "<label class='taskItem'>" . "<input type='checkbox' name='$id' id='$id' value='$id'> " . $row["task"] . "</label>" . "<br>";
    }
} else {
    echo "0 tasks";
}
$conn->close();
