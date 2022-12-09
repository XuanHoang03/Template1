<div class="header">
    <div class="img">
        <a href="index.php"><img class="img" src="img/logo.png" alt="Logo" style="border-radius: 50px;"></a>
    </div>


    <form action="index.php?quanly=timkiem" method="POST" class="timkiem">
        <input style="border-radius: 20px; padding: 9px; padding-right: 30px" type="text" placeholder="Tìm kiếm..."
            name="tukhoa">
        <input style="border-radius: 20px; padding: 9px;" type="submit" name="timkiem" value="Tìm kiếm">
    </form>


    <a class="login" href="page/pages/dangxuat.php">Log out
    </a>
    <button class="search id"><?php echo $_SESSION['ten'] ?></button>
    <a class="login vip" href="index.php?quanly=napvip">Nạp vip
    </a>
</div>