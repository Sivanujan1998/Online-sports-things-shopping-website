<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="id01" class="modal">

                <form class="modal-content animate" action="userregistering.php" method="post" name="abc">
                    <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <label for="fname"><b>Firstname</b></label>
                    <input type="text" placeholder="Enter Firstname" name="fname" required>
                    <label for="lname"><b>Lastname</b></label>
                    <input type="text" placeholder="Enter Lastname" name="lname" required>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="password" required>
                    <label for="psw1"><b>Re-enter Password</b></label>
                    <input type="password" placeholder="Enter Password again" name="psw1" id="confirm_password" required>
                    <label for="email"><b>E-mail address</b></label> 
                    <input type="email" placeholder="Enter email address" name="email" required>
                    <label for="tel"><b>Tele-No</b></label>
                    <input type="text" placeholder="Enter Phone number" name="tel" maxlength="10"  required >

                    <label for="pro"><b>Province</b></label>
                    <select name="pro">
                        <option value="central Province">central Province</option>
                        <option value="Eastern Province">Eastern Province</option>
                        <option value="Northern Province">Northern Province</option>
                        <option value="Southern Province">Southern Province</option>
                        <option value="Western Province">Western Province</option>
                        <option value="North Western Province">North Western Province</option>
                        <option value="North Central Province">North Central Province</option>
                        <option value="Uva Province">Uva Province</option>
                        <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                    </select>

                    <label for="address"><b>Address</b></label>
                    <input type="text" placeholder="Enter Address" name="aname" required>

                        
                    <button type="submit" class="submit">Register</button>
                    

                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="reset" class="reset">Reset</button>
                    </div>
                </form>
                </div>

                <script src="userregisterpage.js"></script>
</body>
</html>