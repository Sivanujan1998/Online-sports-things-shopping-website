<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="_index.css">
</head>
<body>
<?php

$file = fopen("details.txt","r");

while(! feof($file))
  {
  $uname= fgets($file). "<br />";
  }

fclose($file);
?> 
    <div class="main">
    <nav>
      <a href="_index.php"><img src="photo/logo.png" class="logo" height="100" width="200"></a>
        <ul>
            <li><a href="_index.php"  style="background-color:goldenrod; opacity:0.9">Home</a></li>
            <li><a href="shop.php">Shop Now</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="help.php">help</a></li>
            </ul>
    </nav>
    
<div class="show" style="width:100%">

  <img class="mySlides" src="photo/show1.jpg">
  <img class="mySlides" src="photo/show2.jpg">
  <img class="mySlides" src="photo/show3.jpg">
  <div class="centered"><p style="color: gold; font-size:25px; font-weight:bolder"><?php echo "Hi.. Welcome ".$uname?></p></div>

</div>
</div><br><br>
   <?php

   ?>

    <script src="_index.js"></script>
</body>
</html>