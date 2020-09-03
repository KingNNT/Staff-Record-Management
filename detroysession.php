<?php
session_start();
session_destroy();
header('Location: login.php');
?>

// if(isset($_POST['logout']))
// {
//     unset($_SESSION['macanbo']);
//     unset($_SESSION['hoten']);
//     unset($_SESSION['makhoa']);
//     unset($_SESSION['matkhau']);
//     unset($_SESSION['chucvu']);
//     unset($_SESSION['ngaysinh']);
//     unset($_SESSION['email']);
//     unset($_SESSION['sdt']);
//     unset($_SESSION['cmnd']);
//     unset($_SESSION['gioitinh']);
//     unset($_SESSION['tenkhoa']);
    
//     header('Location: login.php');
// } 