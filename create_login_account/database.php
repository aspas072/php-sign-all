<?php
$servername = "localhost";
$username = "chad";
$password = "jett";
$database = "mydemo";
 
// Connection 
$mysqli = new mysqli($servername, $username, $password, $database);
//$conn = new mysqli($servername, $username, $password);
 
// For checking if connection is successful or not
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
//echo "Connected successfully";
?>
