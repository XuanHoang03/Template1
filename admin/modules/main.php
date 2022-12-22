<div class="clear"></div>
<div class="main">


    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }

    if ($tam == 'quanlydanhmucphim' && $query == 'them') {
        include('modules/danhmucphim/them.php');
        include('modules/danhmucphim/lietke.php');
    } elseif ($tam == 'quanlydanhmucphim' && $query == 'sua') {
        include('modules/danhmucphim/sua.php');
    } elseif ($tam == 'quanlyphim' && $query == 'them') {
        include('modules/phim/them.php');
        include('modules/phim/lietke.php');
    } elseif ($tam == 'quanlyphim' && $query == 'sua') {
        include('modules/phim/sua.php');
    } 
    //else {
    //     include('modules/temp.php');
    // }
    ?>
</div>