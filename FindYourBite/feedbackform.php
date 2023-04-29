<?php
$rid = $_GET['id'];
//echo $rid;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <link rel="stylesheet" href="feedback.css">
  <script src="https://kit.fontawesome.com/19461f0c8d.js" crossorigin="anonymous"></script>
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
  <div class="container">
    <form method="post" action="feedback.php" id="myForm">
      <p class="heading">Did you like the Restaurant?<br>Please help us improve our recommendations by giving your valuable feedback on
        the restaurant you've selected.</p>
      <input type="hidden" name="rid" value=<?php echo $rid ?>>
      <div class="input-container">
        <input type="text" required="" name="name"/>
        <label>Full Name</label>
      </div>
      <div class="input-container">
        <input type="mail" required="" name="email"/>
        <label>Email</label>
      </div>
      <div class="rating">
        <div class="cont">
          <div class="stars">
            <input class="star star-5" id="star-5-2" type="radio" name="rating" value="5" />
            <label class="star star-5" for="star-5-2"></label>
            <input class="star star-4" id="star-4-2" type="radio" name="rating" value="4" />
            <label class="star star-4" for="star-4-2"></label>
            <input class="star star-3" id="star-3-2" type="radio" name="rating" value="3" />
            <label class="star star-3" for="star-3-2"></label>
            <input class="star star-2" id="star-2-2" type="radio" name="rating" value="2" />
            <label class="star star-2" for="star-2-2"></label>
            <input class="star star-1" id="star-1-2" type="radio" name="rating" value="1" />
            <label class="star star-1" for="star-1-2"></label>
            <div class="rev-box">
              <textarea class="review" col="30" name="comment"></textarea>
              <label class="review" for="review">Breif Review</label>
            </div>
          </div>
        </div>
      </div>
      <input type="submit" value="Submit" class="submitBtn">
    </form>
  </div>
</body>

</html>