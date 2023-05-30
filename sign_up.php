<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <?php
    if(isset($_GET['error'])) {
        echo $_GET['error'];
    }
    ?>
    <form action="process_signup.php" method="post">
        <h1>Form đăng ký</h1>
        <div>
            <label for="name">Tên</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>