<?php
session_start();
if(isset($_SESSION["admin"])){
    header("location:admintest.php");
}
include('db_connect.php');
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM admin1 WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $_SESSION['loggedin']=true;
        session_start();
        $_SESSION["admin"]="yes";
        header('Location:admintest.php');
        die();
    }else{
        $error_msg="Invaild username or password";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN LOGIN</title>
    </head>
    <body>
        <h2>ADMIN LOGIN</h2>
        <?php
        if(isset($error_msg)){
            echo'<p style="color:red;">'.$error_msg.'</p>';
        }
        ?>
        <form method="post">
            <label>USERNAME:</label>
            <input type="text" name="username" required><br><br>
            <label>PASSWORD:</label>
            <input type="password" name="password" required><br><br>
            <button type="submit" name="login">LOGIN</button>
            <p>Dont  Have Account?<a href="registerform.php">Register Now</a></p>
    </form>
    </body>
</html>
