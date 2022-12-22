<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_lietke_danhmucphim = "SELECT * FROM theloai ORDER BY thutu DESC";
$query_lietke_danhmucphim = mysqli_query($mysqli, $sql_lietke_danhmucphim);
?>
<p>Liệt kê phim</p>
<table border="2" width="50%" style="border-collapse : collapse" class="liet-ke">
    <tr>
        <th class="col-md-3">ID</th>
        <th class="col-md-3">Tên thể loại</th>
        <th class="col-md-3">Thứ tự</th>
        <th class="col-md-3">Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmucphim)) {
    ?>
    <tr class="liet-ke1">
        <td><?php echo $row['idtheloai'] ?></td>
        <td><?php echo $row['tentheloai'] ?></td>
        <td><?php echo $row['thutu'] ?></td>
        <td class="chon">
            <a class="btn-sua" href="?action=quanlydanhmucphim&query=sua&idtheloai= <?php echo $row['idtheloai'] ?>"><b>SỬA</b></a>
            <a class="btn-xoa" href="modules/danhmucphim/xuly.php?idtheloai=<?php echo $row['idtheloai'] ?>"><b>XÓA</b></a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>