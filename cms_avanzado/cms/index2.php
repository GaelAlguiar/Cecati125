<?php 
    require "./res/php/app_top.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    <link rel="stylesheet" href="https://prueba-poo.000webhostapp.com/cms_avanzado/cms/res/css/framework/semantic/semantic.min.css">
   
    <link rel="stylesheet" href="https://prueba-poo.000webhostapp.com/cms_avanzado/cms/res/css/main.css">
</head>
<body>

    <?php require "./views/nav/main_nav.php"; ?>
    
    <?php 
        if(!isset($_GET['section'])){
            require 'views/home.php';
        }elseif(
            isset($_GET['section']) &&
            $_GET['section'] == "post"
        ){
            require 'views/post.php';
        }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://prueba-poo.000webhostapp.com/cms_avanzado/cms/res/css/framework/semantic/semantic.min.js"></script>

</body>
</html>