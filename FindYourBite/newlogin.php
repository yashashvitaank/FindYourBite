<?php
@include'db_connect.php';
session_start();
if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=md5($_POST['password']);
    $select="SELECT * FROM user_form WHERE email='$email'&& password='$pass'";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)> 0){
       $row=mysqli_fetch_array($result);
       if($row['user_type']=='admin'){
        $_SESSION["admin"]="yes";
        header('location:admintest.php');
        die();
       }elseif($row['user_type']=='user'){
        $_SESSION["user"]="yes";
        header('location:practice.html');
        die();
       }
    }else{
        $error[]='invaild email and password';
    }
};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="newregister.css">
</head>
<body>
<div class="container">
    <div class="formContainer2">
    <form action="" method="post">
        <p class="h1">FIND YOUR BITE</p>
        <h3>Sign In</h3>
        
        <p class="text"> Welcome Back Foodie! &nbsp;To continue the experience please Sign In first.</p>
        <div class="input-group">
        <div class="toggle">
        <!-- <input type="radio" name="user_type" value="user" checked>User
        <input type="radio" name="user_type" value="admin">Admin -->
        </div>
        <input type="email" name="email" required placeholder="Enter Your Email" class="inputTag"><br>
        <input type="password" name="password" required placeholder="Enter Your Password" class="inputTag" id="last"><br>
        </div>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="submit" name="submit" value="Sign In" class="form-btn">
        <p class="underText">Dont have an account?<a href="newregister.php"><b>Sign Up Now</b></a></p>
    </form>
    </div>
    </div>
    </body>
</html>