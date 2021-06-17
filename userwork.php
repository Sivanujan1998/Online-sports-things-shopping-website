<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="userwork.css">
</head>
<body>
<?php
$sql="select * from user WHERE username='$uname' AND password='$pass'";
        $result=$conn->query($sql);
        if ($result->num_rows>0) {
            while ($row=$result->fetch_assoc()) {
                $uname=$row['username'];
                $ename=$row['email'];
                $tname=$row['telno'];
                $pname=$row['province'];

                $file = fopen("details.txt", "w");
                fwrite($file, $row["username"]);
                fclose($file);
                include '_index.php'; ?>
                <center>
<table><tr>
    <td style="padding: 0 25px 0 25px;"><form method="POST" action="userdelaccount.php">
                <input type="submit" class="use" value="delete account" >
            </form></td>
    <td style="padding: 0 25px 0 25px;"> 
                <button type="submit" onclick="toggle6();" class="use">Modify account</button>
               
           </td>
    <td style="padding: 0 25px 0 25px;">   <button class="use"  onclick="alert('Successfuly logout your Account..');location.href='index.php';">Logout account</button></td>
    </tr>
    <tr>
        <td></td>
        <td> <?php include 'userupdateaccount.php';?></td>
        <td></td>
    </tr>
</table>
                </center>
         <div style="text-align:center;">
             <form method="podt" action="search.php">
                 <input type="textox" name="search" size="40">
                 <input type="submit" value="Search">
             </form>
            </div>
         <div style="text-align: center;"><h2>
             <?php
 echo "<br><br><br>Username:$uname<br>";
 echo "Emailaddress:$ename<br>";
 echo "Tel- NO: $tname<br>";
 echo "Province:$pname<br>";
 


?>
</h2>
         </div>
<?php
            }
        }else{
            header("location:signinpage.php?message=notfound");
        }?>
        <script>
   function toggle6(){
    if( document.getElementById("hidethis6").style.display=='none'){
        document.getElementById("hidethis6").style.display = '';
       
      }else{
        document.getElementById("hidethis6").style.display = 'none';
      
      }
}
    </script>
</body>
</html>