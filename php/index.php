<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer</title>
    <link rel="stylesheet" href="../css/home-login.css">
</head>

<body>
    <!-- nav -->
    <nav class="navigation">
        <!-- logo -->
        <a href="#" class="logo">
            Computer C4
        </a>
        <!-- menu button -->
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <!-- menu -->
        <ul class="menu">
            <li><a href="#product">Mua</a></li>
            <li>
                <a href="#popular-product">Giới thiệu trang</a>
            </li>
            <li><a href="#popular-product">Phổ biến nhất</a></li>
            <li><a href="mailto:example@mail.com">Liên hệ</a></li>
        </ul>
        <button class="login-popup">Login</button>
        <!-- dang nhap -->
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close"></ion-icon>
            </span>
            <?php
            require_once("config.php");
            if (isset($_POST["login"])) {
                $email = $_POST["email_in"];
                $password = $_POST["password_in"];
                $result = mysqli_query($conn, "SELECT * FROM  user WHERE password = '$password' OR email = '$email'");
                $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) > 0) {
                    if ($password == $row["password"]) {
                        $_SESSION["login"] = true;
                        $_SESSION["id"] = $row["id"];
                        header("Location: home.php");
                    } else {
                        echo "<script> alert('Wrong Password');</script>";
                    }
                } else {
                    echo "<script> alert('User Not Registration');</script>";
                }
            }
            ?>
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
                            <a href="#" class="register-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="form forgot">
                <h2>Forgot password</h2>
                <form action="#" method="post">
                    <div class="inputbox">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" name="name">
                        <label>Username</label>
                    </div>
                    <div class="inputbox">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email">
                        <label>Email</label>
                    </div>
                    <button type="submit" name="signup" class="bt">Submit</button>
                    <div class="login-register">
                        <p>Already have an account?
                            <a href="#" class="login-linkfg">Login</a>
                        </p>
                    </div>
            </div>
            <!-- dang ky  -->
            <?php
            require_once("config.php");
            if (isset($_POST["signup"])) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confpassword = $_POST["confpassword"];
                $duplicate = mysqli_query($conn, "SELECT * FROM  user WHERE name = '$name' OR email = '$email'");
                if (mysqli_num_rows($duplicate) > 0) {
                    echo "<script> alert('Name or Email Has Already Taken');</script>";
                } else {
                    if ($password == $confpassword) {
                        $query = "INSERT INTO user VALUES('','$name','$email','$password')";
                        mysqli_query($conn, $query);
                        echo "<script> alert('Registration Successful!');</script>";
                    } else {
                        echo "<script> alert('Password Does Not Match!');</script>";
                    }
                }
            }
            ?>
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
                            <a href="#" class="login-link">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
    <!-- main---------------------------------- -->
    <section id="main">
        <div class="main-text">
            <strong>Sản phẩm yêu thích</strong>
            <h1><span>Website</span> bán máy tính.</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat repellat saepe, eveniet ut est velit ab
                blanditiis voluptate minus natus? Maiores laboriosam eos minima, labore laudantium quae vel ut animi!
            </p>
            <a href="#">Xem ngay</a>
        </div>
        <!-- imggggggggggggg -->
        <div class="main-bg">
            <img src="../img/main-bg.png">
        </div>
    </section>
    <!-- product -->
    <section id="product" class="product">
        <!-- heading -->
        <div class="product-heading">
            <h3>Sản phẩm hiện có</h3>
            <a href="">Tất cả</a>
        </div>
        <!-- container -->
        <div class="product-container">
            <!-- box -->
            <div class="product-box">
                <!-- img -->
                <div class="product-img">
                    <img src="../img/h2.png" alt="">
                </div>
                <!-- text -->
                <div class="product-text">
                    <!-- title -->
                    <a href="#" class="product-name">Computer HP</a>
                    <!-- category -->
                    <span class="category">
                        <a href="">Đồ điện tử ></a>
                        <a href="">Máy tính cá nhân</a>
                    </span>
                    <!-- price -->
                    <span class="price">10.000.000đ <del>12.000.000đ</del></span>
                </div>
            </div>
            <!-- box end -->
            <!-- box -->
            <div class="product-box">
                <!-- img -->
                <div class="product-img">
                    <img src="../img/h2.png" alt="">
                </div>
                <!-- text -->
                <div class="product-text">
                    <!-- title -->
                    <a href="#" class="product-name">Computer HP</a>
                    <!-- category -->
                    <span class="category">
                        <a href="">Đồ điện tử ></a>
                        <a href="">Máy tính cá nhân</a>
                    </span>
                    <!-- price -->
                    <span class="price">10.000.000đ <del>12.000.000đ</del></span>
                </div>
            </div>
            <!-- box end -->
            <!-- box -->
            <div class="product-box">
                <!-- img -->
                <div class="product-img">
                    <img src="../img/h2.png" alt="">
                </div>
                <!-- text -->
                <div class="product-text">
                    <!-- title -->
                    <a href="#" class="product-name">Computer HP</a>
                    <!-- category -->
                    <span class="category">
                        <a href="">Đồ điện tử ></a>
                        <a href="">Máy tính cá nhân</a>
                    </span>
                    <!-- price -->
                    <span class="price">10.000.000đ <del>12.000.000đ</del></span>
                </div>
            </div>
            <!-- box end -->
            <!-- box -->
            <div class="product-box">
                <!-- img -->
                <div class="product-img">
                    <img src="../img/h2.png" alt="">
                </div>
                <!-- text -->
                <div class="product-text">
                    <!-- title -->
                    <a href="#" class="product-name">Computer HP</a>
                    <!-- category -->
                    <span class="category">
                        <a href="">Đồ điện tử ></a>
                        <a href="">Máy tính cá nhân</a>
                    </span>
                    <!-- price -->
                    <span class="price">10.000.000đ <del>12.000.000đ</del></span>
                </div>
            </div>
            <!-- box end -->
            <!-- box -->
            <div class="product-box">
                <!-- img -->
                <div class="product-img">
                    <img src="../img/h2.png" alt="">
                </div>
                <!-- text -->
                <div class="product-text">
                    <!-- title -->
                    <a href="#" class="product-name">Computer HP</a>
                    <!-- category -->
                    <span class="category">
                        <a href="">Đồ điện tử ></a>
                        <a href="">Máy tính cá nhân</a>
                    </span>
                    <!-- price -->
                    <span class="price">10.000.000đ <del>12.000.000đ</del></span>
                </div>
            </div>
            <!-- box end -->
            <!-- box -->
            <div class="product-box">
                <!-- img -->
                <div class="product-img">
                    <img src="../img/h2.png" alt="">
                </div>
                <!-- text -->
                <div class="product-text">
                    <!-- title -->
                    <a href="#" class="product-name">Computer HP</a>
                    <!-- category -->
                    <span class="category">
                        <a href="">Đồ điện tử ></a>
                        <a href="">Máy tính cá nhân</a>
                    </span>
                    <!-- price -->
                    <span class="price">10.000.000đ <del>12.000.000đ</del></span>
                </div>
            </div>
            <!-- box end -->
        </div>
    </section>
    <!-- end product -->
    <!-- sale -->
    <section class="sale">
        <!-- box -->
        <div class="sale-box">
            <!-- img -->
            <img src="../img/sale-1.jpg" alt="">
            <!-- text -->
            <a href="#" class="sale-text">
                <strong>Laptop</strong>
                <span>Sale 25%</span>
            </a>
        </div>
        <div class="sale-box">
            <!-- img -->
            <img src="../img/sale-1.jpg" alt="">
            <!-- text -->
            <a href="#" class="sale-text">
                <strong>Laptop</strong>
                <span>Sale 25%</span>
            </a>
        </div>
        <div class="sale-box">
            <!-- img -->
            <img src="../img/sale-1.jpg" alt="">
            <!-- text -->
            <a href="#" class="sale-text">
                <strong>Laptop</strong>
                <span>Sale 25%</span>
            </a>
        </div>
    </section>
    <!-- sale end -->
    <!-- popular -->
    <section id="popular-product">
        <!-- heading -->
        <div class="product-heading">
            <h3>Sản phẩm phổ biến</h3>
            <a href="">Tất cả</a>
        </div>
        <!-- container -->
        <div class="popular-container">
            <!-- box -->
            <div class="p-product-box">
                <!-- img -->
                <a href="#" class="p-product-img">
                    <img src="../img/p3.png" alt="">
                </a>
                <!-- text -->
                <div class="p-product-text">
                    <!-- title -->
                    <a href="#" class="product-name">
                        Computer HP
                    </a>
                    <!-- category -->
                    <span class="category">
                        <a href="#">Đồ điện tử</a>>
                        <a href="#">Máy tính cá nhân</a>
                    </span>
                    <!-- detail -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur accusantium voluptatum
                        incidunt blanditiis ratione maxime qui ipsum atque. Temporibus magnam sed quis, asperiores
                        assumenda deserunt? Facilis inventore quo quidem laboriosam.</p>
                    <!-- price -->
                    <span class="price">169.000đ</span>
                    <del>269.000đ</del>
                </div>
            </div>
            <!-- box-end -->
            <div class="p-product-box">
                <!-- img -->
                <a href="#" class="p-product-img">
                    <img src="../img/p3.png" alt="">
                </a>
                <!-- text -->
                <div class="p-product-text">
                    <!-- title -->
                    <a href="#" class="product-name">
                        Computer HP
                    </a>
                    <!-- category -->
                    <span class="category">
                        <a href="#">Đồ điện tử</a>>
                        <a href="#">Máy tính cá nhân</a>
                    </span>
                    <!-- detail -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur accusantium voluptatum
                        incidunt blanditiis ratione maxime qui ipsum atque. Temporibus magnam sed quis, asperiores
                        assumenda deserunt? Facilis inventore quo quidem laboriosam.</p>
                    <!-- price -->
                    <span class="price">169.000đ</span>
                    <del>269.000đ</del>
                </div>
            </div>
            <!-- box-end -->
            <div class="p-product-box">
                <!-- img -->
                <a href="#" class="p-product-img">
                    <img src="../img/p3.png" alt="">
                </a>
                <!-- text -->
                <div class="p-product-text">
                    <!-- title -->
                    <a href="#" class="product-name">
                        Computer HP
                    </a>
                    <!-- category -->
                    <span class="category">
                        <a href="#">Đồ điện tử</a>>
                        <a href="#">Máy tính cá nhân</a>
                    </span>
                    <!-- detail -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur accusantium voluptatum
                        incidunt blanditiis ratione maxime qui ipsum atque. Temporibus magnam sed quis, asperiores
                        assumenda deserunt? Facilis inventore quo quidem laboriosam.</p>
                    <!-- price -->
                    <span class="price">169.000đ</span>
                    <del>269.000đ</del>
                </div>
            </div>
            <!-- box-end -->
            <div class="p-product-box">
                <!-- img -->
                <a href="#" class="p-product-img">
                    <img src="../img/p3.png" alt="">
                </a>
                <!-- text -->
                <div class="p-product-text">
                    <!-- title -->
                    <a href="#" class="product-name">
                        Computer HP
                    </a>
                    <!-- category -->
                    <span class="category">
                        <a href="#">Đồ điện tử</a>>
                        <a href="#">Máy tính cá nhân</a>
                    </span>
                    <!-- detail -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur accusantium voluptatum
                        incidunt blanditiis ratione maxime qui ipsum atque. Temporibus magnam sed quis, asperiores
                        assumenda deserunt? Facilis inventore quo quidem laboriosam.</p>
                    <!-- price -->
                    <span class="price">169.000đ</span>
                    <del>269.000đ</del>
                </div>
            </div>
            <!-- box-end -->
            <div class="p-product-box">
                <!-- img -->
                <a href="#" class="p-product-img">
                    <img src="../img/p3.png" alt="">
                </a>
                <!-- text -->
                <div class="p-product-text">
                    <!-- title -->
                    <a href="#" class="product-name">
                        Computer HP
                    </a>
                    <!-- category -->
                    <span class="category">
                        <a href="#">Đồ điện tử</a>>
                        <a href="#">Máy tính cá nhân</a>
                    </span>
                    <!-- detail -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur accusantium voluptatum
                        incidunt blanditiis ratione maxime qui ipsum atque. Temporibus magnam sed quis, asperiores
                        assumenda deserunt? Facilis inventore quo quidem laboriosam.</p>
                    <!-- price -->
                    <span class="price">169.000đ</span>
                    <del>269.000đ</del>
                </div>
            </div>
            <!-- box-end -->
        </div>
    </section>
    <!-- popular end -->
    <!-- contact -->
    <section id="home-contact" class="home-contact">
        <!-- text -->
        <div class="contact-text">
            <span>Hỗ trợ</span>
            <h3>Cần giúp đỡ?</h3>
            <a href="mailto:example@mail.com">Liên hệ với chúng tôi</a>
        </div>
        <!-- img -->
        <img src="../img/contact_bg.webp" class="contact-img" alt="">
        <img src="../img/contact_bg1.jpg" class="contact-img-1" alt="">
    </section>
    <!-- contact end -->
    <!-- service -->
    <section class="services">
        <!-- box -->
        <div class="services-box">
            <ion-icon name="car"></ion-icon>
            <span>Free Shipping</span>
            <p>Giao hàng miễn phí cho mọi đơn hàng</p>
        </div>
        <!-- box -->
        <div class="services-box">
            <ion-icon name="headset"></ion-icon>
            <span>Hỗ trợ 24/7</span>
            <p>Hỗ trợ nhanh chóng</p>
        </div>
        <!-- box -->
        <div class="services-box">
            <ion-icon name="cash"></ion-icon>
            <span>100% Refund</span>
            <p>Hoàn tiền cho các sản phẩm dưới 1 tháng</p>
        </div>
    </section>
    <!-- service end -->
    <!-- footer -->
    <footer>
        <!-- payment -->
        <div class="payment">
            <!-- logo -->
            <div class="payment-logo">
                <img src="../img/master_card.png" alt="">
                <img src="../img/visa.png" alt="">
                <img src="../img/paypal.png" alt="">
                <img src="../img/ebay.png" alt="">
            </div>
            <!-- text -->
            <strong>Phương thức thanh toán an toàn và bảo mật</strong>
        </div>
        <!-- container -->
        <div id="footer-container" class="footer-container">
            <!-- company -->
            <div class="company-box">
                <!-- logo -->
                <a href="#" class="footer-logo">Logo</a>
                <!-- detail -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <!-- social -->
                <div class="social">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                </div>
            </div>
            <!-- link -->
            <div class="link-box">
                <strong>Liên kết chính</strong>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <li><a href="#">Dịch vụ</a></li>
                </ul>
            </div>
            <div class="link-box">
                <strong>Liên kết bên ngoài</strong>
                <ul>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Điều khoản dịch vụ</a></li>
                    <li><a href="#">Trách nhiệm pháp lý</a></li>
                </ul>
            </div>
        </div>
        <!-- container end -->
        <!-- bottom -->
        <div class="bottom">
            <span class="owner">Made by nhóm 1</span>
            <span class="copyright">© Copyright 2023 - Nhóm 1</span>
        </div>
    </footer>
    <!-- footer end -->



    <script src="../js/scroll.js"></script>
    <script src="../js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>