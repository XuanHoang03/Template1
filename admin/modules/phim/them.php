<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
?>
<h3>Thêm phim</h3>
<div class="them">
    <table border="1" width="20%" style="border-collapse : collapse" class="tb-add">
        <form method="POST" action="modules/phim/xuly.php" enctype="multipart/form-data">
            <tr>
                <td>Tên phim</td>
                <td><input class="input1" type="text" name="tenphim"></td>
            </tr>
            <tr>
                <td>hình ảnh</td>
                <td><input type="file" name="hinhanh"></td>
            </tr>
            <tr>
                <td>nền</td>
                <td><input type="file" name="nen"></td>
            </tr>
            <tr>
                <td>Phim</td>
                <td><input type="file" name="video"></td>
            </tr>
            <tr>
                <td>Thông tin phim</td>
                <td><textarea rows="5" name="thongtinphim"></textarea></td>
            </tr>
            <tr>
                <td>Thời lượng phim</td>
                <td><input class="input1" type="text" name="thoiluongphim"></td>
            </tr>
            <tr>
                <td>ngày đăng</td>
                <td><input class="input1" type="text" name="ngaydang"></td>
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
                        <option value="1">Kích hoạt</option>
                        <option value="0">Ẩn</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="themphim" value="Thêm phim"></td>
            </tr>
        </form>
    </table>
</div>