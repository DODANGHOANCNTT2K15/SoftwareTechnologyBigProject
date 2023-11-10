<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footsteps In Fashion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=League+Spartan:wght@600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/register.css" type="text/css">
</head>
<body>
<?php
    // Yêu cầu kết nối với database
    require_once 'ConnectData.php';
    $email = $phoneNumber = $passWord = $fullName = "";

    // Kiểm tra các trường dữ liệu
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "* Email là bắt buộc";
        } else {
            $email = test_input($_POST["email"]);
        }

        // Kiểm tra email đăng ký đã tồn tại chưa
        $checkEmailQuery = "SELECT * FROM user WHERE email = ?";
        $checkEmailStmt = $conn->prepare($checkEmailQuery);
        $checkEmailStmt->bind_param("s", $email);
        $checkEmailStmt->execute();
        $result = $checkEmailStmt->get_result();

        if (empty($_POST["phoneNumber"])) {
            $phoneNumberErr = "* Số điện thoại là bắt buộc";
        } else {
            $phoneNumber = test_input($_POST["phoneNumber"]);
        }

        if (empty($_POST["passWord"])) {
            $passWordErr = "* Mật khẩu là bắt buộc";
        } else {
            $passWord = test_input($_POST["passWord"]);
        }

        if (empty($_POST["fullName"])) {
            $fullNameErr = "* Họ và tên là bắt buộc";
        } else {
            $fullName = test_input($_POST["fullName"]);
        }

        if ($result->num_rows > 0) {
            // Email đã tồn tại trong cơ sở dữ liệu, thông báo lỗi
            $emailErr = "* Email đăng ký đã tồn tại";
        } else {
            // Email không tồn tại trong cơ sở dữ liệu, tiếp tục chèn dữ liệu
            if (empty($emailErr) && empty($phoneNumberErr) && empty($passWordErr) && empty($fullNameErr)) {
                if ($conn->connect_error) {
                    die('Kết nối không thành công : ' . $conn->connect_error);
                } else {
                    // Chèn dữ liệu người dùng mới vào bảng 'user'
                    $stmt = $conn->prepare("INSERT INTO user (email, phoneNumber, passWord, fullName) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $email, $phoneNumber, $passWord, $fullName);

                    if ($stmt->execute()) {
                        // Sau khi chèn thành công, tiếp tục truy vấn user_id của người dùng
                        $user_id = $stmt->insert_id;

                        // Mã SQL để chèn một giỏ hàng mới cho người dùng
                        $insertCartQuery = "INSERT INTO Cart (user_id, product_id, quantity ) VALUES (?, Null, ?)";
                        $initialQuantity = 0; // Số lượng ban đầu của giỏ hàng (có thể là 0)
                        $stmt = $conn->prepare($insertCartQuery);
                        $stmt->bind_param("ii", $user_id, $initialQuantity);

                        if ($stmt->execute()) {
                            // Giỏ hàng đã được tạo cho người dùng mới đăng ký
                            header("Location: register_success.php");
                            exit;
                        } else {
                            echo "Lỗi khi thêm giỏ hàng: " . $stmt->error;
                        }
                    } else {
                        echo "Lỗi khi thêm dữ liệu: " . $stmt->error;
                    }

                    $stmt->close();
                    $conn->close();
                }
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
                <li><a href="login.php"><img src="../Picture/Icon/Icon_Person.png" alt="">Đăng nhập</a></li>
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
            <h1>ĐĂNG KÝ THÀNH VIÊN</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form_group">
                    <label for="input_1">Email của bạn</label>
                    <input placeholder="Email" type="text" value="<?php echo $email;?>" id="input_1" name="email">
                    <br><span class="error"><?php echo $emailErr;?></span>
                </div>
                <div class="form_group">
                    <label for="input_2">Điện thoại</label>
                    <input placeholder="Số điện thoại" type="text" value="<?php echo $phoneNumber?>" id="input_2" name="phoneNumber">
                    <br><span class="error"><?php echo $phoneNumberErr?></span>
                </div>
                <div class="form_group">
                    <label for="input_3">Mật khẩu của bạn</label>
                    <input placeholder="Mật khẩu" type="text" value="<?php echo $passWord?>" id="input_3" name="passWord">
                    <br><span class="error"><?php echo $passWordErr?></span>
                </div>
                <div class="form_group">
                    <label for="input_4">Họ và tên</label>
                    <input placeholder="Vui lòng nhập tên tiếng Việt có dấu" type="text" value="<?php echo $fullName?>" id="input_4" name="fullName">
                    <br><span class="error"><?php echo $fullNameErr?></span>
                </div>
                <div class="form_group checkbox_form">
                    <input type="checkbox" value id="input_5" name="subscribe" value="yes">
                    <label for="input_5">Tôi đăng ký vào danh sách gửi thư và đồng ý với điều khoản sử dụng của Footsteps In Fashion</label>
                </div>
                <div class="register">
                    <button type="submit">ĐĂNG KÝ</button>
                </div>
                <div class="login">
                    <a href="login.php">Đăng nhập</a>
                </div>
            </form>
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