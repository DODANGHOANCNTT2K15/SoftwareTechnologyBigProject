<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Person.css">
</head>
<body>
    <header>
        <div class="headerSquare">
            <img src="..\Picture\logo.png" class="logo" align="left">
            <ul class="ulTextHeader">
                <li class="liForTextHeader">
                    <a href="HomePage.php" class="linkHeader"><font class="forTextHeader">Trang chủ</font></a>
                </li>
                <li class="liForTextHeader">
                    <a href="#" class="linkHeader"><font class="forTextHeader">Cửa hàng</font></a>
                </li>
                <li class="liForTextHeader">
                    <a href="New.php" class="linkHeader"><font class="forTextHeader">Thông tin</font></a>
                </li>
                <li class="liForTextHeader">
                    <a href="Person.php" class="linkHeader"><font class="forTextHeader">Cá nhân</font></a>
                </li>
                <li class="liForTextHeader">
                    <a href="InfOfUs.php" class="linkHeader"><font class="forTextHeader">Liên hệ</font></a>
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
        <div class="divLeft">
            <div class="IconPerson">
                <table>
                    <tr>    
                        <td rowspan="2"><img src="../Picture/IconPersonal.png" width="50px"></td>
                        <td> <font>dodanghoan</font></td>
                    </tr>
                    <tr style="opacity: 0.5;"> 
                        <td>
                            <img src="../Picture/IconPen.png" width="15px">
                            <font>Sửa hồ sơ</font>
                        </td>
                    </tr>
                </table>     
            </div>
            <div class="listPerson">
                <table cellspacing="15px">
                    <tr>
                        <td>
                            <img src="../Picture/IconPerson.png" width="20px">
                        </td>
                        <td>Hồ sơ người dùng</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tdPaddingChange">Hồ sơ</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tdPaddingChange">Ngân hàng</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tdPaddingChange">Địa chỉ</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tdPaddingChange">Đổi mật khẩu</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../Picture/IconListBox.png" width="20px">
                        </td>
                        <td>
                            Đơn mua
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../Picture/IconRing.png" width="20px">
                        </td>
                        <td>Thông báo</td>
                    </tr>
                </table>
            </div>
        </div>
         <div class="divRight">
            <div class="headerContent">
                <font style="font-size: 20px; font-weight: bold;">Hồ sơ của tôi</font><br>
                <font style="opacity: 0.7;">Quản lý hồ sờ để bảo mật thông tin</font>
            </div>
            <div class="contentInfLeft">
                <form>
                    <table cellspacing="30px">
                        <tr>
                            <td class="changeAlignRight">Tên đăng nhập:</td>
                            <td colspan="3"><font>dodanghoan</font></td>
                        </tr>
                        <tr>
                            <td class="changeAlignRight">Tên:</td>
                            <td colspan="3">Đỗ Đăng Hoàn</td>
                        </tr>
                        <tr>
                            <td class="changeAlignRight">Email:</td>
                            <td colspan="3">dodanghoana12017@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="changeAlignRight">Số điện thoại:</td>
                            <td colspan="3">0912883484</td>
                        </tr>
                        <tr>
                            <td class="changeAlignRight">Giới tính:</td>
                            <td>
                                <label for="sexNam">Nam</label>
                                <input type="radio" name="sex" class="checkboxSex" id="sexNam">
                            </td>
                            <td>
                                <label for="sexNu">Nữ</label>
                                <input type="radio" name="sex" class="checkboxSex" id="sexNu">
                            </td>
                        </tr>
                        <tr>
                            <td class="changeAlignRight">Ngày sinh:</td>
                            <td style="width: 100px;">
                                <select name="day" class="selectOption">
                                    <option selected name="">1</option>
                                    <option name="">1</option>
                                </select>
                            </td>
                            <td style="width: 100px;">
                                <select name="mounth" class="selectOption">
                                    <option selected name="">1</option>
                                    <option name="">1</option>
                                </select>
                            </td>
                            <td style="width: 100px;">
                                <select name="year" class="selectOption">
                                    <option selected name="">1</option>
                                    <option name="">1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"> 
                                <button name="buttonSaveChangeAccount" >LƯU</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="contentInfRight">
                <form action="">
                    <table>
                        <tr>
                            <td>
                                <img src="../Picture/IconPersonal.png" width="150px">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button name="selectPicturePersonal">Chọn ảnh</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dung lượng file tối đa 1 MB
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Định dạng: .JPEG .PNG
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>