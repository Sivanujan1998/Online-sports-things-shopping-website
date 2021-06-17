<?php
$search=$_POST['search'];
include 'db.php';
$sql="select keywords from thing";
$result=$conn->query($sql);
if ($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
     
}
}else{
    header("location:signinpage.php?message=notfound");
}
?>