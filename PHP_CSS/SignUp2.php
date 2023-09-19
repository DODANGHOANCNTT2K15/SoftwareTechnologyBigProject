
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" type="text/css" href="SignUp2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php
require_once 'ConnectData.php';

$nameAccountErr = $passWordErr1 = $passWordErr2 = "";
$nameAccount = $passWord1 = $passWord2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nameAccount"])) {
        $nameAccountErr = "Tên đăng nhập là bắt buộc";
    } else {
        $nameAccount = test_input($_POST["nameAccount"]);
    }
    
    if (empty($_POST["passWord"])) {
        $passWordErr1 = "Mật khẩu là bắt buộc";
    } else {
        $passWord1 = test_input($_POST["passWord"]);
    }

    if (empty($_POST["passWord2"])) {
        $passWordErr2 = "Xác nhận mật khẩu là bắt buộc";
    } else {
        $passWord2 = test_input($_POST["passWord2"]);
    }

    if ($passWord1 != $passWord2) {
        $passWordErr2 = "Mật khẩu xác nhận không trùng khớp";
    }

    // Kiểm tra xem có lỗi không trước khi chèn dữ liệu vào cơ sở dữ liệu
    if (empty($nameAccountErr) && empty($passWordErr1) && empty($passWordErr2)) {
        if ($conn->connect_error) {
            die('Kết nối không thành công : ' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO useraccount (nameAccount, passWord) VALUES (?, ?)");
            $stmt->bind_param("ss", $nameAccount, $passWord1);

            if ($stmt->execute()) {
                // Chuyển hướng đến trang SignUpSuccess.php sau khi thêm dữ liệu thành công
                header("Location: SignUpSuccess.php");
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
            <table align="center" id="tableSignUp2" cellspacing="10px">
                <tr>
                    <td><h1 style="text-align: center;">ĐĂNG KÝ</h1></td>
                </tr>
                <tr>
                    <td><input type="text" name="nameAccount" placeholder="TÊN ĐĂNG NHẬP" class="inputSignUp2" value="<?php echo $nameAccount;?>">
                    <br><span class="error"><?php echo $nameAccountErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="passWord" placeholder="MẬT KHẨU" class="inputSignUp2" value="<?php echo $passWord1;?>">
                    <br><span class="error"><?php echo $passWordErr1;?></span>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="passWord2" placeholder="XÁC NHẬN MẬT KHẨU" class="inputSignUp2" value="<?php echo $passWord2;?>">
                    <br><span class="error"><?php echo $passWordErr2;?></span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <button type="submit" name="buttonLogin2" class="buttonLogin" style="text-align: center;"><img src="../Picture/IconMuiTen.png" style="width: 60%;"></button>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <font >Bạn đã có tài khoản ?</font>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="Login.php" style="text-decoration: none; color: white;">ĐĂNG NHẬP</a></td>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
