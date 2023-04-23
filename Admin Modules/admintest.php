<?php include 'adminheader.html';?>
<a href="add_restaurant.php" class="btn btn-primary">Add Restaurant</a><br><br>
<?php
session_start();
if(!isset($_SESSION["admin"])){
    header("location:newlogin.php");
}
require_once "db_connect.php";
$sql="SELECT *FROM rest";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "<table border=3>";
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
echo "<td><a href='reviewdisplay.php?id=".$row['rid']."'>View Review</a></td>";
echo "<td><a class='btn btn-primary' href='deleterestaurant.php?id=".$row['rid']."'>Delete Restaurant</a></td>";
echo"</tr>";
}
echo"</table>";
}else{
    echo"no restuarnts found";
}
?>
<!-- HTML code for logout button -->
<form action="logout.php" method="post">
    <button type="submit" name="logout">Logout</button>
</form>

