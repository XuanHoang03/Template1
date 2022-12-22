<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="./modules/css/style.css">
    <link rel="stylesheet" href="./modules/css/bootstrap-grid.css">
</head>

<body>
    <h3 class="header">ADMIN</h3>
    <?php
    include("config/config.php");
    include("modules/menu.php");
    include("modules/main.php");
    include("modules/footer.php");
    include("modules/header.php");
    ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('thongtinphim');
    </script>
</body>

</html>