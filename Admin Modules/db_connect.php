<?php
//echo "Connection successfull";
$host="localhost";
$user="root";
$password="";
$database="findyourbite";

$conn=mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
?>