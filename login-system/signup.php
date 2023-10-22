<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="signup-style.css"/>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<title>Register</title>
</head>
<body>
    <div class = "container">
        <div class = "forms">
            <!-- Registration Form-->
            <div class = "form register">
                <span class = "title">Register</span>

                <form action="signup-ss.php" method = "post">

                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
                    <div class = "input-field">
                        <input type="text" placeholder="User name" class="form-control"  name = 'uname' required>    
                        <i class = "uil uil-user"></i>
                    </div><?php }?>

                    <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
                    <div class = "input-field">
                        <input type="text" placeholder="Name" name="name" required>
                        <i class = "uil uil-user"></i>
                    </div><?php }?>


                    <div class = "input-field">
                        <input type="password" class = "password" placeholder="Password" name = 'password'
                         required>
                        <i class = "uil uil-eye-slash showHidePw"></i>
                        <i class = "uil uil-lock icon"></i>
                    </div> 
                    <div class = "input-fields">
                    <div class = "input-field">
                        <input type="password" class = "password" placeholder=" Repeat Password" name="repassword"
                         required>
                        <i class = "uil uil-eye-slash showHidePw"></i>
                        <i class = "uil uil-lock icon"></i>
                    </div>
                    <div class = "checkbox-password">
                    </div>  

                    <div class = "input-field button">
                        <input type="submit" name = 'submit' value = "Create an account" class = "log-now">
                    </div>
                    </div>
                </form>

                <div class = "signup-link">
                    <span class = "text">Already have an account?
                        <a href = "./index.php" class = "Login-link">Login Now</a>
                    </span>     
                </div>   
            </div>
        </div>
    </div>
    
<script src="Loginjs.js"></script>
</body>
</html>