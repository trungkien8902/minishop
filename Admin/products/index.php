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
        require '../menu.php'; 
        require '../connect.php';
        $sql = "select products.*, manufacturers.name as manufacturer_name
        from products
        join manufacturers on manufacturers.id = manufacturer_id";
        $result = mysqli_query($connect, $sql);
    ?>
    <h1>Quản lý sản phẩm</h1>
    <a href="form_insert.php">
        Thêm
    </a>
    <table border="1", width="100%">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Nhà sản xuất</th>
            <th>Giá</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each) : ?>
            <tr>
                    <td><?php echo $each['id'] ?></td>
                    <td><?php echo $each['name'] ?></td>
                    <td>
                        <img height="100" src="photos/<?php echo $each['photo']?>">
                    </td>
                    <td><?php echo $each['manufacturer_name'] ?></td>
                    <td><?php echo $each['price'] ?></td>
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