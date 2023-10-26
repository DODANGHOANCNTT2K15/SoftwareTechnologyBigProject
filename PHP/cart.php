<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footsteps In Fashion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=League+Spartan:wght@600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/cart.css" type="text/css">
    <link rel="stylesheet" href="../CSS/dropAccount.css" type="text/css">
</head>
<body>
    <?php
         session_start();
    ?>
    <div class="contract_static">
        <a href=""><img src="../Picture/Icon/Icon_Facebook.png" alt=""></a>
        <a href=""><img src="../Picture/Icon/Icon_youtube.png" alt=""></a>
        <a href=""><img src="../Picture/Icon/Icon_Instaram.png" alt=""></a>
    </div>
    <div class="cart_static">
        <p>0</p>
        <a href="cart.PHP">
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
                <li><a href="cart.PHP"><img src="../Picture/Icon/Icon_Cart.png" alt="">Giỏ hàng</a></li>
            </ul>
        </div>
        <div class="header_2">
            <div class="header_logo">
                <a href="index.PHP"><img src="../Picture/Icon/Icon_logo.png"></a>
            </div>
            <div class="header_category">
                <ul>
                    <li>
                        <a href="product.PHP">SẢN PHẨM</a>
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
                                <a href="SaleOff.PHP">
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
                    <li><a href="about_me.PHP">
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
            <div class="left">
                <div class="left_top">
                    <div class="left_top_header">
                        <h1>BẠN CÓ CẦN THÊM ?</h1>
                    </div>
                    <div class="left_top_add_product">
                        <div class="add_product">
                            <div class="add_product_left">
                                <a href=""><img src="../Picture/Product/NAMLUBCT00001/_01_black.jpeg"></a>
                            </div>
                            <div class="add_product_right">
                                <a href="">PATTAS TOMO - LOW TOP - BLARNEY</a>
                                <div class="add_product_right_p">
                                    <p>Yellow</p>
                                    <p>New Arrivals</p>
                                    <p>500.000 VND</p>
                                </div>
                                <button type="button">THÊM</button>
                            </div>
                        </div>
                        <div class="add_product">
                            <div class="add_product_left">
                                <a href=""><img src="../Picture/Product/NAMLUBCT00001/_01_black.jpeg"></a>
                            </div>
                            <div class="add_product_right">
                                <a href="">PATTAS TOMO - LOW TOP - BLARNEY</a>
                                <div class="add_product_right_p">
                                    <p>Yellow</p>
                                    <p>New Arrivals</p>
                                    <p>500.000 VND</p>
                                </div>
                                <button type="button">THÊM</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left_bottom">
                    <div class="left_bottom_header">
                        <h1>GIỎ HÀNG</h1>
                    </div>
                    <div class="cover_product">
                        <div class="product">
                            <div class="product_img">
                                <img src="../Picture/Product/NAMLUBCT00001/_02_white.jpeg">
                            </div>
                            <div class="product_imf">
                                <h1>PATTAS TOMO - LOW TOP - BLARNEY</h1>
                                <p>Giá: 220.000 VND</p>
                                <div class="select">
                                    <div class="size">
                                        <h1>SIZE</h1>
                                        <select>
                                            <option selected value="M">M</option>
                                        </select>
                                    </div>
                                    <div class="size">
                                        <h1>Số lượng</h1>
                                        <select>
                                            <option selected value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="delect">
                                <h1>220.000VND</h1>
                                <p>Còn hàng</p>
                                <button type="button">
                                    <img src="../Picture/Icon/Icon_heart_2.png" > 
                                </button>
                                <button type="button">
                                    <img src="../Picture/Icon/Icon_THUNGRAC.png" >
                                </button>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <img src="../Picture/Product/NAMLUBCT00001/_02_white.jpeg">
                            </div>
                            <div class="product_imf">
                                <h1>PATTAS TOMO - LOW TOP - BLARNEY</h1>
                                <p>Giá: 220.000 VND</p>
                                <div class="select">
                                    <div class="size">
                                        <h1>SIZE</h1>
                                        <select>
                                            <option selected value="M">M</option>
                                        </select>
                                    </div>
                                    <div class="size">
                                        <h1>Số lượng</h1>
                                        <select>
                                            <option selected value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="delect">
                                <h1>220.000VND</h1>
                                <p>Còn hàng</p>
                                <button type="button">
                                    <img src="../Picture/Icon/Icon_heart_2.png" > 
                                </button>
                                <button type="button">
                                    <img src="../Picture/Icon/Icon_THUNGRAC.png" >
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="back">
                        <button type="button">XÓA HẾT</button>
                        <div class="back_home">
                            <a href="product.PHP">QUAY LẠI MUA HÀNG</a>
                        </div>
                    </div>           
                </div>
            </div>
            <div class="right">
                <div class="right_cover">
                    <h1>ĐƠN HÀNG</h1>
                    <div class="right_input_discount cover">
                        <h2>NHẬP MÃ KHUYỄN MÃI</h2>
                        <div class="input_cover">
                            <input type="text" >
                            <button type="button">ÁP DỤNG</button>
                        </div>
                    </div>
                    <div class="money_component cover">
                        <div class="component_order">
                            <p>Đơn hàng</p>
                            <p>Giảm</p>
                        </div>
                        <div class="component_safe">
                            <p>940.000 VND</p>
                            <p>0 VND</p>
                        </div>
                    </div>
                    <div class="total_payment">
                        <div class="title_total">
                            <h2>TẠM TÍNH</h2>
                            <h2>940.000 VND</h2>
                        </div>
                        <div class="payment">
                            <a href="pay.PHP">TIẾP TỤC THANH TOÁN</a>
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