<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footsteps In Fashion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Knewave&family=League+Spartan:wght@600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../CSS/product.css" type="text/css">
    <link rel="stylesheet" href="../CSS/dropAccount.css" type="text/css">
</head>

<body>
    <?php
        session_start();
        require_once 'ConnectData.php';
        $user_id = $_SESSION["user_id"]; 

        if ($connect->connect_error) {
            die('Kết nối không thành công: ' . $connect->connect_error);
        }
        function formatPrice($price) {
            return number_format($price, 0, '.');
        }
    ?>
    <div class="contract_static">
        <a href="https://www.facebook.com/profile.php?id=100090857135846"><img src="../Picture/Icon/Icon_Facebook.png" alt=""></a>
        <a href=""><img src="../Picture/Icon/Icon_youtube.png" alt=""></a>
        <a href=""><img src="../Picture/Icon/Icon_Instaram.png" alt=""></a>
    </div>
    <div class="cart_static">
        <p id="cart-item"></p>
        <a href="../PHP/cart.php">
            <img src="../Picture/Icon/Icon_cart_static.png">
        </a>
    </div>
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
                    <li><a href="../PHP/about_me.php">
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
        <div class="content_all">
            <div class="main_category">
                <div class="main_category_1 main_category_">
                    <ul>
                        <li>
                            <h1><a href="">TẤT CẢ</a></h1>
                        </li>
                        <li>
                            <h1><a href="">NAM</a></h1>
                        </li>
                        <li>
                            <h1><a href="">NỮ</a></h1>
                        </li>
                    </ul>
                </div>
                <div class="main_category_2 main_category_ main_category_text_title">
                    <h1>TRẠNG THÁI</h1>
                    <ul>
                        <li><input type="checkbox" class="form-check-input product-check" value="Limited Edition" id="product_state">Limited Edition</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="Online Only" id="product_state">Online Only</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="Sale off" id="product_state">Sale off</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="New Arrival" id="product_state">New Arrival</li>
                    </ul>
                </div>
                <div class="main_category_3 main_category_ main_category_text_title">
                    <h1>KIỂU DÁNG</h1>
                    <ul>
                        <li><input type="checkbox" class="form-check-input product-check" value="LT" id="product_design">Low Top</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="HT" id="product_design">High Top</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="Mid Top" id="product_design">Mid Top</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="ML" id="product_design">Mule</li>
                    </ul>
                </div>
                <div class="main_category_4 main_category_ main_category_text_title">
                    <h1>DÒNG SẢN PHẨM</h1>
                    <ul>
                        <li><input type="checkbox" class="form-check-input product-check" value="B" id="product_type">Batas</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="B" id="product_type">Batas</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="V" id="product_type">Vintas</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="P" id="product_type">Pattas</li>
                    </ul>
                </div>
                <div class="main_category_5 main_category_ main_category_text_title">
                    <h1>GIÁ</h1>
                    <ul>
                        <li><input type="checkbox" class="form-check-input product-check" value="200" id="product_price">200</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="> 200" id="product_price">> 200</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="> 300" id="product_price">> 300</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="> 400" id="product_price">> 400</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="> 500" id="product_price">> 500</li>
                    </ul>
                </div>
                <div class="main_category_6 main_category_ main_category_text_title">
                    <h1>CHẤT LIỆU</h1>
                    <ul>
                        <li><input type="checkbox" class="form-check-input product-check" value="Canvas" id="product_material">Canvas</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="Cottons" id="product_material">Cottons</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="Acrylic" id="product_material">Acrylic</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="Da" id="product_material">Da</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="Da lộn" id="product_material">Da lộn</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="Polyester" id="product_material">Polyester</li>
                    </ul>
                </div>
                <div class="main_category_7 main_category_ main_category_text_title">
                    <h1>MÀU SẮC</h1>
                    <ul>
                        <li><input type="checkbox" class="form-check-input product-check" value="blue" id="product_color">Blue</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="yellow" id="product_color">Yellow</li>
                        <li><input type="checkbox" class="form-check-input product-check" value="red" id="product_color">Red</li>
                    </ul>
                </div>
            </div>
            <div class="main_content">
    <div class="main_banner">
        <img src="../Picture/Img/Img_bannner_product.jpg" alt="">
    </div>
    <div class="main_product_content">
        <?php
        $sql = "SELECT p.product_id,
                    p.product_sex,
                    p.product_state,
                    p.product_design,
                    p.product_type,
                    p.product_image,
                    p.product_price,
                    p.product_material,
                    p.product_color,
                    p.product_description,
                    p.product_link
                    FROM products p";
        $result = $connect->query($sql);
        $rows = $result->num_rows;
        ?>
        <div class="show-result main_product_content" id="result">
            <?php
            if ($rows > 0) {
                while ($data = $result->fetch_assoc()) {
            ?>
                <div class='product_content_item'>
                    <div class='product_content_item_img'>
                        <a href='../PHP/<?php echo htmlspecialchars($data['product_link']); ?>'><img src='../Picture/Product/<?php echo htmlspecialchars($data['product_image']); ?>'></a>
                    </div>
                    <div class='product_content_item_inf'>
                        <p><?php echo htmlspecialchars($data['product_state']); ?></p>
                        <h2><a href='../PHP/<?php echo htmlspecialchars($data['product_link']); ?>'><?php echo htmlspecialchars($data['product_description']); ?></a></h2>
                        <p><?php echo htmlspecialchars($data['product_color']); ?></p>
                        <p><?php $formattedPrice = formatPrice($data['product_price']);
                            echo htmlspecialchars($formattedPrice);
                            ?> VND</p>
                    </div>
                </div>
            <?php
                }
            } else {
                echo "<div><ol start='1'><li>Check your spelling</li><li>Try using common names like jeans, t shirt</li></ol></div>";
            }
            ?>
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
    <?php $connect->close();?>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src="../JavaScript/index.js"></script>
    <script src="../JavaScript/filter.js"></script>
</body>

</html>