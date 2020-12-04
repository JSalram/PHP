<?php

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . ", Password: " . $row["passwd"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
