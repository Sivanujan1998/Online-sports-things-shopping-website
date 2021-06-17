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

$sql="select username,email,telno,address from user where username='$uname'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){ ?>
<div id="id01" class="modal">
    <center>
<form name="ordernow" onSubmit="return validateMyForm();" method="post" action="buy.php" >
    <div class="heading"> <h2>Order Now</h2></div>
<div class="full">
   
    <table>
    <tr>
        <td><p class="title">Pickup or Delivery?</p>
            <ul>
            <table>
                <tr>
               <td>Pickup</td>
               <td><input type="radio" name="pick" value="pick" onclick="toggle2();" required></td>
               </tr>
               <tr>
               <td>Delivery</td> 
               <td><input type="radio" name="pick" value="deli" onClick="toggle();" required></td>
            </tr>
              </table>
             </ul>
             <p class="title">Quantity</p>
            <input type="number" min=1 max=50 required>
        </td>
        <td ><p class="title">Customer Details</p>
        Name <br><br>
        <input type="text" size=55 name="n1" placeholder="John Smith" required value=<?php echo $row['username']; ?> ><br>
        Email <br><br>
        <input type="email" name="em" size=55 placeholder="example@example.com" required value=<?php echo $row['email']; ?>><br>
        Contact Number <br><br>
        <input type="tel" class="num" name="cn" size=55 placeholder="0412345678" pattern="[0-9]{10}" maxlength="10"  minlength="9" value=<?php echo $row['telno']; ?> required><br><br>
        </td>
        <tr>
            <td ><div id="hidethis" style="display:none;">
                <p class="title">Delivery Address</p>
        Address <br><br>
        <input type="text" name="a" size=55 placeholder="" value=<?php echo $row['address']; ?> required><br>
        Suburb <br><br>
        <input type="text" name="s" size=55 placeholder="" required><br>
       PostCode <br><br>
        <input type="text" name="p1"size=55 placeholder="1234" pattern="[0-9]{4}" maxlength="4"  minlength="4" required><br> 
        </div>
                </td>
                <td>
                    <p class="title">Billing Address</p>
                    <div id="hidethis1" style="display:none;">
                       Same as delivery address?
                        <ul>
                        <table>
                            <tr>
                           <td>Yes</td>
                           <td><input type="radio" name="same" value="yes" onClick="replace();" required><br></td>
                           </tr>
                           <tr>
                           <td>No</td> 
                           <td><input type="radio" name="same" value="no" onclick="rem();" required></td>
                        </tr>
                          </table>
                         </ul>
                    </div>
                  
                    Address <br><br>
                    <input type="text" name="ad" size=55 placeholder="" required><br>
                    Suburb <br><br>
                    <input type="text" name="su" size=55 placeholder="" required><br>
                    PostCode <br><br>
                    <input type="tel" class="num" name="po" size=55  placeholder="1234"  pattern="[0-9]{4}" maxlength="4"  minlength="4" required><br>
                </td>
           
    </tr>
    <tr>
        <td><br>
            <p class="title">Pay online or on pickup?</p>
            <ul>
            <table>
                <tr>
               <td>Pickup</td>
               <td><input type="radio" name="pay" value="pickup" onclick="toggle4();" required><br></td>
               </tr>
               <tr>
               <td>Online</td> 
               <td><input type="radio" name="pay" value="online" onclick="toggle3();" required></td>
            </tr>
              </table>
             </ul>
        </td>
        <td>
<div id="hidethis3" style="display:none;" >
    <br>
    <p class="title">Payment Information</p>
    Full Name<br>
    <input type="text" size=55 name="fn" placeholder="John Smith" required><br>
    Credit Card<br><br>
    <input type="text" size=55 name="card" placeholder="1234 5678 1234 5678"  pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}"   maxlength="19"  minlength="19" required><br>
    Expiry<br><br>
    <select style="width:390px;" required>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
        </select><br>
        <select style="width:390px;">
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            </select><br>
            CVV
            <br><br>
            <input type="tel" class="num" size=55 name="cvv" placeholder="123" pattern="[0-9]{3}" maxlength="3"  minlength="3" required>




        </div>
        </td>
        </tr>
        <tr><td>
            <input type="submit" class="submit"  value="Pay Now">
        </td>
            </tr>
            
</table>
<div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="reset" class="reset">Reset</button>
                    </div>


</div>
</form>
</center>
</div>
<?php }} ?>
</body>
</html>