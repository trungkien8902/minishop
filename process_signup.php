<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require 'Admin/connect.php';
$sql = "select count(*) from customers where email = '$email'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1) {
    header('location:signup.php?error=Email đã được sử dụng');
    exit;
}

$sql = "insert into customers(name, email, password) values('$name', '$email', '$password')";
mysqli_query($connect, $sql);

$sql = "select id from customers where email = '$email'";
$result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($result)['id'];
mysqli_query($connect, $sql);

session_start();
$_SESSION['id'] = $id;
$_SESSION['name'] = $name;

mysqli_close($connect);