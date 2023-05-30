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
        $id = $_GET['id'];
        require '../menu.php'; 
        require '../connect.php';
        $sql = "select * from products where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);

        $sql = "select * from manufacturers";
        $manufacturers = mysqli_query($connect, $sql);
    ?>
    <form action="process_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        <div>
            <label for="name">Tên</label>
            <input type="text" name="name" value="<?php echo $each['name'] ?>">
        </div>
        <div>
            <label>Đổi ảnh mới</label>
            <input type="file" name="photo_new">
        </div>
        <div>
            <label>Hoặc giữ ảnh cũ</label>
            <img height="200" src="photos/<?php echo $each['photo'] ?>" >
            <input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
        </div>
        <div>
            <label for="price">Giá</label>
            <input type="number" name="price" value="<?php echo $each['price'] ?>">
        </div>
        <div>
            <label for="description">Mô tả</label>
            <textarea name="description" cols="30" rows="6"><?php echo $each['description'] ?></textarea>
        </div>
        <div>
            <label for="manufacturer_id">Nhà sản xuất</label>
            <select name="manufacturer_id">
                <?php foreach ($manufacturers as $manufacturer) : ?>
                    <option value="<?php echo $manufacturer['id'] ?>">
                        <?php echo $manufacturer['name'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit">Sửa</button>
    </form>
</body>
</html>