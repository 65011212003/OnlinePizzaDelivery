<?php
$server = "localhost";
$username = "demo";
$password = "abc123";
$database = "OPD";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
