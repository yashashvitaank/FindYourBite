<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="admin.css">
    <script src="deleteRes.js"></script>
</head>

<body>
<header>
        <nav class="nav">
          <div class="title">
            <p>find your bite</p>
          </div>
          <ul>
            <li class="navL"><a href="admintest.php">Home</a></li>
            <li class="navL"><a href="add_restaurant.html">Add Restaurant</a></li>
            <li class="navL"><a href="logout.php">Log Out</a></li>
          </ul>
        </nav>
      </header>
</body>

</html>

<?php
session_start();
if(!isset($_SESSION["admin"])){
    header("location:newlogin.php");
}
require_once "db_connect.php";
$sql="SELECT *FROM rest";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    ?>
    <div class="main">
        <p class="text">Detailed table of restaurants present in this site</p>
        <table id="rTable">
            <tr>
                <th>Area</th>
                <th>Restaurant Name</th>
                <th>Cuisine Type</th>
                <th>Type</th>
                <th>Contact Number</th>
                <th>Check Reviews</th>
                <th>Delete</th>
            </tr>
            <?php
             while($row=$result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['area'];?></td>
                <td><?php echo $row['resname'];?></td>
                <td><?php echo $row['ctype'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><div class="number digits"><?php echo $row['connumber'];?></div>
                <a href="tel: <?php echo $row["connumber"]; ?> " class="phone-number">Call Now</a></td>
                <td><a href='reviewdisplay.php?id="<?php echo $row['rid']?>"'>View Review</a></td>
                <td><a onclick="deleteRes(<?php echo $row['rid']?>)"><button class='delete'>Delete Restaurant</button></a></td>
            </tr>
    </div>
    <?php
            }
            echo "</table>";
} else {
    ?>
    <div class="noResult">
        <img src="noresult.png" alt="no result">
        <p>No Result Found!<br>
        Try searching for other Cuisine or Area <a href="practice.html">Click Here</a></p>
    </div>
    <?php
}
$conn->close();
?>