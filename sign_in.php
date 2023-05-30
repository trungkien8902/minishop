<?php
session_start();
if(isset($_COOKIE['remember'])) {
    $token = $_COOKIE['remember'];
    require 'Admin/connect.php';
    $sql = "select * from customers where token = '$token' limit 1";
    $result = mysqli_query($connect, $sql);
    $number_rows = mysqli_num_rows($result);
    if($number_rows == 1) {
        $each = mysqli_fetch_array($result);
        $_SESSION['id'] = $each['id'];
        $_SESSION['name'] = $each['name'];
    }
}
if(isset($_SESSION['id'])) {
    header('location:user.php');
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <form action="process_signin.php" method="post">
        <h1>Đăng nhập</h1>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="remember">Ghi nhớ đăng nhập</label>
            <input type="checkbox" name="remember">
        </div>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>