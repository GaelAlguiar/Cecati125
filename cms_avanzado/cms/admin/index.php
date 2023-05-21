<?php 
    require "../res/php/app_top_admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS Admin</title>
    <link rel="stylesheet" href="../res/css/framework//semantic//semantic.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../res/css/main.css">
</head>
<body>

    <?php 
        if(
            isset($_SESSION['admin'])
        ){
            require "../views/nav/main_admin_nav.php"; 
        }
       
    
    ?>
    
    <?php 
        if(
            !isset($_SESSION['admin'])
        ){
            
            require "../views/admin/home.php";
        }elseif(
            isset($_SESSION['admin']) && 
            !isset($_GET['section'])

        ){
            require '../views/admin/main.php';
        }elseif(
            isset($_SESSION['admin']) && 
            isset($_GET['section']) &&
            $_GET['section'] == "posts"

        ){
            require '../views/admin/posts.php';
            
        }elseif(
            isset($_SESSION['admin']) && 
            isset($_GET['section']) &&
            $_GET['section'] == "categories"

        ){
            require '../views/admin/categories.php';
        }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="../res//css//framework//semantic/semantic.min.js"></script>
<script src="../res/js/admin.js"></script>


</body>
</html>