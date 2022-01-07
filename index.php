<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" 
    integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>WebThuanMYsqli</title>
    <link rel="icon" href="https://i.pinimg.com/236x/0f/06/dc/0f06dc51a4ef42e672fbac51fdeea488.jpg" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/css/all.min.css">
</head>
<body>
<div class="app">
    <?php
        session_start();
        include 'admincp/config/config.php';
        include 'pages/header.php';
        // include 'pages/menu.php';
        include 'pages/main.php';
        include 'pages/footer.php';
    ?>
</div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        // Show the first tab and hide the rest
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();

        // Click function
        $('#tabs-nav li').click(function(){
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();
        
        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
        });
    </script>
</body>
</html>