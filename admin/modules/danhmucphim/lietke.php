<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_lietke_danhmucphim = "SELECT * FROM theloai ORDER BY thutu DESC";
$query_lietke_danhmucphim = mysqli_query($mysqli, $sql_lietke_danhmucphim);
?>
<p>Liệt kê phim</p>
<table border="2" width="50%" style="border-collapse : collapse">
    <tr>
        <th>ID</th>
        <th>Tên thể loại</th>
        <th>Thứ tự</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmucphim)) {
    ?>
    <tr>
        <td><?php echo $row['idtheloai'] ?></td>
        <td><?php echo $row['tentheloai'] ?></td>
        <td><?php echo $row['thutu'] ?></td>
        <td>
            <a href="modules/danhmucphim/xuly.php?idtheloai=<?php echo $row['idtheloai'] ?>">Xóa</a> | <a
                href="?action=quanlydanhmucphim&query=sua&idtheloai= <?php echo $row['idtheloai'] ?>">sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>