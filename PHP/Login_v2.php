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
    <link rel="stylesheet" href="../CSS/login_version2.css" type="text/css">
</head>
<body>
<?php
    session_start();
    //Yêu cầu kết nối với database
    require_once 'ConnectData.php';
    $emailLoginErr = $passwordLoginErr = "";
    $emailLogin = $passwordLogin = "";
    
    //Kiểm tra các trường dữ liệu
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signIn'])) {
        if (empty($_POST["emailLogin"])) {
            $emailLoginErr = "* Email còn thiếu";
        } else {
            $emailLogin = test_input($_POST["emailLogin"]);
        }

        if (empty($_POST["passwordLogin"])) {
            $passwordLoginErr = "* Mật khẩu còn thiếu";
        } else {
            $passwordLogin = test_input($_POST["passwordLogin"]);
        }
        $query = "SELECT user_id FROM user WHERE email = ? AND password = ?";
        $stmt = $connect->prepare($query);
        $stmt->bind_param("ss", $emailLogin, $passwordLogin);
        $stmt->execute();
        $result = $stmt->get_result();

        // Kiểm tra xem có lỗi không
        if (empty($emailLoginErr) && empty($passwordLoginErr)) {
            if ($result->num_rows !== 0) {
                $user = $result->fetch_assoc();
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION['emailLogin'] = $emailLogin;

                header("Location: index.php");
                exit();
            } else {
                $passwordLoginErr = "* Email hoặc mật khẩu không đúng";
            }
        }

    }
    $emailErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SignUp'])) {
        $email = $_POST["email"];
        $phoneNumber = $_POST["phoneNumber"];
        $passWord = $_POST['password'];
        $address = $_POST['address'];
        $fullName = $_POST['fullName'];
        $sex = $_POST['sex'];

        // Kiểm tra email đăng ký đã tồn tại chưa
        $checkEmailQuery = "SELECT * FROM user WHERE email = ?";
        $checkEmailStmt = $conn->prepare($checkEmailQuery);
        $checkEmailStmt->bind_param("s", $email);
        $checkEmailStmt->execute();
        $result = $checkEmailStmt->get_result();

        if ($result->num_rows > 0) {
            // Email đã tồn tại trong cơ sở dữ liệu, thông báo lỗi
            $emailErr = "* Email đăng ký đã tồn tại";
        } else {
            // Băm mật khẩu
            $hashedPassword = password_hash($passWord, PASSWORD_DEFAULT);

            // Kiểm tra dữ liệu đầu vào
            if (empty($email) || empty($phoneNumber) || empty($hashedPassword) || empty($fullName)) {
                // Thông báo lỗi hoặc thực hiện các xử lý khác tùy thuộc vào trường hợp của bạn
                $error = "Vui lòng điền đầy đủ thông tin.";
        }    else {
                // Chèn dữ liệu vào cơ sở dữ liệu
                $insertQuery = "INSERT INTO user (email, phoneNumber, passWord, fullName) VALUES (?, ?, ?, ?)";
                $insertStmt = $conn->prepare($insertQuery);
                $insertStmt->bind_param("ssss", $email, $phoneNumber, $hashedPassword, $fullName);
                $insertStmt->execute();

                // Đăng nhập người dùng mới
                $user_id = $insertStmt->insert_id;
                $_SESSION["user_id"] = $user_id;
                $_SESSION['emailLogin'] = $email;

                // Chuyển hướng đến trang sau khi đăng ký thành công
                header("Location: index.php");
                exit();
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
    <div class="cover_video">
        <video src="../Video/THE WITNESS a cinematic sneaker video.mp4" autoplay loop muted></video>
    </div>
    <div class="content flexbox">
        <div class="logo">
            <img src="../Picture/Icon/Icon_Logo_Type_Text.png">
        </div>
        <div class="form">
            <div class="cover_login_signup">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="login">
                    <h1>ĐĂNG NHẬP</h1>
                    <div class="input_login flexbox">
                        <input type="text" placeholder="Tên đăng nhập" name="emailLogin">
                        <!-- <span class="error"><?php echo $emailLoginErr;?></span> -->
                        <input type="password" placeholder="Mật khẩu" name="passwordLogin">
                        <!-- <span class="error"><?php echo $passwordLoginErr;?></span> -->
                    </div>
                    <div class="cover_button_login flexbox">
                        <button type="submit" name="signIn">ĐĂNG NHẬP</button>
                    </div>
                </form>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="signup">
                    <h1>ĐĂNG KÝ</h1>
                    <div class="input_login flexbox">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" id="email" placeholder="SĐT" name="phoneNumber">
                        <input type="text"  placeholder="Mật khẩu"name="passWord">
                        <input type="text" id="passwork_again" placeholder="Xác nhận mật khẩu">
                        <input type="hidden" name="address" value="Chưa có">
                        <input type="hidden" name="fullName" value="Chưa có">
                        <input type="hidden" name="sex" value="Chưa có">
                    </div>
                    <div class="cover_button_login flexbox">
                        <button type="button" name="signUp">ĐĂNG KÝ</button>
                    </div>
                </form>
            </div>
            <div class="changeLogin">
                Bạn chưa biết Footsteps? <span id="change_ID">Đăng ký</span>
            </div>
        </div>
    </div>
    <?php 
        $stmt->close();
        $conn->close();
    ?>
    <script src="../JavaScript/login_version2.js"></script>
</body>   
</html>