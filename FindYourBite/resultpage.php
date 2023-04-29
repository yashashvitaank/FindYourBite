<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="result.css">
</head>

<body>
<header>
        <nav class="nav">
          <div class="title">
            <p>find your bite</p>
          </div>
          <ul>
            <li class="navL"><a href="practice.html">Home</a></li>
            <li class="navL"><a href="aboutUs.html">About Us</a></li>
            <li class="navL"><a href="logout.php">Log Out</a></li>
          </ul>
        </nav>
      </header>
</body>

</html>
<?php

$area = $_POST['area'];
$cusinise = $_POST['cuisine'];
$type = $_POST['type'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "findyourbite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors in the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM rest WHERE area='$area' and ctype='$cusinise' and type='$type'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    ?>
    <div class="main">
        <p class="text">Here are some best recommended restaurants according to your specifications!<br>
        Hope this recommendation gives you an exotic experience. Bon Appétit.</p>
        <table id="rTable">
            <tr>
                <th>Area</th>
                <th>Restaurant Name</th>
                <th>Cuisine Type</th>
                <th>Type</th>
                <th>Rating</th>
                <th>Phone Number</th>
                <th>Maps</th>
                <th>Give Us Your Review</th>
            </tr>
            <?php
             while($row=$result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['area'];?></td>
                <td><?php echo $row['resname'];?></td>
                <td><?php echo $row['ctype'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><?php echo $row['rating'];?></td>
                <td><div class="number digits"><?php echo $row['connumber'];?></div>
                <a href="tel: <?php echo $row["connumber"]; ?> " class="phone-number">Call Now</a></td>
                <td><a href='<?php echo  $row["mlink"]?>' target='_blank'>View on Google Maps</a></td>
                <td><a href='feedbackform.php?id="<?php echo $row['rid']?>"'> Give Review</a></td>
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