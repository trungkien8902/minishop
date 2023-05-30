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
        $sql = "select * from manufacturers";
        $manufacturers = mysqli_query($connect, $sql);
    ?>
    <form action="process_insert.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Tên</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="photo">Ảnh</label>
            <input type="file" name="photo">
        </div>
        <div>
            <label for="price">Giá</label>
            <input type="number" name="price">
        </div>
        <div>
            <label for="description">Mô tả</label>
            <textarea name="description" cols="30" rows="6"></textarea>
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
        <button type="submit">Thêm</button>
    </form>
</body>
</html>