<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login";

$conn = mysqli_connect($server, $diary, $database2);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>