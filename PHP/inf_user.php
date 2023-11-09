<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footsteps In Fashion</title>
    <link rel="icon" href="../Picture/Icon/Icon_Logo_Type_Text.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=League+Spartan:wght@600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/inf_user.css" type="text/css">
</head>
<body>
    <?php
    session_start();
    require_once 'ConnectData.php';
    $user_id = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : NULL;
    $query = "SELECT * FROM user WHERE user_id = ?";
            $stmt = $connect->prepare($query);
            $stmt->bind_param("i", $user_id);
            
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $data = $result->fetch_assoc();
            
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST["update_phone"])) {
                            $new_phone_number = $_POST["phone_number"];
                            $update_query = "UPDATE user SET phoneNumber = ? WHERE user_id = ?";
                            $update_stmt = $connect->prepare($update_query);
                            $update_stmt->bind_param("si", $new_phone_number, $user_id);
            
                            if ($update_stmt->execute()) {
                                header("Location: {$_SERVER['REQUEST_URI']}");
                                exit();
                            } else {
                                echo "Cập nhật số điện thoại thất bại: " . $update_stmt->error;
                            }
                        }

                        if (isset($_POST['update_passWord'])) {
                            $new_passWord = $_POST["passWord"];
                            $update_query = "UPDATE user SET passWord = ? WHERE user_id = ?";
                            $update_stmt = $connect->prepare($update_query);
                            $update_stmt->bind_param("si", $new_passWord, $user_id);
            
                            if ($update_stmt->execute()) {
                                header("Location: {$_SERVER['REQUEST_URI']}");
                                exit();
                            } else {
                                echo "Cập nhật mật khẩu thất bại " . $update_stmt->error;
                            }
                        }

                        if (isset($_POST['update_email'])) {
                            $new_email = $_POST["email"];
                            $update_query = "UPDATE user SET email = ? WHERE user_id = ?";
                            $update_stmt = $connect->prepare($update_query);
                            $update_stmt->bind_param("si", $new_email, $user_id);
            
                            if ($update_stmt->execute()) {
                                header("Location: {$_SERVER['REQUEST_URI']}");
                                exit();
                            } else {
                                echo "Cập nhật email thất bại " . $update_stmt->error;
                            }
                        }
                        
                        if (isset($_POST['update_detail'])) {
                            $new_firstName = $_POST["firstName"];
                            $new_lastName = $_POST["lastName"];
                            $new_date = $_POST["date"];
                            $new_month = $_POST["month"];
                            $new_year = $_POST["year"];
                            $new_sex = $_POST["sex"];
                        
                            // Cập nhật thông tin chi tiết của người dùng
                            $update_query = "UPDATE user SET firstName = ?, lastName = ?, fullName = ?, dateOfBirth = ?, sex = ? WHERE user_id = ?";
                            $update_stmt = $connect->prepare($update_query);
                            $dateOfBirth = "$new_year-$new_month-$new_date";
                            $fullName = $new_lastName . ' ' . $new_firstName;
                            $update_stmt->bind_param("sssssi", $new_firstName, $new_lastName, $fullName, $dateOfBirth, $new_sex, $user_id);
                        
                            if ($update_stmt->execute()) {
                                header("Location: {$_SERVER['REQUEST_URI']}");
                                exit();
                            } else {
                                echo "Cập nhật thông tin thất bại: " . $update_stmt->error;
                            }
                        }                        
                    }
                } else {
                    echo "Không tìm thấy người dùng với user_id: " . $user_id;
                }
            }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="change_Phone_imf" >
        <div class="exit_change_imf">
            X
        </div>
        <div class="change_Phone_cover">
            <h1>CHỈNH SỬA SỐ ĐIỆN THOẠI CỦA BẠN</h1>
            <div class="input_phoneNumber">
                <p>Số điện thoại <span>*</span></p>
                <input type="text" name="phone_number" value="<?php echo $data['phoneNumber']; ?>" required>
            </div>
            <button type="submit" name="update_phone">CẬP NHẬT THÔNG TIN</button>
        </div>
    </form>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="change_Passwork_imf">
        <div class="exit_change_imf">
            X
        </div>
        <div class="change_Passwork_cover">
            <h1>CHỈNH SỬA MẬT KHẨU CỦA BẠN</h1>
            <div class="input_passworkOld">
                <p>Mật khẩu cũ <span>*</span></p>
                <input type="text" value="<?php echo $data['passWord']?>">
            </div>
            <div class="input_passworkNew">
                <p>Mật khẩu mới <span>*</span></p>
                <input type="text" name="passWord" placeholder="***********" required>
            </div>
            <button type="submit" name="update_passWord">CẬP NHẬT THÔNG TIN</button>
        </div>
    </form>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="change_Email_user">
        <div class="exit_change_imf">
            X
        </div>
        <div class="change_Email_cover">
            <h1>CHỈNH SỬA EMAIL CỦA BẠN</h1>
            <div class="input_Email">
                <p>EMAIL <span>*</span></p>
                <input type="text" value="<?php echo $data['email']?>" required>
            </div>
            <button type="submit" name="update_email">CẬP NHẬT THÔNG TIN</button>
        </div>
    </form>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="change_information_user">
        <div class="exit_change_imf">
            X
        </div>
        <div class="change_imf_cover">
            <h1>CHỈNH SỬA THÔNG TIN CỦA BẠN</h1>
            <div class="input_userName">
                <p>Tên <span>*</span></p>
                <input type="text" name="firstName" value="<?php echo $data['firstName']; ?>">
            </div>
            <div class="input_userName">
                <p>Họ <span>*</span></p>
                <input type="text" name="lastName" value="<?php echo $data['lastName']; ?>">
            </div>
            <h2>NGÀY SINH</h2>
            <div class="Born_user flexbox">
                <div class="input_userName">
                    <p>Ngày <span>*</span></p>
                    <input type="text" name="date" value="<?php echo date('d', strtotime($data['dateOfBirth'])); ?>">
                </div>
                <div class="input_userName">
                    <p>Tháng <span>*</span></p>
                    <input type="text" name="month" value="<?php echo date('m', strtotime($data['dateOfBirth'])); ?>">
                </div>
                <div class="input_userName">
                    <p>Năm <span>*</span></p>
                    <input type="text" name="year" value="<?php echo date('Y', strtotime($data['dateOfBirth'])); ?>">
                </div>
            </div>
            <h2>GIỚI TÍNH</h2>
            <div class="input_sex_cover flexbox">
                <input type="radio" name="sex" id="sex_1" class="input_sex" value="Nam" checked><label for="sex_1">NAM</label>
                <input type="radio" name="sex" id="sex_2" class="input_sex" value="Nữ"><label for="sex_2">NỮ</label>
                <input type="radio" name="sex" id="sex_3" class="input_sex" value="Khác"><label for="sex_3">KHÁC</label>
            </div>
            <button type="submit" name="update_detail">CẬP NHẬT THÔNG TIN</button>
        </div>
    </form>
    <div class="add_address_user">
        <div class="exit_change_imf">
            X
        </div>
        <div class="add_address_user_cover">
            <h1>THÊM ĐỊA CHỈ MỚI</h1>
            <div class="input_userName">
                <p>Tên <span>*</span></p>
                <input type="text" placeholder="Hoàn">
            </div>
            <div class="input_userName">
                <p>Họ <span>*</span></p>
                <input type="text" placeholder="Đỗ Đăng">
            </div>
            <div class="input_userName">
                <p>Địa chỉ <span>*</span></p>
                <input type="text" placeholder="Sô nhà trên mây, Ngõ tào lao, Phố đèn đỏ, Tầng 18, Địa Ngục">
            </div>
            <div class="input_userName">
                <p>Số điện thoại <span>*</span></p>
                <input type="text" placeholder="0987246112">
            </div>
            <button>LƯU</button>
        </div>
    </div>
    <header>
        <div class="header_1">
            <ul>
                <li><a href=""><img src="../Picture/Icon/Icon_Box.png" alt="">Tra cứu đơn hàng </a></li>
                <li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+H%E1%BB%8Dc+Phenikaa/@20.9626112,105.7486864,17z/data=!3m1!4b1!4m6!3m5!1s0x313452efff394ce3:0x391a39d4325be464!8m2!3d20.9626112!4d105.7486864!16s%2Fg%2F1220whsz?entry=ttu"><img src="../Picture/Icon/Icon_Location.png" alt="">Tìm cửa hàng</a></li>
                <li><a href=""><img src="../Picture/Icon/Icon_heart.png" alt="">Yêu thích</a></li>
                <li>
                    <?php
                    if (isset($_SESSION["emailLogin"])) {
                        // Nếu người dùng đã đăng nhập, hiển thị tên của họ
                        echo '<a href="profile.php"><img src="../Picture/Icon/Icon_Person.png" alt="">' . $_SESSION["emailLogin"] . '</a>';
                    } else {
                        // Nếu người dùng chưa đăng nhập, hiển thị "Đăng nhập"
                        echo '<a href="login.php"><img src="../Picture/Icon/Icon_Person.png" alt="">Đăng nhập</a>';
                    }
                    ?>
                </li>
                <li><a href="../PHP/cart.php"><img src="../Picture/Icon/Icon_Cart.png" alt="">Giỏ hàng</a></li>
            </ul>
        </div>
        <div class="header_2">
            <div class="header_logo">
                <a href="index.php"><img src="../Picture/Icon/Icon_logo.png"></a>
            </div>
            <div class="header_category">
                <ul>
                    <li>
                        <a href="product.php">SẢN PHẨM</a>
                        <div class="header_hover_product_category">
                            <div class="category_product_hover">
                                <a href="">
                                    <div class="img_category_product">
                                        <img src="../Picture/Img/Img_header_category_1.jpg">
                                    </div>
                                    <h1>CHO NAM</h1>
                                </a>
                            </div>
                            <div class="category_product_hover">
                                <a href="">
                                    <div class="img_category_product">
                                        <img src="../Picture/Img/Img_header_category_2.jpg">
                                    </div>
                                    <h1>CHO NỮ</h1>
                                </a>
                            </div>
                            <div class="category_product_hover">
                                <a href="SaleOff.php">
                                    <div class="img_category_product">
                                        <img src="../Picture/Img/Img_banner_safeOf.jpg">
                                    </div>
                                    <h1>SALE OF</h1>
                                </a>
                            </div>
                            <div class="category_product_hover">
                                <a href="">
                                    <div class="img_category_product">
                                        <img src="../Picture/Img/Img_header_category_1.jpg">
                                    </div>
                                    <h1>BÁN CHẠY</h1>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="product_Nam.php">NAM</a>
                        <!-- <div class="header_hover_product_category header_hover_product_male">
                            <div class="product_male_header">
                                <h1>NỔI BẬT</h1>
                                <ul>
                                    <li><a href="">Best seller</a></li>
                                    <li><a href="">New Arrivals</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            </div>
                            <div class="product_male_header">
                                <h1>STYLE</h1>
                                <ul>
                                    <li><a href="">Hight top</a></li>
                                    <li><a href="">Low top</a></li>
                                    <li><a href="">Slip-on</a></li>
                                </ul>
                            </div>
                            <div class="product_male_header">
                                <h1>DÒNG SẢN PHẨM</h1>
                                <ul>
                                    <li><a href="">Best seller</a></li>
                                    <li><a href="">New Arrivals</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </li>
                    <li>
                        <a href="product_Nu.php">NỮ</a>
                        <!-- <div class="header_hover_product_category header_hover_product_male">
                            <div class="product_male_header">
                                <h1>NỔI BẬT</h1>
                                <ul>
                                    <li><a href="">Best seller</a></li>
                                    <li><a href="">New Arrivals</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            </div>
                            <div class="product_male_header">
                                <h1>STYLE</h1>
                                <ul>
                                    <li><a href="">Hight top</a></li>
                                    <li><a href="">Low top</a></li>
                                    <li><a href="">Slip-on</a></li>
                                </ul>
                            </div>
                            <div class="product_male_header">
                                <h1>DÒNG SẢN PHẨM</h1>
                                <ul>
                                    <li><a href="">Best seller</a></li>
                                    <li><a href="">New Arrivals</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </li>
                    <li><a href="about_me.php">
                        <img src="../Picture/Icon/Icon_Logo_Type_Text.png">
                    </a></li>
                </ul>
            </div>
            <div class="header_searchBox">
                <div class="search_box">
                    <img src="../Picture/Icon/Icon_Find.png">
                    <input type="text" placeholder="Tìm kiếm">
                </div>
            </div>
        </div>
        <div class="header_3">
            <p>Khám phá phong cách nằm sâu trong bạn</p>
        </div>
    </header>
    <main>
        <div class="content flexbox">
            <div class="content_left flexbox">
                <h1>TỔNG QUAN TÀI KHOẢN</h1>
                <div class="content_left_category flexbox">
                    <div class="content_left_category_title left_information_user">
                        Thông Tin Cá Nhân
                    </div>
                    <div class="content_left_category_title left_address_user">
                        Số Địa Chỉ
                    </div>
                    <div class="content_left_category_title">
                        <a href="../PHP/cart.php"></a>Giỏ Hàng</a>
                    </div>
                    <div class="content_left_category_title">
                        <a href="logout.php">Đăng Xuất</a>
                    </div>
                </div>
            </div>
            <div class="content_right">
                <div class="content_right_information_user">
                    <div class="informtion_user_">
                        <h1>THÔNG TIN CỦA TÔI</h1>
                        <p>Hãy chỉnh sửa bất kỳ thông tin chi tiết nào bên dưới để tài khoản của bạn luôn được cập nhật</p>
                    </div>
                    <div class="informtion_user_">
                        <h1>THÔNG TIN CHI TIẾT</h1>
                        <p id="Name_user"><?php echo $data['fullName']?></p>
                        <p id="Born_user"><?php echo date('d/m/Y', strtotime($data['dateOfBirth'])); ?></p>
                        <p id="Sex_user">Giới tính: <?php echo $data['sex']?></p>
                        <p class="edit_imformation_user" id="edit_imformation_user">CHỈNH SỬA</p>
                    </div>
                    <div class="informtion_user_">
                        <h1>CHI TIẾT ĐĂNG NHẬP</h1>
                        <h3>EMAIL</h3>
                        <p><?php echo $data['email']; ?></p>
                        <p class="edit_imformation_user" id="edit_imformation_user_1">CHỈNH SỬA</p>
                        <h3>MẬT KHẨU</h3>
                        <p>*************</p>
                        <p class="edit_imformation_user" id="edit_imformation_user_2">CHỈNH SỬA</p>
                        <h3>SỐ ĐIỆN THOẠI</h3>
                        <p>********<?php $phoneNumber= $data['phoneNumber']; echo substr($phoneNumber, -3);?></p>
                        <p class="edit_imformation_user" id="edit_imformation_user_3">CHỈNH SỬA</p>
                    </div>
                </div>
                <div class="content_right_address_user">
                    <h1>SỐ ĐỊA CHỈ</h1>
                    <div class="address_user">
                        <form action="" class="address">
                        <h1><?php echo $data['fullName']?></h1>
                            <p><?php echo $data['address']?></p>
                            <p><?php echo $data['phoneNumber']?></p>
                            <p class="edit_address_button">CHỈNH SỬA</p>
                            <p class="edit_address_button" style="visibility:hidden">XÓA</p>
                        </form>
                        <div class="address address_add" style="visibility:hidden">
                            Thêm địa chỉ
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer_1">
            <div class="location_shop">
                <img src="../Picture/Icon/Icon_shop_location.png">
                <div class="button_findLocation">
                    <button >TÌM CỬA HÀNG</button>
                </div>
            </div>
            <div class="footer_content">
                <div class="footer_content_1">
                    <div class="footer_content_item">
                        <h1>SẢN PHẨM</h1>
                        <ul>
                            <li><a href="product_Nam.php">Giày Nam</a></li>
                            <li><a href="product_Nu.php">Giày Nữ</a></li>
                            <li><a href="SaleOff.php">Sale-off</a></li>
                        </ul>
                    </div>
                    <div class="footer_content_item">
                        <h1>HỖ TRỢ</h1>
                        <ul>
                            <li><a href="">FAQs</a></li>
                            <li><a href="">Bảo mật thông tin</a></li>
                            <li><a href="">Chính sách chung</a></li>
                            <li><a href="">Tra cứu đơn hàng</a></li>
                        </ul>
                    </div>
                    <div class="footer_content_item">
                        <h1>LIÊN HỆ</h1>
                        <ul>
                            <li>Email góp ý</li>
                            <li>21010666@st.phenikaa-uni.edu.vn</li>
                            <li>Hotline</li>
                            <li>098349372</li>
                        </ul>
                    </div>
                </div>
                <div class="footer_content_2">
                    <div class="footer_content_item_Social">
                        <h1>FOOTSTEPS IN FASHION SOCIAL</h1>
                        <div class="link_social">
                            <a href="https://www.facebook.com/Ananas.vietnam/"><img src="../Picture/Icon/Icon_Facebook.png" alt=""></a>
                            <a href="https://www.youtube.com/discoveryou"><img src="../Picture/Icon/Icon_youtube.png" alt=""></a>
                            <a href="https://www.instagram.com/ananasvn/"><img src="../Picture/Icon/Icon_Instaram.png" alt=""></a>
                        </div>
                    </div>
                    <div class="footer_content_item_email_input">
                        <h1>ĐĂNG KÝ NHẬN EMAIL</h1>
                        <div class="email_input">
                            <input type="text" placeholder="EMAIL">
                            <button>
                                <img src="../Picture/Icon/IconMuiTen.png">
                            </button>
                        </div>
                    </div>
                    <div class="footer_content_logo_text">
                        <img src="../Picture/Icon/Icon_Logo_Type_Text.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_2">
            <img src="../Picture/Img/Img_ThongbaoBoCongThuong.png">
            <p>Copyright © 2023 Footsteps In Fashion. All rights reserved.</p>
        </div>
    </footer>
    <script src="../JavaScript/FindShop.js"></script>
    <script src="../JavaScript/imf_user.js" type="text/javascript"></script>
</body>
</html>