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
    <link rel="stylesheet" href="newregister.css">
</head>
<body>
    <div class="container">
    <div class="formContainer">
    <form action="" method="post">
        <p class="h1">FIND YOUR BITE</p>
        <h3>Sign up</h3>
        
        <p class="text"> Hello Foodie! &nbsp;Join with us first to explore best restaurants in Pune.</p>
        <div class="input-group">
        <div class="toggle">
        <input type="radio" name="user_type" value="user" checked>User
        <input type="radio" name="user_type" value="admin">Admin
        </div>
        <input type="text" name="name" required placeholder="Enter Your Name" class="inputTag"><br>
        <input type="email" name="email" required placeholder="Enter Your Email" class="inputTag"><br>
        <input type="password" name="password" required placeholder="Enter Your Password" class="inputTag"><br>
        <input type="password" name="cpassword" required placeholder="Confirm Your password" class="inputTag" id="last"><br>
        </div>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="submit" name="submit" value="Sign Up" class="form-btn">
        <p class="underText">Already Have Account?<a href="newlogin.php"><b>Login Now</b></a></p>
    </form>
    </div>
    </div>
    </body>
</html>