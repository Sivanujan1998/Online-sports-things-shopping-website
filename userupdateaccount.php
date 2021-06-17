<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><div id="hidethis6" style="display:none; padding-top:120px" >
<?php
include 'db.php';


$file = fopen("details.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }

fclose($file);

$sql="select firstname,lastname,email,telno,province,address from user where username='$uname'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
       

?>
<form action="userupdate1account.php" method="POST">
    <table>
        <caption><h2>Edit your Informations</h2></caption>
    <tr>
    <td>First name</td>
    <td><input type="text" name="fname" value=<?php echo $row['firstname'];?>></td>
    </tr>
    <tr>
    <td>Last name</td>
    <td><input type="text" name="lname" value=<?php echo $row['lastname'];?>></td>
    </tr>
    <tr>
    <td>Email address</td>
    <td><input type="email" name="email" value=<?php echo $row['email'];?>></td>
    </tr>
    <tr>
    <td>Phone number</td>
    <td><input type="text" name="telno" value=<?php echo $row['telno'];?>></td>
    </tr>
    <tr>
    <td>Province</td>
    <td><select name="pro">
                        <option value="central Province">central Province</option>
                        <option value="Eastern Province">Eastern Province</option>
                        <option value="Northern Province">Northern Province</option>
                        <option value="Southern Province">Southern Province</option>
                        <option value="Western Province">Western Province</option>
                        <option value="North Western Province">North Western Province</option>
                        <option value="North Central Province">North Central Province</option>
                        <option value="Uva Province">Uva Province</option>
                        <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                    </select></td>
    </tr>
    <tr>
    <td>House address</td>
    <td><input type="text" name="aname" value=<?php echo $row['address'];?>></td>
    </tr>
    <tr>
    <td><input type="reset"></td>
    <td><input type="submit"></td>
    </tr>
    </table>
    </form>

    <?php
}
}
?></div>
</body>
</html>