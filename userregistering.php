<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include 'db.php';
    $uname=$_POST['uname'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $psw=$_POST['psw'];
    $psw1=$_POST['psw1'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $pro=$_POST['pro'];
    $aname=$_POST['aname'];
    $role="user";
    echo $aname;
   
    $sql1="select username from user";
    $result=$conn->query($sql1);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            if($uname==$row["username"]){
                header("location:index.php?message=primary");
            }
        }
    }

$sql="insert into user(username,firstname,lastname,password,email,telno,province,address,role)values('$uname','$fname','$lname','$psw','$email','$tel','$pro','$aname','$role')";
    if($conn->query($sql)==TRUE){
        header("location:index.php?message=insert1");
        
    }else{
     echo"error:".$sql."<br>".$conn->error;
    }
  

?>
</body>
</html>