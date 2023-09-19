<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="HomePage.css">
</head>
<body>
    <header>
        <div class="headerSquare">
            <img src="..\Picture\logo.png" class="logo" align="left">
            <ul class="ulTextHeader">
                <li class="liForTextHeader">
                    <a href="./HomePage.php" class="linkHeader"><font class="forTextHeader">Trang chủ</font></a>
                </li>
                <li class="liForTextHeader">
                    <a href="#" class="linkHeader"><font class="forTextHeader">Cửa hàng</font></a>
                </li>
                <li class="liForTextHeader">
                    <a href="./New.php" class="linkHeader"><font class="forTextHeader">Thông tin</font></a>
                </li>
                <li class="liForTextHeader">
                    <a href="./Person.php" class="linkHeader"><font class="forTextHeader">Cá nhân</font></a>
                </li>
                <li class="liForTextHeader">
                    <a href="./InfOfUs.php class="linkHeader"><font class="forTextHeader">Liên hệ</font></a>
                </li>
            </ul>
            <label for="login" style="margin-top: 15px; margin-right: 20px;">
                <button name="loginButton" class="buttonLogin" value="loginButton">
                    <a href="Login.php" id="login"><font class="forTextButton">Đăng Nhập</font></a> 
                </button>
            </label>       
        </div>
    </header>
    <div class="mainDiv">
        <div class="FirstSee">
            <video autoplay loop muted src="../Video/videoFirst.mp4" width="100%"></video>
            <h1 align="center">Footsteps in<br>Fashion</h1>
            <div class="inputSearch" align="center">
                <input type="text" placeholder="Luôn có đôi giày đẹp dành cho bạn" name="inputSearch">
                <img src="../Picture/Icon Find.png" width="20px" height="20px">
            </div>
            <div class="scrollDown">
                <font style="width: 100%;margin-bottom: 15px;">Đi đến trang chủ</font>
                <img src="../Picture/Icon Scroll down.png" width="30vw">
            </div>
        </div>
        <div class="HomePage">
            <div class="banner">
                <img src="../Picture/panner_1.png">
                <img src="../Picture/panner_2.png">
                <img src="../Picture/panner_3.png">
                <img src="../Picture/panner_4.png">
                <img src="../Picture/panner_5.png">
                <img src="../Picture/panner_6.png">
                <img src="../Picture/panner_7.png">
            </div>

            <div class="HomePage_Content">
                <div class="HomePage_Content_Category HomePage_Div_Design">
                    <h3>DANH MỤC</h3>
                    <div class="HomePage_Content_Category_Product">
                        <div class="productCategory" >
                            <div style="background-color: rgba(240, 248, 255, 0.8); border-radius: 50px; margin-top: 10px;">
                                <img src="../Picture/Giay_1.png" width="100px">
                            </div>
                            <h4 align="center" style="font-weight: lighter; margin: 0px; margin-top: 10px;">Giày Nam</h4>
                        </div>
                        <div class="productCategory" >
                            <div style="background-color:  rgba(240, 248, 255, 0.8); border-radius: 50px; margin-top: 10px;">
                                <img src="../Picture/Giay_2.png" width="100px">
                            </div>
                            <h4 align="center" style="font-weight: lighter; margin: 0px; margin-top: 10px;">Giày Nữ</h4>
                        </div>
                        <div class="productCategory" >
                            <div style="background-color:  rgba(240, 248, 255, 0.8); border-radius: 50px; margin-top: 10px;">
                                <img src="../Picture/Giay_3.png" width="100px">
                            </div>
                            <h4 align="center" style="font-weight: lighter; margin: 0px; margin-top: 10px;">Thể Thao</h4>
                        </div>
                        <div class="productCategory" >
                            <div style="background-color:  rgba(240, 248, 255, 0.8); border-radius: 50px; margin-top: 10px;">
                                <img src="../Picture/Giay_4.png" width="100px">
                            </div>
                            <h4 align="center" style="font-weight: lighter; margin: 0px; margin-top: 10px;">Sang Trọng</h4>
                        </div>
                    </div>        
                </div>
                <div class="HomePage_Content_HotProduct HomePage_Div_Design">
                    <h3>HOT NHẤT</h3>
                    <div class="HotProduct_New">
                        <img src="../Picture/MauGiay_1.png">
                        <div class="HotProduct_New_Inf">
                            <table>
                                <tr>
                                    <td>
                                        <h3 style="margin: 0;">NIKE BLUE GREEN</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>500 lượt mua</font>
                                    </td>
                                </tr>
                                    <td>
                                        <font>(5 sao)</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="HomePage_Content_AllProducts HomePage_Div_Design">
                    <div class="HomePage_Content_Row1 Row">
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="HomePage_Content_Row2 Row">
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="HomePage_Content_Row3 Row">
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="HomePage_Content_Row4 Row">
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Content_Product_Column">
                            <div class="Img_InContent">
                                <img src="../Picture/Giay_6.png" width="60%">
                            </div>
                            <div class="Title_Content">
                                <table>
                                    <tr>
                                        <td><h2>NIKE FAKE</h2></td>
                                    </tr>
                                    <tr>
                                        <td><font>1M lượt mua</font></td>
                                    </tr>
                                </tr>
                                <td>
                                    <font>(5 sao)</font>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font>1.000.000 đồng</font>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="HomePage_Content_Button_WatchMore">
                        <button name="Content_Button_WatchMore">XEM THÊM</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="imfFooter">
            <div class="footer_Contract">
                <h2 style="width: 100%;text-align: center; margin: 0; margin-top: 10px;">LIÊN HỆ VỚI CHÚNG TÔI</h2>
                <div class="footer_Contract_Icon">
                    <a href="#"><img src="../Picture/IconFaceBook.png" width="40px"></a>
                    <a href="#"><img src="../Picture/IconYoutube.png" width="40px"></a>
                    <a href="#"><img src="../Picture/IconTikTok.png" width="40px"></a>
                </div>
                
            </div>
            <div class="footer_Contract_Address">
                <p>Địa chỉ: ngõ 3, Phố Xốm, phường Phú Lãm, Quận Hà Đông, Hà Nội. Tổng đài hỗ trợ: 19001221 - Email: 21010666@st.phenikaa-uni.edu.vn</p>
                <p>Chịu trách nhiệm quản lý nội dung: Đỗ Đăng Hoàn - Điện thoại liên lên: 024 73081221</p>
                <p>@2023 - Bản quyền thuộc về Công ty trách nhiệm một mình tao</p>
            </div>
        </div>
    </footer>
</body>
</html>