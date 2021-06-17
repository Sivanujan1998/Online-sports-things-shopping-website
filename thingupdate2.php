<?php

$tname=$_POST["tname"];
$mname=$_POST["mname"];
$cat=$_POST["cat"];

$pname=$_POST["pname"];
$kname=$_POST["kname"];
$img=$_POST["img"];


include 'db.php';
$sql="UPDATE thing SET thingname='$tname',modelno='$mname',category='$cat',price='$pname',keywords='$kname' WHERE modelno='$mn'";
if($conn->query($sql)==TRUE){
  $sql="UPDATE pic SET img='$img',modelno='$mname' WHERE modelno='$mn'";
if($conn->query($sql)==TRUE){
    header("location:signinpage.php?message=updatething");
}else{
    echo"error".$sql."<br>".$conn->error;
}

}else{
    echo"error".$sql."<br>".$conn->error;
}
$conn->close();
?>