<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include 'db.php';
$file = fopen("details.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }

fclose($file);
$un=$uname;
$sql="delete FROM user WHERE username='$un'";
if($conn->query($sql)==TRUE){
    header("location:signinpage.php?message=delete");
}else{
echo"error deleting record".$conn->error;
}
$conn->close();

?>
</body>
</html>