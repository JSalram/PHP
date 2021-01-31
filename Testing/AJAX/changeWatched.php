<?php

$user = $_GET["user"];
$w = $_GET["w"];

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE anime SET watched=$w WHERE username='$user';";

$conn->query($sql);

$conn->close();