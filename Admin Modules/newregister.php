<?php
@include'db_connect.php';
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
    $user_type=($_POST['user_type']);
    $select="SELECT * FROM user_form WHERE email='$email'&& password='$pass'";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)> 0){
        $error[]='user already Exist!';
    }else{
        if($pass !=$cpass){
            $error[]='Password not matched';  
        }else{
            $insert="INSERT INTO user_form(name,email,password,user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn,$insert);
            header('location:newlogin.php');
        }
    }
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
</head>
<body>
    <form action="" method="post">
        <h3>Register Now</h3>
        <?php   
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="name" required placeholder="Enter Your Name"><br><br>
        <input type="email" name="email" required placeholder="Enter Your Email"><br><br>
        <input type="password" name="password" required placeholder="Enter Your Password"><br><br>
        <input type="password" name="cpassword" required placeholder="Confirm Your password"><br><br>
        <select name="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>
        <input type="submit" name="submit" value="Register Now" class="form-btn"><br><br>
        <p>Already Have Account?<a href="newlogin.php">Login Now</a></p>
    </form>
    </body>
</html>