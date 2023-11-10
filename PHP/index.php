<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footsteps In Fashion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=League+Spartan:wght@600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/index.css" type="text/css">
    <link rel="stylesheet" href="../CSS/dropAccount.css" type="text/css">
</head>
<body>
    <?php
        session_start();
        require_once 'ConnectData.php';
        if (isset($_SESSION["user_id"])) {
            $user_id = $_SESSION["user_id"];
        } else {
            $user_id = NULL;
        }
    ?>
    <div class="contract_static">
        <a href=""><img src="../Picture/Icon/Icon_Facebook.png" alt=""></a>
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
                <li>
                    <?php
                    if (isset($_SESSION["emailLogin"])) {
                        // Nếu người dùng đã đăng nhập, hiển thị tên của họ
                        echo '<a href="inf_user.php"><img src="../Picture/Icon/Icon_Person.png" alt="">' . $_SESSION["emailLogin"] . '</a>';
                    } else {
                        // Nếu người dùng chưa đăng nhập, hiển thị "Đăng nhập"
                        echo '<a href="login_V2.php"><img src="../Picture/Icon/Icon_Person.png" alt="">Đăng nhập</a>';
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
        <div class="slideshow-container">
            <div class="slide">
              <p>Free SHIPPING với hóa đơn từ 900.000</p>
            </div>
            <div class="slide">
              <p>Buy More pay less - Áp dụng khi mua phụ kiện</p>
            </div>
            <div class="slide">
              <p>hàng 2 tuần nhận đổi - Giày bảo hành nửa năm</p>
            </div>
            <div class="slide">
              <p>Buy 2 get 10 % off - Áp dụng với tất cả basis tee</p>
            </div>
        </div>
    </header>
    <main>
        <div class="main_contents content_1">
            <video src="../Video/THE WITNESS a cinematic sneaker video.mp4" autoplay muted loop></video>
        </div>
        <div class="main_contents content_2">
            <div class="content_2_1">
                <div class="content_hotNew">
                    <div class="content_img">
                        <a href=""><img src="../Picture/Img/Img_banner_hotnew_1.jpg"></a>
                    </div>
                    <div class="content_title">
                        <a href=""><h1>ALL BLACK IN BLACK</h1></a>
                        <a href=""><p>Mặc dù đượ ứng dụng rất nhiều, nhưng sắc đen lúc nào cũng toát lên một vẻ huyền bí không nhàm chán</p></a>
                    </div>
                </div>
                <div class="content_hotNew">
                    <div class="content_img">
                        <a href=""><img src="../Picture/Img/Img_banner_safeOf.jpg"></a>
                    </div>
                    <div class="content_title">
                        <a href=""><h1>OUTLET SALE</h1></a>
                        <a href=""><p>Danh mục những sản phẩm bán tại "giá tốt hơn" chỉ được bán kênh online - Online Only, chúng đã từng làm mưa làm gió một thời gian và hiện đang rơi vào tình trạng bể size, bể số.</p></a>
                    </div>
                </div>
            </div>
            <div class="content_2_2">
                <h1>DANH MỤC MUA HÀNG</h1>
                <div class="content_category">
                    <div class="category category_1">
                        <img src="../Picture/Img/Img_banner_shoes_category_male.png">
                        <div class="content_category">
                            <ul>
                                <li><a href="">GIÀY NAM</a></li>
                                <li><a href="">New Arrivals</a></li>
                                <li><a href="">Best Seller</a></li>
                                <li><a href="">Sale-off</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="category category_2">
                        <img src="../Picture/Img/Img_banner_shoes_category_female.png">
                        <div class="content_category">
                            <ul>
                                <li><a href="">GIÀY NỮ</a></li>
                                <li><a href="">New Arrivals</a></li>
                                <li><a href="">Best Seller</a></li>
                                <li><a href="">Sale-off</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="category category_3">
                        <img src="../Picture/Img/Img_banner_more_products.png">
                        <div class="content_category">
                            <ul>
                                <li><a href="">DÒNG SẢN PHẨM</a></li>
                                <li><a href="">Basas</a></li>
                                <li><a href="">Vintas</a></li>
                                <li><a href="">Urbas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_contents content_3">
            <img src="../Picture/Img/Img_banner_content_3.png">
        </div>
        <div class="main_contents content_4">
            <div class="content_new">
                <div class="content_new_element">
                    <h1>FACEBOOK</h1>
                    <div class="all_content_new">
                        <div class="content_new_item">
                            <div class="content_new_item_img">
                                <a href=""><img src="../Picture/Img/Img_content_new_1.jpg"></a>
                            </div>
                            <div class="content_new_item_title">
                                <a href=""><h2>URBAS CORLURAY PACK</h2></a>
                                <a href=""><p>Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể...</p></a>
                                <a href="">Đọc thêm</a>
                            </div>
                        </div>
                        <div class="content_new_item">
                            <div class="content_new_item_img">
                                <a href=""><img src="../Picture/Img/Img_content_new_1.jpg"></a>
                            </div>
                            <div class="content_new_item_title">
                                <a href=""><h2>URBAS CORLURAY PACK</h2></a>
                                <a href=""><p>Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể...</p></a>
                                <a href="">Đọc thêm</a>
                            </div>
                        </div>
                        <div class="content_new_item">
                            <div class="content_new_item_img">
                                <a href=""><img src="../Picture/Img/Img_content_new_1.jpg"></a>
                            </div>
                            <div class="content_new_item_title">
                                <a href=""><h2>URBAS CORLURAY PACK</h2></a>
                                <a href=""><p>Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể...</p></a>
                                <a href="">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_new_element">
                    <h1>TIN TỨC & BÀI VIẾT</h1>
                    <div class="all_content_new">
                        <div class="content_new_item">
                            <div class="content_new_item_img">
                                <a href=""><img src="../Picture/Img/Img_content_new_1.jpg"></a>
                            </div>
                            <div class="content_new_item_title">
                                <a href=""><h2>URBAS CORLURAY PACK</h2></a>
                                <a href=""><p>Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể...</p></a>
                                <a href="">Đọc thêm</a>
                            </div>
                        </div>
                        <div class="content_new_item">
                            <div class="content_new_item_img">
                                <a href=""><img src="../Picture/Img/Img_content_new_1.jpg"></a>
                            </div>
                            <div class="content_new_item_title">
                                <a href=""><h2>URBAS CORLURAY PACK</h2></a>
                                <a href=""><p>Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể...</p></a>
                                <a href="">Đọc thêm</a>
                            </div>
                        </div>
                        <div class="content_new_item">
                            <div class="content_new_item_img">
                                <a href=""><img src="../Picture/Img/Img_content_new_1.jpg"></a>
                            </div>
                            <div class="content_new_item_title">
                                <a href=""><h2>URBAS CORLURAY PACK</h2></a>
                                <a href=""><p>Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể...</p></a>
                                <a href="">Đọc thêm</a>
                            </div>
                        </div>
                        <div class="content_new_item">
                            <div class="content_new_item_img">
                                <a href=""><img src="../Picture/Img/Img_content_new_1.jpg"></a>
                            </div>
                            <div class="content_new_item_title">
                                <a href=""><h2>URBAS CORLURAY PACK</h2></a>
                                <a href=""><p>Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể...</p></a>
                                <a href="">Đọc thêm</a>
                            </div>
                        </div>
                        <div class="content_new_item">
                            <div class="content_new_item_img">
                                <a href=""><img src="../Picture/Img/Img_content_new_1.jpg"></a>
                            </div>
                            <div class="content_new_item_title">
                                <a href=""><h2>URBAS CORLURAY PACK</h2></a>
                                <a href=""><p>Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể...</p></a>
                                <a href="">Đọc thêm</a>
                            </div>
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
    <?php $connect->close();?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src="../JavaScript/index.js"></script>
</body>
</html>