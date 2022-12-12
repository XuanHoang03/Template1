<?php

$sql_lietke_phim = "SELECT * FROM phim,theloai WHERE phim.idtheloai=theloai.idtheloai ORDER BY idphim DESC LIMIT 5";
$query_lietke_phim = mysqli_query($mysqli, $sql_lietke_phim);
?>
<h3>Phim mới</h3>
<div class="phim">
    <?php
    while ($row = mysqli_fetch_array($query_lietke_phim)) {
    ?>
    <div class="item">
        <a href="index.php?quanly=phim&idphim=<?php echo $row['idphim'] ?>">
            <img src="admin/modules/phim/uploads/<?php echo $row['hinhanh'] ?>">
            <p class="tenphim"><?php echo $row['tenphim'] ?></p>
        </a>
    </div>
    <?php
    };
    ?>
</div>
<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_item = "SELECT * FROM phim WHERE phim.idtheloai = '44' ORDER BY phim.idphim DESC";
$query_item = mysqli_query($mysqli, $sql_item);


?>

<h3>Hành động</h3>
<div class="phim">
    <?php
    while ($row = mysqli_fetch_array($query_item)) {
    ?>
    <div class="item">
        <a href="index.php?quanly=phim&idphim=<?php echo $row['idphim'] ?>">
            <img src="admin/modules/phim/uploads/<?php echo $row['hinhanh'] ?>">
            <p class="tenphim"><?php echo $row['tenphim'] ?></p>
        </a>
    </div>
    <?php
    };
    ?>
</div>

<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_item = "SELECT * FROM phim WHERE phim.idtheloai = '43' ORDER BY phim.idphim DESC";
$query_item = mysqli_query($mysqli, $sql_item);


?>

<h3>Kinh dị</h3>
<div class="phim">
    <?php
    while ($row = mysqli_fetch_array($query_item)) {
    ?>
    <div class="item">
        <a href="index.php?quanly=phim&idphim=<?php echo $row['idphim'] ?>">
            <img src="admin/modules/phim/uploads/<?php echo $row['hinhanh'] ?>">
            <p class="tenphim"><?php echo $row['tenphim'] ?></p>
        </a>
    </div>
    <?php
    };
    ?>
</div>