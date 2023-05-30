<div id="header">
    <a href="index.php" id="logo">
        <img height="60px" style="margin-bottom: 12px;" src="logo/logo.png" alt="">
    </a>
    <ul class="menu">
        <li>
            <a href="index.php">
                Trang chủ
            </a>
        </li>
        <?php if(empty($_SESSION['id'])) { ?>
            <li>
                <a href="sign_in.php">
                    Đăng nhập
                </a>
            </li>
            <li>
                <a href="sign_up.php">
                    Đăng ký
                </a>
            </li>
        <?php } else { ?>
            <li>
                Chào <?php echo $_SESSION['name'] ?>,
                <a href="sign_out.php">
                    Đăng xuất
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
