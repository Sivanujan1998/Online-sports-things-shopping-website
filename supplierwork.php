<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="supplierwork.css">
</head>
<body>
    <?php
$sql="select * from user WHERE username='$uname' AND password='$pass'";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        while ($row=$result->fetch_assoc()) {
            $uname=$row["username"];
            $ename=$row["email"];
            $tname=$row["telno"];
            $pname=$row["province"];
            $sname=$row["Shopname"];
            ?>
            <div class="a1">
            Welcome Mr.<?php echo $row["username"];?>(Supplier)<br>
        </div><?php
        $file = fopen("supplier.txt","w");
        fwrite($file,$row["username"]);
        fclose($file);
        ?><br><center>
<table >
    <tr>
        <td style="padding: 0 25px 0 25px;"><button class="add" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add a thing</button>
         
         <?php
          include 'thingadd.php'; ?></td>
          <td style="padding: 0 25px 0 25px;">    <button class="add" onclick="toggle3();">Delete a thing</button><?php include 'thingdel.php';?></td>
          <td style="padding: 0 25px 0 25px;"><button class="add"   onclick="toggle2();" >Update a thing</button><?php include 'thingupdate.php';?></td>
    </tr>
</table></center>
<br><center>
<table>
    <tr>
<td style="padding: 0 25px 0 25px;">
 <form method="POST" action="supdelaccount.php"><br>
                <input type="submit" class="add1" value="delete account" >
            </form>
        </td>
            <td style="padding: 0 25px 0 25px;"> 
   
            <button class="add1"   onclick="toggle1();" > modify account</button>
            <?php include 'supupdateaccount.php'?>
            </td>
            
    </tr>
</table>
<button class="add1"  onclick="alert('Successfuly logout your Account..');location.href='signinpage.php';">Logout account</button>
          
           
           
           
            <div class="detail">
        <?php
        echo "<br>supplier name:$uname<br>";
         echo "emailaddress:$ename<br>";
         echo "Tel- NO:$tname<br>";
         echo "Shopname:$sname<br>";
         echo "Province:$pname<br><br>";

?></div></center><?php

    }
    }else{
        header("location:signinpage.php?message=notfound");
    }?>
    <script src="supplierwork.js">

    </script>
</body>
</html>

