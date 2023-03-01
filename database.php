<?php
$hostName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="p";
$conn=mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("something wrong");
}
?>