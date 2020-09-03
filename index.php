<?php
require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="box">
            <a href="hoso.php">
                <p class="title">Hồ sơ</p>
                <div class="imgBox">
                    <img src="img/avatar.png">
                </div>
            </a>

        </div>
        <div class="box">
            <a href="myupload.php">
                <p class="title">Tài liệu</p>
                <div class="imgBox">
                    <img src="img/google-docs.png">
                </div>
            </a>
        </div>
        <div class="box">
            <a href="timkiem.php">
                <p class="title">Tìm kiếm</p>
                <div class="imgBox">
                    <img src="img/loupe.png">
                </div>
            </a>
        </div>
    </div>
    <!-- <div class="popupContainer" id="popup">
                    <h2>Thông báo</h2>
                    <p>Cập nhật thông tin thành công!!!</p>
                    <a href="#" onclick='popupEvent()'>Đóng</a>
            </div> -->
</body>

</html>



<?php
require_once("footer.php");
?>