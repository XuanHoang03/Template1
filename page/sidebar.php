<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_lietke_theloaiphim = "SELECT * FROM theloai ORDER BY idtheloai DESC";
$query_lietke_theloaiphim = mysqli_query($mysqli, $sql_lietke_theloaiphim);
?>

<div class="sidebar">
    <!-- Example single danger button -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Thể loại
        </button>
        <div class="dropdown-menu">
            <?php
            while ($row_danhmuc = mysqli_fetch_array($query_lietke_theloaiphim)) {
            ?>
            <div class="item">
                <a class="dropdown-item"
                    href="index.php?quanly=theloaiphim&idtheloai=<?php echo $row_danhmuc['idtheloai'] ?>"><?php echo $row_danhmuc['tentheloai'] ?></a>
            </div>
            <?php
            };
            ?>
            <div class="item">
                <a class="dropdown-item" href="index.php">Phim mới</a>
            </div>
        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            quốc gia
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">việt nam</a>
            <a class="dropdown-item" href="#">nhật bản</a>
            <a class="dropdown-item" href="#">mỹ</a>
        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Năm
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">2022</a>
            <a class="dropdown-item" href="#">2023</a>
            <a class="dropdown-item" href="#">2077</a>
        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            loại phim
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">phim lẻ</a>
            <a class="dropdown-item" href="#">phim bộ</a>
        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Sắp xếp
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Ngày cập nhật</a>
            <a class="dropdown-item" href="#">ngày pháp hành</a>
            <a class="dropdown-item" href="#">điểm đánh giá</a>
        </div>
    </div>
</div>