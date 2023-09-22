<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background-color: black;
            background-image: url("../Picture/backGroundSignUpSussecful.png");
            background-size: cover;
            background-repeat: no-repeat;   
            font-family: 'Montserrat', sans-serif;
            color: rgb(255, 255, 255);
        }
        .logo{
            margin-left: 10px;
            margin-top: -16px;
            margin-bottom: -16px;
            width: 100px;
        }
        .mainDiv{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 700px;
            height: 180px;
            background-color: rgb(21, 21, 21);
            border-radius: 20px;
            opacity: 85%;
            padding: 20px;
        }
        h1{
            text-align: center;
        }
        p{
            text-align: center;
        }
        div a{
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <a href="HomePage.php"><img src="..\Picture\logo.png" class="logo" align="left"></a>
    </div>

    <div class="mainDiv">
        <h1>ĐĂNG KÝ THÀNH CÔNG</h1>
        <p>Chào mừng bạn trở thành một thành viên của Footsteps In Fashion</p>
        <div>
            <a href="Login.php"><p>Quay lại trang đăng nhập</p></a>
        </div>
    </div>
</body>
</html>