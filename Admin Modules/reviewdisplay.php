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
    echo"<table border=2>";
    echo"<tr><th>Reviewer Name</th><th>Restaurant Name</th><th>Rating</th><th>Comment</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['resname']."</td>";
        echo"<td>".$row['rating']."</td>";
        echo"<td>".$row['comment']."</td>";
        echo"</tr>";
    }
    echo"</table>";
 }else{
    echo"No review Found";
 }
 ?>