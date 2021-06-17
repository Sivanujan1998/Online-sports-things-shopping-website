<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="signinresult.css">
</head>
<body>
<?php 
include 'db.php';

$uname=$_POST['uname'];
$pass=$_POST['pass'];
if($uname==""  ||  $pass==""){
    header("location:signinpage.php?message=fill");
}

$sql="select role from user WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);
if ($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
    $role=$row['role'];
}
}else{
    header("location:signinpage.php?message=notfound");
}

switch($role){
        case "admin":
      include 'adminwork.php';
     include 'footer.php';
        break;

    case "supplier":
   include 'supplierwork.php';
   include 'footer.php';
        break;

    case "user":  
       include 'userwork.php';
       include 'footer.php';
        break;

    
}

?>
<script src="signinresult.js"></script>
</body>
</html>