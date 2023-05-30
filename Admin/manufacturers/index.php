<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quản lý nhà sản xuất</h1>
    
    <?php include '../menu.php';?>
    <br/>
    <a href="form_insert.php">
        Thêm
    </a>

    <?php
        require '../connect.php';
        $sql = "select * from manufacturers";
        $result = mysqli_query($connect, $sql);
    ?>

    <table border="1", width="100%">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Ảnh</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each) : ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['name'] ?></td>
                <td><?php echo $each['address'] ?></td>
                <td><?php echo $each['phone']; ?></td>
                <td>
                    <img height="100" src="<?php echo $each['photo'] ?>">
                </td>
                <td>
                    <a href="form_update.php?id=<?php echo $each['id'] ?>">Sửa</a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $each['id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>