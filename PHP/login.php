<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footsteps In Fashion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=League+Spartan:wght@600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/login.css" type="text/css">
</head>
<body>
<?php
    session_start();
    //Yêu cầu kết nối với database
    require_once 'ConnectData.php';
    $emailLoginErr = $passwordLoginErr = "";
    $emailLogin = $passwordLogin = "";
    
    //Kiểm tra các trường dữ liệu
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["emailLogin"])) {
            $emailLoginErr = "* Email còn thiếu";
        } else {
            $emailLogin = test_input($_POST["emailLogin"]);
        }

        if (empty($_POST["passwordLogin"])) {
            $passwordLoginErr = "* Mật khẩu còn thiếu";
        } else {
            $passwordLogin = test_input($_POST["passwordLogin"]);
        }

        // Kiểm tra emailLogin và mật khẩu trong cơ sở dữ liệu
        $query = "SELECT user_id FROM user WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $emailLogin, $passwordLogin);
        $stmt->execute();
        $result = $stmt->get_result();

        // Kiểm tra xem có lỗi không
        if (empty($emailLoginErr) && empty($passwordLoginErr)) {
            if ($result->num_rows !== 0) {
                // Đăng nhập thành công, thực hiện các hành động sau đây
                $user = $result->fetch_assoc();
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION['emailLogin'] = $emailLogin;// Lưu user_id vào phiên làm việc

                // Chuyển hướng đến trang sau khi đăng nhập thành công
                header("Location: index.php");
                exit();
            } else {
                // Sai emailLogin hoặc mật khẩu, hiển thị thông báo lỗi
                $passwordLoginErr = "* Email hoặc mật khẩu không đúng";
            }
        }

    }
    // Hàm này dùng để kiểm tra và xử lý dữ liệu đầu vào
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

    <header>
        <div class="header_1">
            <ul>
                <li><a href=""><img src="../Picture/Icon/Icon_Box.png" alt="">Tra cứu đơn hàng </a></li>
                <li><a href=""><img src="../Picture/Icon/Icon_Location.png" alt="">Tìm cửa hàng</a></li>
                <li><a href=""><img src="../Picture/Icon/Icon_heart.png" alt="">Yêu thích</a></li>
                <li class="dropdown">
                    <?php
                    if (isset($_SESSION["emailLogin"])) {
                        // Nếu người dùng đã đăng nhập, hiển thị tên của họ
                        echo '<a href="profile.php"><img src="../Picture/Icon/Icon_Person.png" alt="">' . $_SESSION["emailLogin"] . '</a>';
                        echo '<div class="dropdown-content">
                                <a href="edit_profile.php">Chỉnh sửa thông tin cá nhân</a>
                                <a href="logout.php">Đăng xuất</a>
                            </div>';
                    } else {
                        // Nếu người dùng chưa đăng nhập, hiển thị "Đăng nhập"
                        echo '<a href="login.php"><img src="../Picture/Icon/Icon_Person.png" alt="">Đăng nhập</a>';
                    }
                    ?>
                </li>
                <li><a href=""><img src="../Picture/Icon/Icon_Cart.png" alt="">Giỏ hàng</a></li>
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
                        <a href="">NAM</a>
                        <div class="header_hover_product_category header_hover_product_male">
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
                        </div>
                    </li>
                    <li>
                        <a href="">NỮ</a>
                        <div class="header_hover_product_category header_hover_product_male">
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
                        </div>
                    </li>
                    <li><a href="">
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
        <div class="content">
            <h1>ĐĂNG NHẬP</h1>
            <div class="login">
                <div class="login_cover">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <label for="emailLogin">Email đăng nhập: </label>
                    <input type="text" id="emailLogin" placeholder="Email" name="emailLogin">
                    <br><span class="erorr"><?php echo $emailLoginErr;?></span>

                    <label for="userName">Mật khẩu: </label>
                    <input type="text" id="passwordLogin" placeholder="Mật khẩu" name="passwordLogin">
                    <br><span class="error"><?php echo $passwordLoginErr;?></span>

                    <button type="submit" id="login_button">ĐĂNG NHẬP</button>
                    <p>Bạn chưa là thành viên</p>
                    <div class="register">
                        <a href="register.php">ĐĂNG KÝ</a>
                    </div> 
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer_1">
            <div class="location_shop">
                <img src="../Picture/Icon/Icon_shop_location.png">
                <div class="button_findLocation">
                    <button>TÌM CỬA HÀNG</button>
                </div>
            </div>
            <div class="footer_content">
                <div class="footer_content_1">
                    <div class="footer_content_item">
                        <h1>SẢN PHẨM</h1>
                        <ul>
                            <li><a href="">Giày Nam</a></li>
                            <li><a href="">Giày Nữ</a></li>
                            <li><a href="">Thời trang</a></li>
                            <li><a href="">Sale-off</a></li>
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
                            <a href=""><img src="../Picture/Icon/Icon_Facebook.png" alt=""></a>
                            <a href=""><img src="../Picture/Icon/Icon_youtube.png" alt=""></a>
                            <a href=""><img src="../Picture/Icon/Icon_Instaram.png" alt=""></a>
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
</body>
</html>