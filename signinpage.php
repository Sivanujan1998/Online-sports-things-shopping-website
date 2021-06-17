<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="signinpage.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>
<body>

<div class="container">
    <img src="photo/login.png"/>
    <?php
if(isset($_GET['message'])){
                if($_GET['message']=='notfound'){?>
            <p style="color: red; text-shadow:  2px 0 3px white, 12px 0 10px white; font-size:22px;">check your username and password again correctly!!</p>
            <?php
            }   elseif($_GET['message']=='primary'){?>
                <p style="color: red; text-shadow:  2px 0 3px white, 12px 0 10px white; font-size:26px;">username alredy used!! Try again!</p>
                <?php
                }   
                elseif($_GET['message']=='insert'){?>
                    <p style="color: white; text-shadow:  1px 0 3px orange, 1px 1px 1px yellow; font-size:26px;">Supplier registered sucessfully!!</p>
                    <?php
                    }  
                    elseif($_GET['message']=='insert'){?>
                        <p style="color: white; text-shadow:  1px 0 3px orange, 1px 1px 1px yellow; font-size:26px;">Supplier registered sucessfully!!</p>
                        <?php
                        } 
                elseif($_GET['message']=='delete'){?>
                    <p style="color: white; text-shadow:  1px 0 3px green, 1px 1px 1px yellow; font-size:26px;">your account deleted sucessfully!!</p>
                    <?php
                        }  
                        elseif($_GET['message']=='update'){?>
                            <p style="color: white; text-shadow:  1px 0 3px green, 1px 1px 1px yellow; font-size:26px;">your account update sucessfully!!</p>
                            <?php
                                }    
                                elseif($_GET['message']=='insertthing'){?>
                                    <p style="color: white; text-shadow:  1px 0 3px green, 1px 1px 1px yellow; font-size:26px;">your thing added sucessfully!!</p>
                                    <?php
                                        } 
                                        elseif($_GET['message']=='deletething'){?>
                                            <p style="color: white; text-shadow:  1px 0 3px green, 1px 1px 1px yellow; font-size:26px;">your thing Deleted sucessfully!!</p>
                                            <?php
                                                }
                                                elseif($_GET['message']=='updatething'){?>
                                                    <p style="color: white; text-shadow:  1px 0 3px green, 1px 1px 1px yellow; font-size:26px;">your thing updated sucessfully!!</p>
                                                    <?php
                                                        }elseif($_GET['message']=='wrongmodel'){?>
                                                            <p style="color: red; text-shadow:  2px 0 3px white, 12px 0 10px white; font-size:26px;"> Model number isn't match with your username!!</p>
                                                            <?php
                                                            }
                                                            elseif($_GET['message']=='alreadyin'){?>
                                                                <p style="color: red; text-shadow:  2px 0 3px white, 12px 0 10px white; font-size:26px;">Model number is already registered!</p>
                                                                <?php
                                                                }  
                                                                elseif($_GET['message']=='fill'){?>
                                                                    <p style="color: red; text-shadow:  2px 0 3px white, 12px 0 10px white; font-size:26px;">Please fill the fields first!!</p>
                                                                    <?php
                                                                    }   
    }
?>
		<form action="signinresult.php" method="POST"><center>
          <h3 style="font-weight:bolder; font-size:40px; color:goldenrod">Login Here..</h3>
			<div class="form-input">
				<input type="text" name="uname" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password"  name="pass" placeholder="password"/>
			</div>
            <input type="submit" type="submit" value="LOGIN" class="btn-login"/><br>
         <br>   <a class="back" style="font-size: 25px; color:white;" href="index.php" >back to Home</a>
       

		</form>
    </div>
    
</body>
</html>