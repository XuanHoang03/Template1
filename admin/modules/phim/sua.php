<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_sua_phim = "SELECT * FROM phim WHERE idphim = '$_GET[idphim]' LIMIT 1";
$query_sua_phim = mysqli_query($mysqli, $sql_sua_phim);
?>
<?php
while ($row = mysqli_fetch_array($query_sua_phim)) {
?>
<table border="1" width="50%" style="border-collapse : collapse">
    <form method="POST" action="modules/phim/xuly.php?idphim=<?php echo $row['idphim'] ?>"
        enctype="multipart/form-data">
        <tr>
            <td>Tên phim</td>
            <td><input type="text" value="<?php echo $row['tenphim'] ?>" name="tenphim"></td>
        </tr>
        <tr>
            <td>hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
                <img src="modules/phim/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
            </td>
        </tr>
        <tr>
            <td>nền</td>
            <td>
                <input type="file" name="nen">
                <img src="modules/phim/uploads/<?php echo $row['nen'] ?>" width="150px">
            </td>
        </tr>
        <tr>
            <td>Thông tin phim</td>
            <td><textarea rows="5" name="thongtinphim"> <?php echo $row['thongtinphim'] ?> </textarea></td>
        </tr>
        <tr>
            <td>Thời lượng phim</td>
            <td><input type="text" value="<?php echo $row['thoiluongphim'] ?>" name="thoiluongphim"></td>
        </tr>
        <tr>
            <td>ngày đăng</td>
            <td><input type="text" value="<?php echo $row['ngaydang'] ?>" name="ngaydang"></td>
        </tr>
        <tr>
            <td>Thể loại phim</td>
            <td>
                <select name="idtheloai">
                    <?php
                        $sql_theloai = "SELECT * FROM theloai ORDER BY idtheloai DESC ";
                        $query_theloai = mysqli_query($mysqli, $sql_theloai);
                        while ($row_theloai = mysqli_fetch_array($query_theloai)) {
                        ?>
                    <option value="<?php echo $row_theloai['idtheloai'] ?>"><?php echo $row_theloai['tentheloai'] ?>
                    </option>
                    <?php
                        }
                        ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <?php
                        if ($row['tinhtrang'] == 1) {
                        ?>
                    <option value="1" selected>Kích hoạt</option>
                    <option value="0">Ẩn</option>
                    <?php
                        } else {
                        ?>
                    <option value="1">Kích hoạt</option>
                    <option value="0" selected>Ẩn</option>
                    <?php
                        }
                        ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suaphim" value="Sửa phim"></td>
        </tr>
    </form>
</table>

<?php
}
?>