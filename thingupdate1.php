<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="signinresult.css">
    <link rel="stylesheet" type="text/css" href="thingupdate1.css">
    
</head>
<body><?php
$file = fopen("supplier.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }

fclose($file);

?>

<div class="a1">
    Welcome Mr.<?php echo $uname;?>(Supplier)
</div>
<?php
include 'db.php';
$mn=$_POST['mn'];


$file = fopen("supplier.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }

fclose($file);



           
          
            
            $sql="select thingname,modelno,category,price,keywords from thing where modelno='$mn' AND username='$uname'";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while ($row=$result->fetch_assoc()) {
                    ?><center>
            <form action="thingupdate2.php" method="POST">
                <table>
                    <caption><h2>Edit your Thing details</h2></caption>
                <tr>
                <td>Thing name</td>
                <td><input type="text" name="tname" value=<?php echo $row['thingname']; ?>></td>
                </tr>
                <tr>
                <td>Model No</td>
                <td><input type="text" name="mname" value=<?php echo $row['modelno']; ?>></td>
                </tr>
                <tr>
                <td>Category</td>
                <td> <select name="cat">
                                    <option value="Racket">Racket</option>
                                    <option value="Shuttle cock">Shuttle Cock</option>
                                    <option value="Shoe">Shoe</option>
                                   </select>
            </td>
                </tr>
                <tr>
                <td>Price</td>
                <td><input type="text" name="pname" value=<?php echo $row['price']; ?>></td>
                </tr>
                <tr>
                <td>key words</td>
                <td><input type="text" name="kname" value=<?php echo $row['keywords']; ?>></td>
                </tr>
                <tr>
                <td>image src</td>
                <td><input type="text" name="img" value=<?php
            $sql="select img from pic where modelno='$mn'";
                    $result=$conn->query($sql);
                    if ($result->num_rows>0) {
                        while ($row=$result->fetch_assoc()) {
                            echo $row['img'];
                        }
                    } ?>></td>
                </tr>
               
                <tr>
                <td><input type="reset"></td>
                <td><input type="submit"></td>
                </tr>
                </table>
                </form></center>
            
                <?php
                }
        }else{
            header("location:signinpage.php?message=wrongmodel");
        }
    


include 'footer.php';
?>
</body>
</html>