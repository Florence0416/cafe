<?php
$servername = "";
$username = "admin";
$password = "iop1029i";
$dbname = "cafedb";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cafedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
