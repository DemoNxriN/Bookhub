<?php

$servername = "bbdd.bookhub.cat";
$username = "ddb219390";
$password = "lTDYST8S9KlIwU";
$dbname = "ddb219390";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>