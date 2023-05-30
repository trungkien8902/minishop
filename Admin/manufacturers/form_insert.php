<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['error'])) { 
    ?>
        <span style='color: red'>
            <?php echo $_GET['error']; ?>
        </span>
    <?php 
        } 
    ?>

    <form action="process_insert.php" method="post">
        <div>
            <label for="name">Tên</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="address">Địa chỉ</label>
            <textarea name="address" id="address" cols="30" rows="6"></textarea>
        </div>
        <div>
            <label for="phone">Điện thoại</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="photo">Ảnh</label>
            <input type="text" name="photo">
        </div>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>