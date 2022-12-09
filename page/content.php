<div class="content">
    <?php

    if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    switch ($tam) {
        case 'theloaiphim':
            include('page/pages/theloai.php');
            break;
        case 'phim':
            include('page/pages/phim.php');
            break;
        case 'dangky':
            include('page/pages/dangky.php');
            break;
        case 'napvip':
            include('page/pages/napvip.php');
            break;
        case 'timkiem':
            include('page/pages/timkiem.php');
            break;
        case '':
            include('page/pages/phimmoi.php');
            break;
    }
    ?>

</div>