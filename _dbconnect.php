<?php
$server="localhost";
$username="root";
$password="";
$databse="users";

$conn=mysqli_connect($server, $username, $password, $databse);
if (!$conn){
    die("Error ". mysqli_connect_error());
}

?>