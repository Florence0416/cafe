<?php
$servername = "cafedb.c9wzptup7ujf.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "iop1029i";
$dbname = "cafedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
