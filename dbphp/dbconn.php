<?php

$dbServername = "localhost" ;
$dbUsername = "root" ;
$dbPassword = "" ;
$dbName = "upload_file" ;

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
echo "connection done";
?>