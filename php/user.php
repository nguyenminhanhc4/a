<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/user.css">
</head>

<body>
    <!-- nav -->
    <nav class="navigation">
        <!-- logo -->
        <a href="#" class="logo">
            Computer C4
        </a>
        <!-- menu -->
        <ul class="menu">
            <li><a href="home.php">Trang chủ</a></li>
            <li>
                <a href="hot-product.php">Bán chạy nhất</a>
                <span class="nav-label">Ưu đãi hấp dẫn</span>
            </li>
            <li><a href="popular.php">Phổ biến nhất</a></li>
            <li><a href="mailto:example@mail.com">Liên hệ</a></li>
        </ul>
        <!-- nav-button -->
        <div class="nav-btns">
            <!-- search -->
            <input type="checkbox" id="nav-search-btn">
            <label for="nav-search-btn" class="nav-search">
                <ion-icon name="search"></ion-icon>
                <!-- search-container -->
                <form action="">
                    <!-- close -->
                    <label for="nav-search-btn" class="nav-search-close">
                        <ion-icon name="close"></ion-icon>
                    </label>
                    <!-- box -->
                    <div class="nav-search-box">
                        <input type="text" placeholder="Tìm kiếm sản phẩm" required>
                        <button>
                            <ion-icon name="search"></ion-icon>
                        </button>
                    </div>
                </form>
            </label>
            <!-- user -->
            <a href="logout.php" class="nav-user">
                <ion-icon name="person"></ion-icon>
            </a>
            <!-- gio hang -->
            <a href="#" class="nav-cart">
                <ion-icon name="cart"></ion-icon>
                <span>0</span>
            </a>
        </div>
    </nav>
    <!-- end nav -->

    <!-- wrapper -->
    <section class="wrapper">
        <!-- Menu left -->
        <div class="menuleft">
            <h2><span>Chị <b>Lê Phuơng Nam</b></span></h2>
            <ul>
                <li class=""><a href=""><i class="iconoh-menulisting"><ion-icon name="cart-outline"></ion-icon></i>Đơn
                        hàng đã mua</a></li>
                <li class="active"><a href=""><i class="iconoh-menuprofile"><ion-icon
                                name="person-circle-outline"></ion-icon></i>Thông tin địa chỉ</a></li>
            </ul>
            <a href="logout.php" class="btn-logout">Đăng Xuất</a>
            <img src="../img/apple-macbook-air-m1-mgn63-gray-space_00c34aeb.jpg" alt="Quảng cáo không có tiền ">
        </div>
        <!-- end Menu left -->

        <div class="menuright">
            <div class="profile">
                <h2>Thông tin tài khoản </h2>


                <div class="profile-area">
                    <h3>Thông tin cá nhân</h3>
                    <div class="profile_main">
                        <div class="profile-info">
                            <p>Chị <span id="username">Sơn ngu</span> - 0379432570</p>
                            <div class="pl-span">
                                <a href="javascript:;" id="profile-edit">
                                    <i class="iconoh-edit"><ion-icon
                                            name="create-outline"></ion-icon></i><span>Sửa</span>
                                </a>
                            </div>
                        </div>

                        <div class="profile-input-group">
                            <div>
                                <span class="active" data-val="1"><i></i>Anh</span>
                                <span class="" data-val="0"><i></i>Chị</span>
                                <input type="hidden" name="hdGender" value="0">
                            </div>
                            <div class="profile-input">
                                <div class="profile-name">
                                    <span>Họ &amp; Tên: </span>
                                    <input type="text" name="txtFullName" value="Sơn ngu"
                                        oninput="CheckInputChange('Sơn ngu')">
                                    <p class="texterror txtFullName_error"></p>
                                </div>
                                <div class="profile-phoneNumber">
                                    <span>Số điện thoại: </span>
                                    <input type="tel" name="txtPhoneNumber" disabled="" value="0379432570">
                                    <p class="texterror txtPhoneNumber_error"></p>
                                </div>
                            </div>
                            <div class="btn-profile-edit" style="display: flex;">
                                <a href="javascript:;" id="cancel-edit">
                                    Huỷ
                                </a>
                                <a id="save-profile-edit" href="javascript:;" onclick="ProfileEdit(this)">
                                    Lưu
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="address-area">
                    <h3>Địa chỉ nhận hàng </h3>
                    <form action="">

                        <select class="calc_shipping_provinces" id="city" aria-label=".form-select-sm">
                            <option value="" selected>Chọn tỉnh thành</option>
                        </select>

                        <select class="calc_shipping_district" id="district" aria-label=".form-select-sm">
                            <option value="" selected>Chọn quận huyện</option>
                        </select>

                        <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                            <option value="" selected>Chọn phường xã</option>
                        </select>
                        <input type="text" name="txtAddress" class="inline" placeholder="Số nhà, tên đường*">
                    </form>
                    <input type="checkbox">Đặt làm địa chỉ mặc định
                </div>
                <a href="javascript:;" onclick="" class="button">CẬP NHẬT</a>

            </div>
        </div>


    </section>
    <!-- end wrapper -->

    <!-- contact -->
    <section class="home-contact">
        <!-- text -->

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
            <div class="footer-container">
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



        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script>
            var citis = document.getElementById("city");
            var districts = document.getElementById("district");
            var wards = document.getElementById("ward");
            var Parameter = {
                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                method: "GET",
                responseType: "application/json",
            };
            var promise = axios(Parameter);
            promise.then(function (result) {
                renderCity(result.data);
            });

            function renderCity(data) {
                for (const x of data) {
                    citis.options[citis.options.length] = new Option(x.Name, x.Id);
                }
                citis.onchange = function () {
                    district.length = 1;
                    ward.length = 1;
                    if (this.value != "") {
                        const result = data.filter(n => n.Id === this.value);

                        for (const k of result[0].Districts) {
                            district.options[district.options.length] = new Option(k.Name, k.Id);
                        }
                    }
                };
                district.onchange = function () {
                    ward.length = 1;
                    const dataCity = data.filter((n) => n.Id === citis.value);
                    if (this.value != "") {
                        const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                        for (const w of dataWards) {
                            wards.options[wards.options.length] = new Option(w.Name, w.Id);
                        }
                    }
                };
            }
        </script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>