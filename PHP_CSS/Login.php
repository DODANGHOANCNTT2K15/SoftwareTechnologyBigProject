<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>
<?php
require_once 'ConnectData.php';

$userNameErr = $passWorkErr = "";
$userName = $passWork = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["userName"])) {
        $userNameErr = "Cần nhập tên người dùng";
    } else {
        $userName = test_input($_POST["userName"]);
    }
    if (empty($_POST["passWork"])) {
        $passWorkErr = "Cần nhập mật khẩu";
    } else {
        $passWork = test_input($_POST["passWork"]);
    }
}

// Kiểm tra xem có lỗi không trước khi truy vấn cơ sở dữ liệu
if (empty($userNameErr) && empty($passWorkErr)) {
    if ($conn->connect_error) {
        die('Kết nối không thành công : ' . $conn->connect_error);
    } else {
        // Sử dụng câu truy vấn SQL để kiểm tra thông tin đăng nhập
        $stmt = $conn->prepare("SELECT * FROM useraccount WHERE nameaccount = ? AND passWord = ?");
        $stmt->bind_param("ss", $userName, $passWork);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                // Đăng nhập thành công, bạn có thể chuyển hướng đến trang HomePage.php hoặc thực hiện các hành động cần thiết ở đây
                header("Location: HomePage.php");
                exit;
            } else {
                $passWorkErr = "Sai tên đăng nhập hoặc mật khẩu";
            }
        } else {
            echo "Lỗi khi truy vấn" . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}

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
        <table style="width: 440px; height: auto; padding: 20px;" cellspacing="10px">
            <tr>
                <td><h1 style="text-align: center;">ĐĂNG NHẬP</h1></td>
            </tr>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <tr>
                <td><input type="text" name="userName" class="inputLogin" placeholder="TÊN ĐĂNG NHẬP" value="<?php echo $userName;?>">
                    <br><span class="error"><?php echo $userNameErr;?></span>
                </td>
            </tr>
            <tr>
                <td><input type="password" name="passWork" class="inputLogin" placeholder="MẬT KHẨU" value="<?php echo $passWork;?>">
                    <br><span class="error"><?php echo $passWorkErr;?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="savePoint" id="savePoint">
                    <label for="savePoint">Lưu đăng nhập</label>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <button name="buttonLogin" class="buttonLogin"><img src="../Picture/IconMuiTen.png" style="width: 60%;"></button>
                </td>
            </tr>
            <tr>
                <td align="center"><font>Bạn chưa có tài khoản ?</font></td>
            </tr>
            <tr>
                <td align="center"><a href="SignUp.php" style="text-decoration: none; color: white;">TẠO TÀI KHOẢN</a></td>
            </tr>
            </form>
        </table>
    </div>
</body>
</html>
