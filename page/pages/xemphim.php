<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_xemphim = "SELECT * FROM phim WHERE idphim = '$_GET[idphim]' LIMIT 1";
$query_xemphim = mysqli_query($mysqli, $sql_xemphim);
?>

<?php
while ($row = mysqli_fetch_array($query_xemphim)) {
?>
<video width="100%" height="900" controls>

    <source src="admin/modules/phim/video/<?php echo $row['video'] ?>" type="video/mp4">

</video>
<?php
}
?>