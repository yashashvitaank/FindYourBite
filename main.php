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
$sql="SELECT * FROM rest WHERE area='$area' and ctype='$cusinise' and type='$type'";
$result=$conn->query($sql);
if($result->num_rows >0)
{
    echo "<table border=5>";
     echo "<tr><th>Area</th><th>Restaurant Name</th><th>Cuisine Type</th><th>Veg/Non Veg</th><th>Rating</th><th>Phone Number</th><th>Maps</th><th>Give as Review</th></tr>";

    while($row=$result->fetch_assoc()){
        echo "<tr>";
echo "<td>".$row["area"]. "</td>";
echo "<td>" .$row["resname"]."</td>";
echo "<td>".$row["ctype"]. "</td>";
echo "<td>".$row["type"]. "</td>";
echo "<td>".$row["rating"]. "</td>";
echo '<td>';
echo '<div class="phone-number">'.$row['connumber'].'</div>';
'</td>';
echo '<a href="tel:'.$row["connumber"]. '" class="call-now">Call Now</a>';
echo "<td><a href='" . $row["mlink"] . "' target='_blank'>View on Google Maps</a></td>";
echo "<td><a href='feedbackform.php?id=".$row['rid']."'>Review</a></td>";
echo "</tr>";
   
    
  }
}else{
    echo"No result Found";
}
$conn->close();
?>