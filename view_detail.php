<?php 

$id = $_GET['id'];
require 'Admin/connect.php';
$sql = "select * from products where id='$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?> 

<div id="content_detail">
    <div class="product_detail">
        <div class="product_detail_photo">
            <img src="Admin/products/photos/<?php echo $each['photo'] ?>">
        </div>

        <div class="info">
            <div class="product_detail_name">
                <h3>
                    <?php echo $each['name'] ?>
                </h3>
            </div>
            <div class="product_detail_price">
                <p>Giá sản phẩm: <?php echo $each['price'] ?> VNĐ</p>
            </div>
            <div class="product_detail_description">
                <p>Mô tả sản phẩm: <?php echo $each['description']?></p>
            </div>
        </div>
    </div>
</div>

<?php mysqli_close($connect); ?> 