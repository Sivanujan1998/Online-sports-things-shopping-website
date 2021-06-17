<?php
$mn=$_POST['mn'];
include 'db.php';

$file = fopen("supplier.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }


fclose($file);
$sql1="select modelno from thing WHERE username='$uname' and modelno='$mn'";
$result=$conn->query($sql1);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

        if($mn==$row["modelno"]){
            $sql="delete FROM thing WHERE modelno='$mn'";
            if($conn->query($sql)==TRUE){

                $sql="delete FROM pic WHERE modelno='$mn'";
                if($conn->query($sql)==TRUE){
                    header("location:signinpage.php?message=deletething");
                }else{
                echo"error deleting record".$conn->error;
                }
               
            }else{
            echo"error deleting record".$conn->error;
            }
            $conn->close();
        }
    }
}else{
    header("location:signinpage.php?message=wrongmodel");
}



?>