<?php
session_start();
require_once("includes/connection.php");
?>


<?php
if ($_SESSION['macanbo'] == "") {
    header('location:login.php');
}
if ($_SESSION['macanbo'] == "1") {
    echo "<script>window.history.back();</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/styleHoso.css">
    <link rel="stylesheet" type="text/css" href="css/stylePopup.css">
    <link rel="stylesheet" href="css/styleTailieu.css">
    <link rel="stylesheet" href="css/styleBaigiang.css">
    <link rel="stylesheet" href="css/styleUpload.css">
    <link rel="stylesheet" href="css/styleProfile.css">
    <link rel="stylesheet" href="css/styleThanhTich.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/80f3cb30b3.js"></script>

    <!-- gg font -->
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <title>Quản lí Hồ sơ</title>
</head>

<body>
    <div class="header">
        <div class="animateTitle">
            <h1>Quản lí hồ sơ giảng dạy</h1>
        </div>
        <div class="contentBox">
            <div class="menuHambuger">
                <label for="checkMenu" class="menuBtn">
                    <div class="btnHambuger"></div>
                </label>
            </div>
            <div class="imgBox">
                <img src="img/logo1.png">
                <h2>VLUTE</h2>
            </div>

            <div class="formInfo">

                <?php
                echo  '<span style="font-weight:bold;">Xin chào, ' . $_SESSION['hoten'] . ' </span>';
                ?>

                <a title="Thông tin người dùng" href="#" onclick="loadFormInfo()">
                    <img style="cursor: pointer;" src="img/down1.png">
                </a>
                <ul id="contentInfo">
                    <li>
                        <img src="img/man.png" style="width: 40px; margin-bottom:10px;">
                        <br>
                        <a class="btnInfo" href="hoso.php">Thông tin cá nhân</a>
                    </li>
                    <li>
                        <img src="img/logout.png" style="width: 40px;  margin-bottom:10px;">
                        <br>
                        <a class="btnLogout" href="detroysession.php">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- header end -->
    <div class="main">
        <div class="containerMenu">
            <input type="checkbox" name="checkMenu" id="checkMenu" checked>
            <div class="menuBar">
                <div class="imgBox">
                    <img src="img/icon.png" alt="">
                </div>
                <ul class="lists">
                    <li class="active"><a href="index.php"><img src="img/house.png" alt=""> Trang chủ</a></li>
                    <li>
                        <a href="#"><img src="img/man.png"> Hồ sơ</a>
                        <ul>
                            <li><a href="hoso.php"><img src=""><img src="img/man.png" alt="">Thông tin hồ sơ</a></li>
                            <li><a href="thanhtichcanhan.php"><img src=""><img src="img/google-docs.png" alt="">Thành tích cá nhân</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="tailieu.php"><img src="img/documents.png" alt=""> Tài liệu</a>
                        <ul>
                            <li><a href="myupload.php"><img src="img/google-docs.png"> Tài liệu của tôi</a></li>
                            <li><a href="baigiang.php"><img src="img/google-docs.png"> Bài giảng</a></li>
                            <li><a href="giaotrinh.php"><img src="img/google-docs.png"> Giáo trình</a></li>
                            <li><a href="decuong.php"><img src="img/google-docs.png"> Đề cương</a></li>
                            <li><a href="lichgiangday.php"><img src="img/google-docs.png"> Lịch giảng dạy</a></li>
                            <li><a href="detainckh.php"><img src="img/google-docs.png"> Đề tài NCKH</a></li>
                        </ul>
                    </li>
                    <li><a href="upload.php"><img src="img/google-docs.png"> Upload</a></li>
                    <li><a href="timkiem.php"><img src="img/loupe.png" alt=""> Tìm kiếm</a></li>
                    <li>
                        <a href="detroysession.php"><img src="img/gear.png" alt=""> Đăng xuất </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- content -->
        <div class="containerMain" id="container">