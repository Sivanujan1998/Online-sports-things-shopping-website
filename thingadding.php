<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include 'db.php';
    
    $tname=$_POST['tname'];
    $mname=$_POST['mname'];
    $cat=$_POST['cat'];
    $pname=$_POST['pname'];
    $img=$_POST['img'];
    $kname=$_POST['kname'];
  
    $file = fopen("supplier.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }

fclose($file);
 

$sql1="select modelno from thing";
$result=$conn->query($sql1);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        if($mname==$row["modelno"]){
            header("location:signinpage.php?message=alreadyin");
        }
    }
}


$sql="insert into thing(username,thingname,modelno,category,price,keywords)values('$uname','$tname','$mname','$cat','$pname','$kname')";
    if($conn->query($sql)==TRUE){
        
$sql="insert into pic(img,modelno) values('$img','$mname')";
if($conn->query($sql)==TRUE){
    
    header("location:signinpage.php?message=insertthing");
    
}else{
 echo"error:".$sql."<br>".$conn->error;
}

      
        
    }else{
     echo"error:".$sql."<br>".$conn->error;
    }
  

?>
</body>
</html>