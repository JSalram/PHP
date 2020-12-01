<?php

$anime = $_GET["anime"];
$user = $_GET["user"];
$w = $_GET["w"];

$conn = new mysqli("localhost", "root", "", "test");
// $conn = new mysqli("sql207.epizy.com", "epiz_27293444", "GTAZ4ep1Zy", "epiz_27293444_janime");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE anime SET watched=$w WHERE username='$user' AND name='$anime'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
