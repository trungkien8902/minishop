<?php 

require 'Admin/connect.php';
$page = 1;
if(isset($_GET['page'])) {
    $page = $_GET['page'];
}

$sql_amount_product = "select count(*) from products";
$array_product = mysqli_query($connect, $sql_amount_product);
$result_amount_product = mysqli_fetch_array($array_product);
$amount_product = $result_amount_product['count(*)'];

$product_in_page = 3;
$amount_page = ceil($amount_product / $product_in_page);

$offset_product = $product_in_page * ($page - 1);

$sql = "select * from products limit $product_in_page offset $offset_product";
$result = mysqli_query($connect, $sql);
?> 

<div id="content">
    <div id="products">
        <?php foreach ($result as $each) : ?>
            <div class="product">
                <div class="product_photo">
                    <img src="Admin/products/photos/<?php echo $each['photo'] ?>">
                </div>
                <div class="product_name">
                    <h3>
                        <?php echo $each['name'] ?>
                    </h3>
                </div>
                <div class="view_detail">
                    <a href="product_detail.php?id=<?php echo $each['id'] ?>">
                        Xem chi tiết >>>
                    </a>
                </div>
                <div class="add_to_cart">
                    <a href="add_to_cart.php?id=<?php echo $each['id'] ?>">
                        Thêm vào giỏ hàng
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="pagination">
        <?php for($i = 1; $i <= $amount_page; $i++) { ?>
            <a href="?page=<?php echo $i ?>">
                <?php echo $i ?>
            </a>
        <?php } ?>
    </div>
</div>

<?php mysqli_close($connect); ?> 