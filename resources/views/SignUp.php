<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Poppins&display=swap');
    </style>
    <link rel="stylesheet" href="../../bootstrap/styles/SignUp.css">
    <title>Register - page</title>
</head>

<body>
<div>
    <div class="grid-cols-1 flex">
        <a href=""><span class="material-symbols-outlined">arrow_back</span></a>
        <!-- bên phải -->
        <div class="block_contain-lefl col-span-1">
            <h3 class="title text-center text-5xl text-blue-900 animate-fadeIn font-bold leading-tight">
                Mental Health Care
            </h3>
            <p id="instructure">Nhập thông tin của bạn </p>
            <!-- nhập thông tin -->
            <form action="" method="post" id="form" class="mt-5">
                <div id="name"></div>
                <div id="em"></div>
                <div id="sdt"></div>
                <div id="mk1"></div>
                <div id="mk2"></div>
            </form>
            <div id="nut"></div>
            <!-- xử lý chuyển trang -->
            <p id="fogettext">Bạn đã có tài khoản?<a href="../send_email.php">Đăng nhập ngay</a></p>
        </div>
        <!-- bên trái -->
        <div class="block_contain-right col-span-1">
            <p id="front-text">"Vươn tới sức khỏe tâm thần với sự tiện lợi trực tuyến!"</p>
            <img src="../../app/root/images/register-page.png" alt="bac si">
        </div>
    </div>
</div>

<script src="<?php asset('/components/Button.js') ?>"></script>
<script src="<?php asset('/components/Input.js') ?>"></script>
<script src="<?php asset('/components/Button2.js') ?>"></script>

<script>
    Button2
        .new()
        .setLabel("Đăng ký")
        .setcustomClass("text-center")
        .setid("sub")
        .setOnClick(() => {
            window.location.href = url;
        })
        .appendTo("nut")

    Input
        .new()
        .setPlaceholder("Nhập tên của bạn")
        .setContent("Họ tên:")
        .setLabel("name")
        .appendTo("name")

    Input
        .new()
        .setType("email")
        .setPlaceholder("Nhập mật khẩu của bạn")
        .setContent("Email:")
        .setLabel("email")
        .appendTo("em")

    Input
        .new()
        .setPlaceholder("Nhập số điện của bạn")
        .setContent("Số điện thoại:")
        .setLabel("Number")
        .appendTo("sdt")

    Input
        .new()
        .setType("password")
        .setPlaceholder("Nhập mật khẩu của bạn")
        .setContent("Mật Khẩu:")
        .setLabel("password")
        .appendTo("mk1")

    Input
        .new()
        .setType("password")
        .setPlaceholder("Nhập lại mật khẩu của bạn")
        .setContent("Nhập lại mật khẩu:")
        .setLabel("password")
        .appendTo("mk2")
</script>
</body>

</html>
