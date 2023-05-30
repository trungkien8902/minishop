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
    session_start();
    $cart = $_SESSION['cart'];   
?>
    <table border="1" width="100%">
        <tr>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Xóa sản phẩm</th>
        </tr>
        <?php foreach ($cart as $id => $each): ?>
            <tr>
                <td>
                    <img height="200" src="Admin/products/photos/<?php echo $each['photo'] ?>" alt="">
                </td>
                <td><?php echo $each['name'] ?></td>
                <td><?php echo $each['price'] ?></td>
                <td>
                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre">-</a>
                    <?php echo $each['quantity'] ?>
                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre">+</a>
                </td>
                <td>vnđ</td>
                <td>
                    <a href="delete_cart.php?id=<?php echo $id ?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>