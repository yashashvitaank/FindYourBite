<?php
$name=$_POST['name'];
$email=$_POST['email'];
$rating=$_POST['rating'];
$comment=$_POST['comment'];
$rid=$_POST['rid'];

$servername="localhost";
$username="root";
$password="";
$dbname="findyourbite";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
$sql="INSERT INTO feedback(name,email,rating,comment,rid) VALUES ('$name','$email','$rating','$comment','$rid')";
 if($conn->query($sql)==TRUE)
 {
    header("Location: thankyou.html");
    exit();
}else{
    echo "Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
?>