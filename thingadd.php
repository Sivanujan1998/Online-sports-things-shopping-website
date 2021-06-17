<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="id01" class="modal"><?php
$file = fopen("supplier.txt","r");

while(! feof($file))
  {
  $uname= fgets($file);
  }

fclose($file);?>
                <form class="modal-content animate" action="thingadding.php" method="post" name="abc">
                    <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required value="<?php echo $uname ?>" readonly>
                    <label for="tname"><b>Thing brand name</b></label>
                    <input type="text" placeholder="Enter thingname" name="tname" required>
                    <label for="mname"><b>ModelNumber</b></label>
                    <input type="text" placeholder="Enter Model Number" name="mname" required>
               
                    <label for="cat"><b>Which Item do you have</b></label>
                    <select name="cat">
                        <option value="Racket">Racket</option>
                        <option value="Shuttle cock">Shuttle Cock</option>
                        <option value="Shoe">Shoe</option>
                       </select>

                    <label for="pname"><b>Price</b></label>
                    <input type="text" placeholder="Enter Price" name="pname" required>
                    <label for="img"><b>Add thing image</b></label>
                    <input type="text" placeholder="enter the image src" name="img" required>
                    <label for="kname"><b>Add key words</b></label>
                    <input type="text" placeholder="enter the key words" name="kname" required>
                        
                        
                    <button type="submit" class="submit">Add thing</button>
                    

                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="reset" class="reset">Reset</button>
                    </div>
                </form>
                </div>

                <script src="thingadd.js"></script>
</body>
</html>