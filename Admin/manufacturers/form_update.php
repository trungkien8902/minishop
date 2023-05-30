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
        if(empty($_GET['id'])) {
            header('location: index.php?error=Phải truyền mã để sửa');
        }
        $id = $_GET['id'];
        include '../menu.php';
        require '../connect.php';
        $sql = "select * from manufacturers where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
    ?>
    
    <form action="process_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        <div>
            <label for="name">Tên</label>
            <input type="text" name="name" value="<?php echo $each['name'] ?>">
        </div>
        <div>
            <label for="address">Địa chỉ</label>
            <textarea name="address" id="address" cols="30" rows="6"><?php echo $each['address'] ?></textarea>
        </div>
        <div>
            <label for="phone">Điện thoại</label>
            <input type="text" name="phone" value="<?php echo $each['phone'] ?>">
        </div>
        <div>
            <label for="photo">Ảnh</label>
            <input type="text" name="photo" value="<?php echo $each['photo'] ?>">
        </div>
        <button type="submit">Sửa</button>
    </form>
</body>
</html>