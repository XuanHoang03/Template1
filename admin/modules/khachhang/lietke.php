<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_lietke_khachhang = "SELECT * FROM khachhang ORDER BY idkh DESC";
$query_lietke_khachhang = mysqli_query($mysqli, $sql_lietke_khachhang);
?>
<p>Liệt kê Người dùng</p>
<div class="lietke">
    <table border="2" width="80%" style="border-collapse : collapse">
        <tr>
            <th>Idkh</th>
            <th>Họ và Tên</th>
            <th>Ngày sinh</th>
            <th>Sdt</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Tình trạng</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_khachhang)) {
        ?>
        <tr>
            <td><?php echo $row['idkh'] ?></td>
            <td><?php echo $row['hoten'] ?></td>
            <td><?php echo $row['ngaysinh'] ?></td>
            <td><?php echo $row['sdt'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php
                    if ($row['tinhtrang'] == 1) {
                        echo 'Kích Hoạt';
                    } else {
                        echo 'Ẩn';
                    }
                    ?>
            </td>
            <td>
                <a href="modules/khachhang/xuly.php?idkh=<?php echo $row['idkh'] ?>">Xóa</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>