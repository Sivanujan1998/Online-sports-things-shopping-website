<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="adminwork.css">
</head>
<body>
<?php

$sql="select * from user WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);
if ($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
          $file = fopen("admin.txt","w");
        fwrite($file,$row["username"]);
        fclose($file);
        $uname= $row["username"];
        $ename= $row["email"];
        $tname= $row["telno"];
        $pname= $row["province"];
        ?>
<div class="a1">
    Welcome Mr.<?php echo $row["username"];?>(Admin)
</div><br><center>
<button class="sup" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register a supplier</button>
</center>
    <?php
     include 'supplierregisterpage.php';
     ?><center><br><br>
<button class="sub" onclick="toggle3()">Modify account</button><br><br>
<?php include 'adminupdateaccount.php'?>
<br>
<button class="log"  onclick="alert('Successfuly logout your Account..');location.href='index.php';">Logout account</button><br>
<div class="detail">
     <?php
     echo "<br>Username:$uname<br>";
     echo "Emailaddress:$ename<br>";
     echo "Tel- NO: $tname<br>";
     echo "Province:$pname<br>";?>
     </div>
</center>    <br>
     <?php
}
}else{
    header("location:signinpage.php?message=notfound");
}
?>
<script>
   function toggle3(){
    if( document.getElementById("hidethis3").style.display=='none'){
        document.getElementById("hidethis3").style.display = '';
       
      }else{
        document.getElementById("hidethis3").style.display = 'none';
      
      }
}
    </script>
</body>
</html>