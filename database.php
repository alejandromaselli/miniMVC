<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'sistema';

$conn = new mysqli($server,$username,$password,$database);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
