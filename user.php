<?php
session_start();
if(empty($_SESSION['id'])) {
    header('location:sign_in.php?error=Bạn chưa đăng nhập');
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="container">
    Đây là trang người dùng
    Xin chào <?php $_SESSION['name'] ?>
    <a href="sign_out.php">Đăng xuất</a>
</div>
</body>
</html>