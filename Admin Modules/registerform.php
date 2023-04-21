<?php
session_start();
if(isset($_SESSION["admin"])){
    header("location:admintest.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
</head>
<body>
    <h2>Admin Registration</h2>
        <form method="POST">
         <?php
         if(isset($error)){
            foreach($error as $error){
                echo ".$error.";
            };
         };   
         ?>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br><br>
        <input type="submit" name="submit" value="Register"><br><br>
        <p>Already Have Account?<a href="login.php">Login Now</a></p>
    </form>

    <?php
        // Database connection code
        include('db_connect.php');

        if(isset($_POST['submit'])){
            // Fetching admin data from form
            $name = $_POST['name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $select="SELECT * FROM admin1 WHERE email='$email' && password='$password'";
            $result= mysqli_query($conn,$select);
            if(mysqli_num_rows($result)>0){
                echo'user already Exist!'; 
                 // Checking if passwords match
            }else{
                if($password !== $confirm_password){
                    echo'Password and Confirm Password do not match.';
                }else {
                    $insert="INSERT INTO admin1 (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
                    mysqli_query($conn,$insert);
                    header('location:login.php');
                }
            }
        };    
    
    ?>
</body>
</html>
