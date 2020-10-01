<?php
$sql_select = "SELECT task FROM tasks";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li class='taskItem'>" . $row["task"]  . "</li>";
    }
} else {
    echo "0 tasks";
}
$conn->close();
