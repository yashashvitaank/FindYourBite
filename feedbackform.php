<?php
$rid=$_GET['id'];
//echo $rid;
?>
<form method="post" action="feedback.php">
<input type="hidden"  name="rid" value=<?php echo $rid?>>
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Enter Your Email:</label>
    <input type="text" id="email" name="email" required><br>
    <label for="rating">Rating:</label>
    <select id="rating" name="rating">
        <option value="5">5 stars</option>
        <option value="4">4 stars</option>
        <option value="3">3 stars</option>
        <option value="2">2 stars</option>
        <option value="1">1 stars</option>
        </select><br>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="5" required></textarea><br>
        <button type="submit">submit</button>
        </form>