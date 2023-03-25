<?php
$area=$_POST['area'];
$cusinise=$_POST['cusinise'];
$type=$_POST['type'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "findyourbite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors in the database connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM res WHERE area='$area' and ctype='$cusinise' and type='$type'";
$result=$conn->query($sql);
if($result->num_rows >0)
{
    echo "<table border=5>";
     echo "<tr><th>Area</th><th>Restaurant Name</th><th>Cuisine Type</th><th>Veg/Non Veg</th><th>Rating</th><th>Phone Number</th></tr>";

    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["area"]. "</td><td>" .$row["resname"]."</td><td>".$row["ctype"]. "</td><td>".$row["type"]. "</td><td>".$row["rating"]. "</td><td>".$row["connumber"]. "</td></tr>";
    }
}else{
    echo"No result Found";
}
$conn->close();
?>