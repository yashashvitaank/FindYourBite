<?php
$stu_id=$_GET['id'];
include'db_connect.php';
$sql="DELETE FROM res1 WHERE rid={$stu_id}";
$result=mysqli_query($conn,$sql) or die("Query Unsuccesfull");
echo "Data delete successfully";
//header("location:admintest.php");
mysqli_close($conn);
?>