<?php
session_start();
require_once("./includes/connection.php");
require_once('./config/config.php');

if (isset($_POST["login"])) {
    $macanbo = $_POST["user"];
    $matkhau = $_POST["pass"];
    mysqli_real_escape_string($conn, $macanbo);
    mysqli_real_escape_string($conn, $matkhau);

    $sql = "SELECT * FROM user AS user, khoa AS khoa WHERE macanbo = '$macanbo' AND matkhau = '$matkhau' AND user.makhoa =khoa.makhoa ";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num_rows = mysqli_num_rows($query);

    if ($num_rows == 0) {
        echo "
            <div class='popupContainer' id='popuplogin'>
                <h2>Lỗi đăng nhập</h2>
                <p>Sai mã cán bộ hoặc mật khẩu. <br> Vui lòng nhập lại!!!</p>
                <a  href=''>Đóng</a>
            </div>
            ";
    } else {
        $row = mysqli_fetch_array($query);

        $_SESSION['macanbo'] = $row['macanbo'];
        $_SESSION['matkhau'] = $row['matkhau'];
        $_SESSION['makhoa'] = $row['makhoa'];
        $_SESSION['chucvu'] = $row['chucvu'];
        $_SESSION['hocvi'] = $row['hocvi'];
        $_SESSION['chuyennganh'] = $row['chuyennganh'];
        $_SESSION['hoten'] = $row['hoten'];
        $_SESSION['gioitinh'] = $row['gioitinh'];
        $_SESSION['ngaysinh'] = $row['ngaysinh'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['sdt'] = $row['sdt'];
        $_SESSION['cmnd'] = $row['cmnd'];
        $_SESSION['tenkhoa'] = $row['tenkhoa'];

        if ($_SESSION['macanbo'] == "1")
            header('location: ' . BASE_URI . 'layouts/admin/index.php');
        else
            header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/styleLogin.css">
    <link rel="stylesheet" href="./public/css/stylePopup.css">
    <title>Đăng nhập hệ thống</title>
</head>

<body>


    <div class="wraper">
        <div class="title">
            <h1>VLUTE</h1><span style="font-weight: 100;font-size: 30px;"> manager</span>
            <p></p>
        </div>
        <div class="form-top">
            <div class="left">
                <h3>Đăng nhập hệ thống</h3>
                <p>Hệ thống quản lý hồ sơ giảng dạy của giảng viên trường Đại học Sư phạm Kỹ thuật Vĩnh Long</p>
            </div>
            <div class="right">
                <img src="./public/images/vlute_icon96.png" alt="">
            </div>
        </div>
        <div class="form-bottom">
            <form method="POST">
                <div class="input-box">
                    <input type="text" name="user" required autocomplete="none">
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <input type="password" name="pass" required>
                    <label for="">Password</label>
                </div>
                <!-- <input type="button" value="Đăng nhập"> -->
                <input type="submit" name="login" class="login login-submit" value="Login">
            </form>
            <a href="#">Quên mật khẩu?</a>
        </div>
    </div>

</body>

</html>