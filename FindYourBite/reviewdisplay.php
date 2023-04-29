<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="admin.css">
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
$rid=$_GET['id'];
//echo $rid;
?>
<?php
include_once('db_connect.php');
$sql="SELECT rest.resname,feedback.name,feedback.rating,feedback.comment FROM feedback
JOIN rest ON feedback.rid=rest.rid WHERE feedback.rid=$rid";
$result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
   ?>
   <div class="main">
       <p class="text">Check out the Reviews given by the user on selected restaurant.</p>
       <table id="rTable">
           <tr>
               <th>Restuarant Name</th>
               <th>User Name</th>
               <th>Rating Given</th>
               <th>Comments</th>
           </tr>
           <?php
            while($row=$result->fetch_assoc()){
           ?>
           <tr>
               <td><?php echo $row['resname'];?></td>
               <td><?php echo $row['name'];?></td>
               <td><?php echo $row['rating'];?></td>
               <td><?php echo $row['comment'];?></td>
           </tr>
   </div>
   <?php
           }
           echo "</table>";
           echo"<a href='admintest.php'><button class='back'>Go Back</button></a>";
} else {
   ?>
   <div class="noResult">
       <img src="noresult.png" alt="no result">
       <p>No Reviews yet!!!</p>
       
   </div>
   <?php
}
$conn->close();
?>