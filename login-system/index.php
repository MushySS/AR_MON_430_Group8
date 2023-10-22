<!DOCTYPE html>
<head>
<title>Login</title>
<link rel="stylesheet" href="login-style.css"/>
</head>
<body>
        <div class = "container" >
                <div class = "forms">
                    <div class = "form login">
                        <span class = "title">Login</span>

                        <form action="login.php" method="POST">

                            <?php 
                            if (isset($_GET['error'])) { ?>
                                <p class = "error"><?php echo $_GET['error']; ?></p>

                            <?php } ?>

                            <div class = "input-field">
                                <input type="text" placeholder = "Enter your username" name = "uname" required>
                                <i class = "uil uil-envelope icon"></i>
                            </div>
                            <div class = "input-field">
                                <input type="password" class = "password" placeholder = "Enter your password" name = "password" required>
                                <i class = "uil uil-eye-slash showHidePw"></i>
                                <i class = "uil uil-lock icon"></i>
                            </div>
                            <div class = "checkbox-password">
                                <a href = "#" class = "Forgot">Forgot Password</a>
                            </div>
                            
                            <div class = "input-field button">
                                <input type="submit" value = "Login Now" name = "Logincre" class = "log-now">
                            </div>
                        </form>

                        <div class = "signup-link">
                            <span class = "text">Don't have an account?
                                <a href = "./signup.php" class = "Signup-link">Register for new one</a>
                            </span>     
                        </div>   
                    </div>
                </div>
        </div>
</body>