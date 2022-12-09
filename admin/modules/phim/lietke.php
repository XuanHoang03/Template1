<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_lietke_phim = "SELECT * FROM phim,theloai WHERE phim.idtheloai=theloai.idtheloai ORDER BY idphim DESC";
$query_lietke_phim = mysqli_query($mysqli, $sql_lietke_phim);
?>
<p>Liệt kê phim</p>
<div class="lietke">
    <table border="2" width="80%" style="border-collapse : collapse">
        <tr>
            <th>ID</th>
            <th>Tên phim</th>
            <th>Hình ảnh</th>
            <th>Nền</th>
            <th>Thể loại</th>
            <th>Thông tin phim</th>
            <th>Thời lượng phim</th>
            <th>ngày đăng</th>
            <th>tình trạng</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_phim)) {
        ?>
        <tr>
            <td><?php echo $row['idphim'] ?></td>
            <td><?php echo $row['tenphim'] ?></td>
            <td><img src="modules/phim/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
            <td><img src="modules/phim/uploads/<?php echo $row['nen'] ?>" width="300px"></td>
            <td><?php echo $row['tentheloai'] ?></td>
            <td><?php echo $row['thongtinphim'] ?></td>
            <td><?php echo $row['thoiluongphim'] ?></td>
            <td><?php echo $row['ngaydang'] ?></td>
            <td><?php
                    if ($row['tinhtrang'] == 1) {
                        echo 'Kích Hoạt';
                    } else {
                        echo 'Ẩn';
                    }
                    ?>
            </td>
            <td>
                <a href="modules/phim/xuly.php?idphim=<?php echo $row['idphim'] ?>">Xóa</a> | <a
                    href="?action=quanlyphim&query=sua&idphim=<?php echo $row['idphim'] ?>">sửa</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>