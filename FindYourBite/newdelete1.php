<?php
 
$stu_id=$_GET['id'];
include'db_connect.php';
$sql="DELETE FROM rest WHERE rid={$stu_id}";
$result=mysqli_query($conn,$sql) or die("Query Unsuccesfull");
mysqli_close($conn);
header("Location: admintest.php");
?>