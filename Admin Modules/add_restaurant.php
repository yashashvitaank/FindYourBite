<?php include 'adminheader.html';?>
<!DOCTYPE html>
<!-- html form to add restaurant  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Restauant</title>
    
</head>
<body>
    <form method="post" action="addrestaurant.php">
    <label for="area">Select Area:</label>
    <select id="area" name="area">
    <option value="Wakad">Wakad</option>
    <option value="Camp">Camp</option>
    <option value="Baner">Baner</option>
    <option value="Koregaon Park">Koregaon Park</option>
    <option value="FC road">FC road</option>
    </select><br><br>
    <label for="name">Enter Restauant name:</label>
    <input type="text" name="name" placeholder="Restaurant Name"><br><br> 
    <label for="cusinise">Select Cusinise:</label>
    <select id="cusinise" name="cusinise">
    <option value="North Indian">North Indian</option>
    <option value="South Indian">South Indian</option>
    <option value="Mexican">Mexican</option>
    <option value="Italian">Italian</option>
    <option value="Multicuisine">Multicuisine</option>
     </select><br><br>
     <label for="type">Select type:</label>
     <select id="type" name="type">
        <option value="Veg">Veg</option>
    <option value="Non Veg">Non Veg</option>
    </select><br><br>
    <label for="rating">Enter Your Rating:</label>
    <input type="text" name="rating" placeholder="Enter Rating"><br><br>
    <label for="phone">Enter Your Phone Number</label>
    <input type="phone" name="phone" placeholder="Enter Phone Number"><br><br>
    <label for="link">Paste your map link:</label>
    <input type="text" name="map" placeholder="Enter Link"><br><br>
    <input type="submit" name="submit" value="add restuarnt"><br><br>
    </form>
    </body>
</html>