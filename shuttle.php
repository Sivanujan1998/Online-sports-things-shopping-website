<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="shuttle.css">
</head>
<body>
<div class="main">
 
   
 <?php 
   $x=0;
 include 'db.php';
 $sql="select thing.thingname,thing.username,thing.price,thing.modelno,pic.img from thing  INNER JOIN pic ON thing.modelno=pic.modelno  WHERE thing.category='Shuttle cock'";
 $result=$conn->query($sql);

 if ($result->num_rows>0) {
     while ($row=$result->fetch_assoc()) {
         
         if($x==4){
             echo "<br>";
             $x=0;
         }
         
         ?>
<div class="box">


         <div class="box-img">
             <img src=<?php echo $row['img'];?>>
         </div>

         <div class="content">
         <h3><?php echo $row['thingname']?></h3> 
             <p><?php echo $row['modelno'] ?><br><?php echo  $row['price']?>
         <br><?php echo "Supplier name-".$row['username']?></p>
         </div>
         <div class="button">
             <li><a class="b1"  href="buy.php">Buy Now</a></li>
             <li><a class="b2" href="fav.php">Add Favourite</a></li>
         </div>
     </div>
     <?php
     $x=$x+1;
    
 }
 }?>


</div>

<?php
   include 'footer.php';
   ?>
</body>
</html>