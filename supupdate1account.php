<?php

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$telno=$_POST["telno"];
$pro=$_POST["pro"];
$sname=$_POST["sname"];


$file = fopen("supplier.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }

fclose($file);

include 'db.php';
$sql="UPDATE user SET firstname='$fname',lastname='$lname',email='$email',telno='$telno',province='$pro',shopname='$sname' WHERE username='$uname'";
if($conn->query($sql)==TRUE){
    header("location:signinpage.php?message=update");
}else{
    echo"error".$sql."<br>".$conn->error;
}
$conn->close();
?>