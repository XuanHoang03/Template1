<?php

if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
}
$sql_lietke_phim = "SELECT * FROM phim WHERE phim.tenphim LIKE '%" . $tukhoa . "%'";
$query_lietke_phim = mysqli_query($mysqli, $sql_lietke_phim);
?>
<h3>Tìm Kiếm: <?php echo $tukhoa ?></h3>
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