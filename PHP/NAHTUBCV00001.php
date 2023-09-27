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
    <link rel="stylesheet" href="../CSS/inside_product.css" type="text/css">
    <link rel="stylesheet" href="../CSS/NAHTUBCV00001.css" type="text/css"> <!-- CSS riêng cho sản phẩm  -->
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
        <a href="">
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
        <div class="content content_1">
            <div class="content_left">
                <div class="content_left_img_main">
                    <img src="../Picture/Product/NAHTUBCV00001/_01_white.jpg" id="mainImage">
                </div>
                <div class="content_left_img_main_second">
                    <div class="content_left_img_cover"><img src="../Picture/Product/NAHTUBCV00001/_01_white.jpg" alt=""
                            onclick="changeMainImage(this)" id="secondImg1"></div>
                    <div class="content_left_img_cover"><img src="../Picture/Product/NAHTUBCV00001/_02_white.jpg" alt=""
                            onclick="changeMainImage(this)" id="secondImg2"></div>
                    <div class="content_left_img_cover"><img src="../Picture/Product/NAHTUBCV00001/_03_white.jpg" alt=""
                            onclick="changeMainImage(this)" id="secondImg3"></div>
                    <div class="content_left_img_cover"><img src="../Picture/Product/NAHTUBCV00001/_04_white.jpg" alt=""
                            onclick="changeMainImage(this)" id="secondImg4"></div>
                </div>
            </div>
            <div class="content_right">
                <div class="content_right_select content_inf_main">
                    <h1>BASAS BUMPER GUM EXT NE - HIGH TOP - OFFWHITE/GUM</h1>
                    <p>Mã sản phẩm : <span>AV00115</span></p>
                    <p>Tình trạng : <span>New Arrival</span></p>
                    <p>650.000 VND</p>
                </div>
                <div class="content_right_select content_color">
                    <!--Các button chọn màu-->
                    <div class="color color_1">
                        <button onclick="color_white()"></button>
                    </div>
                    <div class="color color_2">
                        <button onclick="color_white()"></button>
                    </div>
                </div>
                <div class="content_right_select">
                    <div class="select_sizeAndDiamondsuit">
                        <div class="size">
                            <h1>SIZE</h1>
                            <select>
                                <option value="36" selected>36</option>
                                <option value="">37</option>
                                <option value="">38</option>
                                <option value="">39</option>
                                <option value="">40</option>
                                <option value="">41</option>
                                <option value="">42</option>
                            </select>
                        </div>
                        <div class="amount">
                            <h1>SỐ LƯỢNG</h1>
                            <select>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="addCartAndHeart">
                        <button>THÊM VÀO GIỎ HÀNG</button>
                        <button>
                            <img src="../Picture/Icon/Icon_heart_2.png">
                        </button>
                    </div>
                    <div class="pay">
                        <a href="">THANH TOÁN</a>
                    </div>
                </div>
                <div class="content_right_select">
                    <h1>THÔNG TIN SẢN PHẨM</h1>
                    <div class="content_imf">
                        <ul>
                            <li>Sex; Unisex</li>
                            <li>Chất liệu: Canvas</li>
                            <li>Thể loại: Low Top</li>
                        </ul>
                    </div>
                    <img src="../Picture/Img/Img_size_shoes.jpg">
                </div>
                <div class="content_right_select">
                    <h1>QUY ĐỔI SẢN PHẨM</h1>
                    <ul>
                        <li>Chỉ đổi hàng 1 lần duy nhất, mong bạn cân nhắc kĩ trước khi quyết định.</li>
                        <li>Thời hạn đổi sản phẩm khi mua trực tiếp tại cửa hàng là 07 ngày, kể từ ngày mua. Đổi sản
                            phẩm khi mua online là 14 ngày, kể từ ngày nhận hàng.</li>
                        <li>Sản phẩm đổi phải kèm hóa đơn. Bắt buộc phải còn nguyên tem, hộp, nhãn mác.</li>
                        <li>Sản phẩm đổi không có dấu hiệu đã qua sử dụng, không giặt tẩy, bám bẩn, biến dạng.</li>
                        <li>Trong trường hợp sản phẩm - size bạn muốn đổi không còn hàng trong hệ thống. Vui lòng chọn
                            sản phẩm khác.</li>
                        <li>Không hoàn trả bằng tiền mặt dù bất cứ trong trường hợp nào. Mong bạn thông cảm.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content content_2">
            <h1>ĐỀ XUẤT CHO BẠN</h1>
            <div class="product_recomment">
                <div class="product_recomment_item">
                    <div class="product_recomment_item_cover">
                        <a href=""><img src="../Picture/Img_shoes/Img_shoes_1.jpg"></a>
                    </div>
                    <div class="product_recomment_item_title">
                        <h1><a href="">TOMO - LOW TOP - BLARNEY</a></h1>
                        <p>Red</p>
                        <p>730.000 VND</p>
                    </div>
                </div>
                <div class="product_recomment_item">
                    <div class="product_recomment_item_cover">
                        <a href=""><img src="../Picture/Img_shoes/Img_shoes_1.jpg"></a>
                    </div>
                    <div class="product_recomment_item_title">
                        <h1><a href="">TOMO - LOW TOP - BLARNEY</a></h1>
                        <p>Red</p>
                        <p>730.000 VND</p>
                    </div>
                </div>
                <div class="product_recomment_item">
                    <div class="product_recomment_item_cover">
                        <a href=""><img src="../Picture/Img_shoes/Img_shoes_1.jpg"></a>
                    </div>
                    <div class="product_recomment_item_title">
                        <h1><a href="">TOMO - LOW TOP - BLARNEY</a></h1>
                        <p>Red</p>
                        <p>730.000 VND</p>
                    </div>
                </div>
                <div class="product_recomment_item">
                    <div class="product_recomment_item_cover">
                        <a href=""><img src="../Picture/Img_shoes/Img_shoes_1.jpg"></a>
                    </div>
                    <div class="product_recomment_item_title">
                        <h1><a href="">TOMO - LOW TOP - BLARNEY</a></h1>
                        <p>Red</p>
                        <p>730.000 VND</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content_2">
            <h1>SẢN PHẨM ĐÃ XEM</h1>
            <div class="product_recomment">
                <div class="product_recomment_item">
                    <div class="product_recomment_item_cover">
                        <a href=""><img src="../Picture/Img_shoes/Img_shoes_1.jpg"></a>
                    </div>
                    <div class="product_recomment_item_title">
                        <h1><a href="">TOMO - LOW TOP - BLARNEY</a></h1>
                        <p>Red</p>
                        <p>730.000 VND</p>
                    </div>
                </div>
                <div class="product_recomment_item">
                    <div class="product_recomment_item_cover">
                        <a href=""><img src="../Picture/Img_shoes/Img_shoes_1.jpg"></a>
                    </div>
                    <div class="product_recomment_item_title">
                        <h1><a href="">TOMO - LOW TOP - BLARNEY</a></h1>
                        <p>Red</p>
                        <p>730.000 VND</p>
                    </div>
                </div>
                <div class="product_recomment_item">
                    <div class="product_recomment_item_cover">
                        <a href=""><img src="../Picture/Img_shoes/Img_shoes_1.jpg"></a>
                    </div>
                    <div class="product_recomment_item_title">
                        <h1><a href="">TOMO - LOW TOP - BLARNEY</a></h1>
                        <p>Red</p>
                        <p>730.000 VND</p>
                    </div>
                </div>
                <div class="product_recomment_item">
                    <div class="product_recomment_item_cover">
                        <a href=""><img src="../Picture/Img_shoes/Img_shoes_1.jpg"></a>
                    </div>
                    <div class="product_recomment_item_title">
                        <h1><a href="">TOMO - LOW TOP - BLARNEY</a></h1>
                        <p>Red</p>
                        <p>730.000 VND</p>
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
    <script src="../JavaScript/inside_product.js"></script>
    <script src="../JavaScript/NAHTUBCV00001.js"></script> <!--JavsScript riêng cho sản phẩm-->
</body>

</html>