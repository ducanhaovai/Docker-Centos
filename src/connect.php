<?php
$server = "db";
$user="dbuser";
$pass="dbPass@123";
$database="shoe";
$conn=mysqli_connect($server,$user,$pass,$database);
mysqli_query($conn,'set names "utf8"');
?>