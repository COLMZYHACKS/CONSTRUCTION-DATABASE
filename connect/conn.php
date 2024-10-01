<?php 
$server = "localhost";
$username = "root";
$password = "2004";
$db = "construction";
$port= "22240";
$conn = new mysqli($server, $username, $password, $db, $port);
if ($conn->connect_error){
    die("Conncetion failed". $conn->connect_error);
}
?>