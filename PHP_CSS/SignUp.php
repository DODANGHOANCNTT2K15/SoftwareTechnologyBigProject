<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="SignUp.css">
</head>
<body>
<?php
require_once 'ConnectData.php';

$nameUserErr = $dateOfBirthErr = $sexErr = $emailErr = $phoneNumberErr = $addressErr = "";
$nameUser = $dateOfBirth = $sex = $email = $phoneNumber = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nameUser"])) {
        $nameUserErr = "Họ và tên là bắt buộc";
    } else {
        $nameUser = test_input($_POST["nameUser"]);
    }
    
    if (empty($_POST["dateOfBirth"])) {
        $dateOfBirthErr = "Ngày sinh là bắt buộc";
    } else {
        $dateOfBirth = test_input($_POST["dateOfBirth"]);
    }

    if (empty($_POST["sex"])) {
        $sexErr = "Giới tính là bắt buộc";
    } else {
        $sex = test_input($_POST["sex"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email là bắt buộc";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["phoneNumber"])) {
        $phoneNumberErr = "Số điện thoại là bắt buộc";
    } else {
        $phoneNumber = test_input($_POST["phoneNumber"]);
    }

    if (empty($_POST["address"])) {
        $addressErr = "Địa chỉ là bắt buộc";
    } else {
        $address = test_input($_POST["address"]);
    }

    // Kiểm tra xem có lỗi không trước khi chèn dữ liệu vào cơ sở dữ liệu
    if (empty($nameUserErr) && empty($dateOfBirthErr) && empty($sexErr) && empty($emailErr) && empty($phoneNumberErr) && empty($addressErr)) {
        if ($conn->connect_error) {
            die('Kết nối không thành công : ' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO userinfor (NameUser, DateOfBirth, Sex, Email, PhoneNumber, Address) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nameUser, $dateOfBirth, $sex, $email, $phoneNumber, $address);

            if ($stmt->execute()) {
                // Chuyển hướng đến trang signUp2.php sau khi thêm dữ liệu thành công
                header("Location: signUp2.php");
                exit;
            } else {
                echo "Lỗi khi thêm dữ liệu: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
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
    <div>
        <a href="HomePage.php"><img src="..\Picture\logo.png" class="logo" align="left"></a>
    </div>
    
    <div class="mainDiv">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table align="center" style="width: 420px;height: auto; margin-top: 30px;" cellspacing="10px" >
                <tr>
                    <td colspan="3"><h1>ĐĂNG KÝ</h1></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" class="inputTextBox" name="nameUser" placeholder="HỌ VÀ TÊN" value="<?php echo $nameUser;?>">
                        <br><span class="error"><?php echo $nameUserErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td><font>Ngày sinh: </font></td>
                    <td colspan="2"><input type="date" name="dateOfBirth" style="width: 100%;height: 30px; border: 3px solid white; color: white; background-color: black; opacity: 80%; text-align: center;" value="<?php echo $dateOfBirth;?>"></td>
                </tr>
                <tr>
                    <td><font>Giới tính:</font></td>
                    <td><label for="sexNam">Nam</label><input type="radio" name="sex" id="sexNam" value="male"<?php if (isset($sex) && $sex == "male") echo "checked"; ?>></td>
                    <td><label for="sexNu">Nữ</label><input type="radio" name="sex" id="sexNu" value="female"<?php if (isset($sex) && $sex == "female") echo "checked"; ?>></td>
                </tr> 
                <tr>
                    <td colspan="3"><input type="email" name="email" class="inputTextBox" value="<?php echo $email;?>" placeholder="EMAIL">
                        <br><span class="error"><?php echo $emailErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" name="phoneNumber" class="inputTextBox" value="<?php echo $phoneNumber;?>" placeholder="SỐ ĐIỆN THOẠI">
                        <br><span class="error"><?php echo $phoneNumberErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" name="address" class="inputTextBox" placeholder="ĐỊA CHỈ" value="<?php echo $address;?>">
                        <br><span class="error"><?php echo $addressErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 40px;"><font>Bạn đã có tài khoản ?</font></td>
                    <td rowspan="2" style="padding-top: 40px;">
                        <button type="submit" name="buttonLogin2" class="buttonLogin"><img src="../Picture/IconMuiTen.png" style="width: 60%;"></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" ><a href="Login.php" style="text-decoration: none; color: white;">ĐĂNG NHẬP</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
