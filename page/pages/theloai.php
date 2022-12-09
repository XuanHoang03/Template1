<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_item = "SELECT * FROM phim WHERE phim.idtheloai = '$_GET[idtheloai]' ORDER BY phim.idphim DESC";
$query_item = mysqli_query($mysqli, $sql_item);

$sql_cate = "SELECT * FROM theloai WHERE theloai.idtheloai = '$_GET[idtheloai]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$query_title = mysqli_fetch_array($query_cate);
?>

<h3>Thể Loại : <?php echo $query_title['tentheloai'] ?></h3>
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