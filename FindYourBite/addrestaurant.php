<?php
include('db_connect.php');
$area=$_POST['area'];
$name=$_POST['name'];
$cusinise=$_POST['cusinise'];
$type=$_POST['type'];
$rating=$_POST['rating'];
$phone=$_POST['phone'];
$link=$_POST['map'];
 $insert= "INSERT INTO rest(area,resname,ctype,type,rating,connumber,mlink) VALUES('$area','$name','$cusinise','$type','$rating','$phone','$link')";
 if(mysqli_query($conn,$insert)){
    header("location:admintest.php");
 }else{
    echo"Error:" .mysqli_error($conn);
 }
 mysqli_close($conn);
?>