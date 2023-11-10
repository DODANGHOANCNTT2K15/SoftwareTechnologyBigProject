<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footsteps In Fashion</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Knewave&family=League+Spartan:wght@600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../CSS/inside_product.css" type="text/css">
    <link rel="stylesheet" href="../CSS/0004_NALTUPPT.css" type="text/css"> <!-- CSS riêng cho sản phẩm  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <?php
        session_start();
        require_once 'ConnectData.php';
        $user_id = $_SESSION["user_id"];
        $product_id = 5;

        $sql = "SELECT * FROM cart WHERE user_id = ? AND product_id = ?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("ii", $user_id, $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
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
                <li class="dropdown">
                    <?php
                    if (isset($_SESSION["emailLogin"])) {
                        // Nếu người dùng đã đăng nhập, hiển thị tên của họ
                        echo '<a href="inf_user.php"><img src="../Picture/Icon/Icon_Person.png" alt="">' . $_SESSION["emailLogin"] . '</a>';
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
    <div class="main-content">
        <div class="classify">
            <a href="">Giày</a>
            <a href="">Track 6</a>
            <a href="">Track 6 2.Blues - Low Top</a>
        </div>
        <div class="main-infor">
            <div class="image">
                <div class="main-image">
                    <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_02.jpeg" alt="" id="mainImage">
                </div>
                <div class="second-image">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <ul class="carousel">
                        <li class="card">
                            <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_01.jpeg" alt="img" draggable="false" onclick="changeMainImage(this)">
                        </li>
                        <li class="card">
                            <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_02.jpeg" alt="img" draggable="false" onclick="changeMainImage(this)">
                        </li>
                        <li class="card">
                            <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_03.jpeg" alt="img" draggable="false" onclick="changeMainImage(this)">
                        </li>
                        <li class="card">
                            <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_03.jpeg" alt="img" draggable="false" onclick="changeMainImage(this)">
                        </li>
                        <li class="card">
                            <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_04.jpeg" alt="img" draggable="false" onclick="changeMainImage(this)">
                        </li>
                        <li class="card">
                            <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_05.jpeg" alt="img" draggable="false" onclick="changeMainImage(this)">
                        </li>
                        <li class="card">
                            <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_06.jpeg" alt="img" draggable="false" onclick="changeMainImage(this)">
                        </li>
                    </ul>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                </div>           
            </div>
            <div class="infor">
                <h1>TRACK 6 2.BLUES - LOW TOP - BLUEWASH</h1>
                <p>Mã sản phẩm: <span>0004_NALTUPPT</span></p>
                <h3>1.290.000 VND</h3>
                <div class="color">
                    <a href="../PHP/0002_NALTUBCV.php"><button id="btn_color_1"></button></a>
                    <a href="#"><button id="btn_color_2"></button></a>
                </div>
                <form action="" class="form-submit" onsubmit="<?php echo ($result->num_rows > 0) ? 'return false' : 'return true'; ?>">
                    <div class="size_quantity">
                        <div class="size-control">
                            <label for="size">SIZE</label><br>
                                <select name="size" class="size">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                        </div>
                        <div class="quantity-control">
                            <label for="quantity">SỐ LƯỢNG</label><br>
                            <input type="number" class="quantity" name="quantity" value="1">
                        </div>
                    </div>
                    <input type="hidden" class="product_id" value="5">
                    <input type="hidden" class="product_price" value="1290000">
                    <div class="add-cart_heart">
                        <button type="button" class="addItemBtn"><?php echo ($result->num_rows > 0) ? 'Đã có trong giỏ' : 'Thêm vào giỏ hàng'; ?></button>
                        <button type="button" id=""><ion-icon name="heart-outline"></ion-icon></button>
                    </div>
                    <button class="addItemBtn" id="pay-button">THANH TOÁN</button>
                </form>
                <div class="dropdown-detail">
                    <button onclick="function_1()" class="dropbtn dropbtn1">THÔNG TIN SẢN PHẨM</button>
                    <div id="myDropdown1" class="dropdown-content content1">
                      <p>Gender: Unisex<br>
                        Size run: 35-46<br>
                        Upper: Canvas NE<br>
                        Outsole: Rubber</p>
                        <img src="../Picture/Img/Img_size_shoes.jpg" alt="">
                    </div>
                </div>
                <div class="dropdown-detail">
                    <button onclick="function_2()" class="dropbtn dropbtn2">QUY ĐỔI SẢN PHẨM</button>
                    <div id="myDropdown2" class="dropdown-content content2">
                      <p>Đối với những sản phẩm giày và thời trang thuộc phiên bản giới hạn. Vì nhiều lý do chúng tôi sẽ không áp dụng chính sách đổi hàng. Vui lòng cân nhắc kỹ trước khi quyết định mua.</p>
                    </div>
                </div>
                <div class="dropdown-detail">
                    <button onclick="function_3()" class="dropbtn dropbtn3">BẢO HÀNH THẾ NÀO?</button>
                    <div id="myDropdown3" class="dropdown-content content3">
                      <p>Đối với các sản phẩm thuộc nhóm Nửa trên và Nửa dưới, chính sách bảo hành sẽ không được áp dụng. Tuy nhiên bạn có thể áp dụng chính sách đổi hàng cho các sản phẩm này theo quy định về thời gian và phương thức được ghi rõ như trên.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative-infor">
        <h3>SẢN PHẨM LIÊN QUAN</h3>
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel_2">
                <li class="card_2">
                    <img src="../Picture/Product/0000_NALTMBCV/0000_NALTMBVC_02.jpeg" alt="img" draggable="false">
                    <a href="0000_NALTMBCV.php">PATTAS TOMO - LOW TOP - BLARNEY</a>
                    <div class="color_name">GREEN</div>
                    <div class="price">720.000 VND <span></span></div>
                </li>
                <li class="card_2">
                    <img src="../Picture/Product/0001_NAHTUBCV/0001_NAHTUBCV_02.jpg" alt="img" draggable="false">
                    <a href="0001_NAHTUBCV.php">Basas Bumper Gum EXT NE - High Top</a>
                    <div class="color_name">WHITE</div>
                    <div class="price">590.000 VND <span></span></div>
                </li>
                <li class="card_2">
                    <img src="../Picture/Product/0002_NALTUBCV/0002_NALTUBCV_02.jpeg" alt="img" draggable="false">
                    <a href="0002_NALTUBCV.php">Track 6 2.Blues - Low Top</a>
                    <div class="color_name">BLUE</div>
                    <div class="price">1.190.000 VND <span></span></div>
                </li>
                <li class="card_2">
                    <img src="../Picture/Product/0003_NALTUBCV/0003_NALTUBCV_02.jpeg" alt="img" draggable="false">
                    <a href="0003_NALTUBCV.php">VINTAS JAZICO - LOW TOP - ROYAL WHITE</a>
                    <div class="color_name">WHITE</div>
                    <div class="price">720.000 VND <span></span></div>
                </li>
                <li class="card_2">
                    <img src="../Picture/Product/0004_NALTUPPT/0004_NALTUPPT_02.jpeg" alt="img" draggable="false">
                    <a href="0004_NALTUPPT.php">Track 6 2.Blues - Low Top</a>
                    <div class="color_name">BLUE</div>
                    <div class="price">1.290.000 VND <span></span></div>
                </li>
                <li class="card_2">
                    <img src="../Picture/Product/0005_NAHTUVCT/0005_NAHTUVCT_02.jpeg" alt="img" draggable="false">
                    <a href="0005_NAHTUVCT.php">Urbas Corluray Mix - High Top</a>
                    <div class="color_name">BROWN</div>
                    <div class="price">650.000 VND <span></span></div>
                </li>
                <li class="card_2">
                    <img src="../Picture/Product/0006_NALTUVCT/0006_NALTUVCT_02.jpeg" alt="img" draggable="false">
                    <a href="0006_NALTUVCT.php">Urbas Corluray Mix -  Low Top</a>
                    <div class="color_name">BROWN</div>
                    <div class="price">610.000 VND <span></span></div>
                </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script type="text/javascript">
        $(document).ready(function() {
        // Send product details in the server
        $(".addItemBtn").click(function(e) {
        e.preventDefault();
        var $form = $(this).closest(".form-submit");
        var size = $form.find(".size").val();
        var quantity = $form.find(".quantity").val();
        var product_id = $form.find(".product_id").val();
        var product_price = $form.find(".product_price").val();

        $.ajax({
            url: 'Cart_action.php',
            method: 'post',
            data: {
                product_id: product_id,
                product_price: product_price,
                quantity: quantity,
                size: size
            },
            success: function(response) {
                location.reload(true);
                load_cart_item_number();
            }
        });
        });
        // Load total no.of items added in the cart and display in the navbar
        load_cart_item_number();

        function load_cart_item_number() {
            $.ajax({
            url: 'cart_action.php',
            method: 'get',
            data: {
                cartItem: "cart_item"
            },
            success: function(response) {
            $("#cart-item").html(response);
            }
            });
        }       
        });
    </script>
    <script src="../JavaScript/inside_product.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php $connect->close();?>
</body>
</html>