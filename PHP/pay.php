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
    <link rel="stylesheet" href="../CSS/pay.css" type="text/css">
</head>
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
        } else {
            echo "Không tìm thấy dữ liệu cho user_id: $user_id";
        }
    } else {
        echo "Lỗi trong quá trình thực hiện truy vấn: " . $stmt->error;
    }
?>
<body>
    <div class="contract_static">
        <a href="https://www.facebook.com/Ananas.vietnam/"><img src="../Picture/Icon/Icon_Facebook.png" alt=""></a>
        <a href="https://www.youtube.com/discoveryou"><img src="../Picture/Icon/Icon_youtube.png" alt=""></a>
        <a href="https://www.instagram.com/ananasvn/"><img src="../Picture/Icon/Icon_Instaram.png" alt=""></a>
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
                <li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+H%E1%BB%8Dc+Phenikaa/@20.9626112,105.7486864,17z/data=!3m1!4b1!4m6!3m5!1s0x313452efff394ce3:0x391a39d4325be464!8m2!3d20.9626112!4d105.7486864!16s%2Fg%2F1220whsz?entry=ttu"><img src="../Picture/Icon/Icon_Location.png" alt="">Tìm cửa hàng</a></li>
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
                <li><a href="cart.php"><img src="../Picture/Icon/Icon_Cart.png" alt="">Giỏ hàng</a></li>
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
                                <a href="product_Nam.php">
                                    <div class="img_category_product">
                                        <img src="../Picture/Img/Img_header_category_1.jpg">
                                    </div>
                                    <h1>CHO NAM</h1>
                                </a>
                            </div>
                            <div class="category_product_hover">
                                <a href="product_Nu.php">
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
                    </li>
                    <li>
                        <a href="product_Nu.php">NỮ</a>
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
        <form action="" method="post" id="placeOrder">
            <div class="content_all">
            <div class="left">
                <div class="left_top">
                    <h1>THÔNG TIN GIAO HÀNG</h1>
                    <input type="text" name="fullName" value="<?php echo $data['fullName'];?>">
                    <input type="text" name="phoneNumber" value="<?php echo $data['phoneNumber'];?>">
                    <input type="text" name="email" value="<?php echo $data['email'];?>">
                    <input type="text" name="address" value="<?php echo $data['address'];?>">
                </div>
                <div class="left_bottom">
                    <h1>PHƯƠNG THỨC THANH TOÁN</h1>
                    <select name="pmode" id="">
                        <option value="" selected disabled>-Chọn phương thức thanh toán-</option>
                        <option value="cod">Tiền mặt khi nhận hàng</option>
                        <option value="netbanking">Chuyển khoản</option>
                        <option value="cards">Thẻ tín dụng</option>
                    </select>
                </div>
            </div>
            <div class="right">
                <div class="right_cover">
                    <h1>ĐƠN HÀNG</h1>
                    <?php
                        $grand_total = 0;
                        function formatPrice($price) {
                            return number_format($price, 0, '.');
                        } 
                        if ($connect->connect_error) {
                            die('Kết nối không thành công: ' . $connect->connect_error);
                        } else {
                            $sql = "SELECT cart.*, products.*, CONCAT(products.product_description, ' (', cart.quantity, ')') AS ItemQty
                                    FROM cart
                                    JOIN products ON cart.product_id = products.product_id
                                    WHERE cart.user_id = ?";

                            $stmt = $connect->prepare($sql);
                            $stmt->bind_param("i", $user_id);
                            $stmt->execute();
                            $result_2 = $stmt->get_result();
                        }

                        if ($result_2->num_rows > 0) {
                        while ($row_2 = $result_2->fetch_assoc()) {
                            $formattedPrice = formatPrice($row_2["product_price"]);
                            $fomattedTotalPrice = formatPrice($row_2["total_price"]);
                            $grand_total += $row_2['total_price'];
                            $items[] = $row_2['ItemQty'];
                ?>
                    <div class="money_component cover">
                        <div class="component_order">
                            <p><?php echo $row_2['product_description'];?></p>
                            <p>Size: <?php echo $row_2['size'];?></p>
                        </div>
                        <div class="component_safe">
                            <p><?php echo $formattedPrice?> VND</p>
                            <p>x <?php echo $row_2['quantity'];?></p>
                        </div>
                    </div>
                <?php
                    }
                    $allItems = implode(', ', $items);
                    } else {
                        echo "<p style=\"font-size: 25px\">Hãy chọn cho mình những đôi giày thật ưng ý !!</p>";
                    }
                ?>
                    <div class="money_component cover">
                        <div class="component_order">
                            <p>Đơn hàng</p>
                            <p>Giảm</p>
                        </div>
                        <div class="component_safe">
                            <p><?php echo formatPrice($grand_total);?></p>
                            <p>0 VND</p>
                        </div>
                    </div>
                    <div class="total_payment">
                        <div class="title_total">
                            <h2>TỔNG CỘNG</h2>
                            <h2><?php echo formatPrice($grand_total);?> VND</h2>
                        </div>
                    <input type="hidden" name="products" value="<?= $allItems; ?>">
                    <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user_id?>">
                    <input type="submit" name="submit" value="Hoàn tất thanh toán" id="orderBtn" class="payment" style="cursor: pointer; color: white;">
                    </div>
                </div>
            </div>
            </div>
        </form>
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
    <?php $connect->close();?>
    <script src="../JavaScript/FindShop.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#placeOrder").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'Cart_action.php',
            method: 'post',
            data: $('form').serialize() + "&action=order",
            success: function(response) {
            $(".content_all").html(response);
        }
        });
    });
  });
  </script>
  <script src="../JavaScript/index.js"></script>
</body>
</html>