<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footsteps In Fashion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=League+Spartan:wght@600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
<?php
    session_start();
    //Yêu cầu kết nối với database
    require_once 'ConnectData.php';
    $emailLoginErr = $passwordLoginErr = "";
    $emailLogin = $passwordLogin = "";
    
    //Kiểm tra các trường dữ liệu
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        // Kiểm tra emailLogin và mật khẩu trong cơ sở dữ liệu
        $query = "SELECT user_id FROM user WHERE email = ? AND password = ?";
        $stmt = $connect->prepare($query);
        $stmt->bind_param("ss", $emailLogin, $passwordLogin);
        $stmt->execute();
        $result = $stmt->get_result();

        // Kiểm tra xem có lỗi không
        if (empty($emailLoginErr) && empty($passwordLoginErr)) {
            if ($result->num_rows !== 0) {
                // Đăng nhập thành công, thực hiện các hành động sau đây
                $user = $result->fetch_assoc();
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION['emailLogin'] = $emailLogin;// Lưu user_id vào phiên làm việc

                // Chuyển hướng đến trang sau khi đăng nhập thành công
                header("Location: index.php");
                exit();
            } else {
                // Sai emailLogin hoặc mật khẩu, hiển thị thông báo lỗi
                $passwordLoginErr = "* Email hoặc mật khẩu không đúng";
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

<video id="video-background" autoplay loop muted>
      <source src="../Video/videoFirst.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="top-nav">
      <a href="../PHP/product.php"><img src="../Picture/Icon/Icon_logo.png" alt="Logo"></a>
  </div>
    <div class="login-box">
        <h2>Đăng nhập</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="user-box">
            <input type="text" name="emailLogin" required="" id="emailLogin">
            <span class="error"><?php echo $emailLoginErr;?></span>
            <label>Tên đăng nhập</label>
          </div>
          <div class="user-box">
            <input type="password" name="passwordLogin" required="" id="passwordLogin">
            <span class="error"><?php echo $passwordLoginErr;?></span>
            <label>Mật khẩu</label>
          </div>
          <button id="login_button" type="submit">
            <a href="#">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Đăng nhập
            </a>
          </button>
          <a href="#">
            Quên mật khẩu ?
          </a>
          <div class="or">
            <div class="line"></div>
            <div class="text">Hoặc</div>
            <div class="line"></div>
          </div>
          <div class="other-way">
            <a href="#"><img src="../Picture/Icon/logo-facebook.jpg" alt="">Facebook</a>
            <a href="#"><img src="../Picture/Icon/logo-google.png" alt="">Google</a>
          </div>
          <div class="sign-up">
            Bạn mới biết Ananas ?<a href="register.php">  Đăng ký</a>
          </div>
        </form>
    </div>
</body>
</html>