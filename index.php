
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="main">
    <nav>
        <a href="index.php"><img src="photo/logo.png" class="logo" height="100" width="200"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <!--li><a href="shop.php">Shop Now</a></li-->
            <li><a href="blog.php">Blog</a></li>
            <li><a href="help.php">help</a></li>
            </ul>
    </nav>
    <div class="show" style="width:100%">
  <img class="mySlides" src="photo/show1.jpg">
  <img class="mySlides" src="photo/show2.jpg">
  <img class="mySlides" src="photo/show3.jpg">
</div>
</div><br>

<div style="overflow-y:auto;">
<center>
    <form action="signinpage.php" method="POST">
    <input type="submit" class="signin" value="Signin">
    </form><br><button class="register" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register Here</button>
</center><?php
         include 'userregisterpage.php';
         ?><center>
         <?php

if(isset($_GET['message'])){
              if($_GET['message']=='primary'){?>
                <p style="color: red; text-shadow:  2px 0 3px white, 12px 0 10px white; font-size:26px;">username already used!! Try again!</p>
                <?php
                }   
                elseif($_GET['message']=='insert1'){?>
                    <p style="color: white; text-shadow:  1px 0 3px orange, 1px 1px 1px yellow; font-size:26px;">user registered sucessfully!!</p>
                    <?php
                    }   
    }
?>
</center>

<br><br><br><br><br><br>
<center><img src="photo/detail.jpg" style="float:middle; z-index:5;"></center>
<p  style="font-family:Georgia, 'Times New Roman', Times, serif; background-color:gray; color:white; font-size:20px;  padding:20px 20px 20px 20px;">Are you looking for badminton rackets, footwear, badminton equipment, supplies and performance apparel for men, women and children, as well as a wide assortment of other outstanding badminton products? Do you want full access to an established, trusted world-class collection of badminton racket bags, clothing and sport accessories? Do you want a 100 percent, money-back guarantee on your authentic, professional grade badminton racquet and FREE shipping to most destinations in USA & Canada? Then you have come to the right place! Shop from the official online badminton racket and supply store for Li-Ning badminton equipment in the United States and Canada. We offer you Li-Ning badminton rackets, badminton shoes, badminton shuttles, accessories and more from an Olympic-caliber brand rising in popularity among club players and professionals, now available through a growing network of specialty retailers and directly from our Sham badminton store.</p>

</div>

<?php
   include 'footer.php';
   ?>
    <script src="index.js"></script>
</body>
</html>
