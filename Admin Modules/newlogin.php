<?php
@include'db_connect.php';
session_start();
if(isset($_POST['submit'])){
    // $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=md5($_POST['password']);
    // $cpass=md5($_POST['cpassword']);
    // $user_type=($_POST['user_type']);
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
        header('location:newpratice.php');
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
</head>
<body>
    <form action="" method="post">
        <h3>Login Now</h3>
        <?php   
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="email" name="email" required placeholder="Enter Your Email"><br><br>
        <input type="password" name="password" required placeholder="Enter Your Password"><br><br>
        <select name="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>
        <input type="submit" name="submit" value="Login Now" class="form-btn"><br><br>

        <p>Dont  Have Account?<a href="newregister.php">Register Now</a></p>
    </form>
    </body>
</html>