<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <header>
    <h2 class="logo">Computer</h2>
    <nav class="navigation">
        <a href="./about.php">About us</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <button class="login-popup">Login</button>
    </nav>
    </header>
    <!-- dang nhap -->
    
    <div class="wrapper">
        <span class="icon-close">
        <ion-icon name="close"></ion-icon>
        </span>
        <div class="form login">
            <h2>Login</h2>
            <form action="#" method="post">
                <div class="inputbox">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email_in" required>
                    <label>Email</label>
                </div>
                <div class="inputbox">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password_in" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <div class="login-register">
                        <a href="#" class="forgot-link">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" name="login" class="bt">Login</button>
                <div class="login-register">
                    <p>Don't have an account?
                    <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
        <div class="form forgot">
                <h2>Forgot password</h2>
                <form action="#" method="post">
                    <div class="inputbox">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" name="name" required>
                        <label>Username</label>
                    </div>
                    <div class="inputbox">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <button type="submit" name="signup" class="bt">Submit</button>
                    <div class="login-register">
                        <p>Already have an account?
                        <a href="#" class="login-linkfg">Login</a></p>
                    </div>
        </div>
        <!-- dang ky -->
       
        <div class="form register">
            <h2>Registration</h2>
            <form action="#" method="post">
                <div class="inputbox">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="name" required>
                    <label>Username</label>
                </div>
                <div class="inputbox">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="inputbox">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="inputbox">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="confpassword" required>
                    <label>Confirm password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the term & conditions</label>
                    
                </div>
                <button type="submit" name="signup" class="bt">Register</button>
                <div class="login-register">
                    <p>Already have an account?
                    <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
<p>holololo
    
</p>
    <script src="../js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>