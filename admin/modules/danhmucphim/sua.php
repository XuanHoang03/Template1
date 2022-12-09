<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_sua_danhmucphim = "SELECT * FROM theloai WHERE idtheloai = '$_GET[idtheloai]' LIMIT 1";
$query_sua_danhmucphim = mysqli_query($mysqli, $sql_sua_danhmucphim);
?>
<?php
while ($dong = mysqli_fetch_array($query_sua_danhmucphim)) {
?>
<table border="1" width="50%" style="border-collapse : collapse">
    <form method="POST" action="modules/danhmucphim/xuly.php?idtheloai = <?php echo $dong['idtheloai'] ?>">
        <th>Điền the loai phim</th>
        </tr>
        <tr>
            <td>tên the loai</td>
            <td><input type="text" value="<?php echo $dong['tentheloai'] ?>" name="tentheloai"></td>
        </tr>
        <tr>
            <td>thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suatheloai" value="sua the loai"></td>
        </tr>
    </form>
</table>
<?php
}
?>