<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include 'db.php';
$file = fopen("supplier.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }

fclose($file);


$sql="select thing.thingname,thing.username,thing.price,thing.modelno,pic.img from thing  INNER JOIN pic ON thing.modelno=pic.modelno  WHERE thing.category='Shuttle cock'";



$sql="delete FROM user WHERE username='$uname'";
if ($conn->query($sql)==true) {
    $sql1="DELETE FROM thing,pic USING thing INNER JOIN pic ON thing.modelno = pic.modelno Where thing.username='$uname'";
    if ($conn->query($sql1)==true) {
        header("location:signinpage.php?message=delete");
    } else {
        echo"error deleting record".$conn->error;
    }
}else{
echo"error deleting record".$conn->error;
}
   




$conn->close();

?>
</body>
</html>