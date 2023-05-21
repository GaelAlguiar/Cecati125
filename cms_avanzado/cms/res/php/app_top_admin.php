<?php
    require "Functions.php";
    $admin = new Admin_Actions();

    if(
        isset($_SESSION['admin']) &&
        !isset($_GET['section'])
    ){
        $posts = $admin->getRecentPosts();
    }

    if(
        isset($_SESSION['admin']) &&
        isset($_GET['section']) &&
        $_GET['section'] == "posts"
    ){
        $categories = $admin-> getCategories();
    }

    if(
        isset($_SESSION['admin']) &&
        isset($_GET['section']) &&
        $_GET['section'] == "categories"
    ){
        $categories = $admin-> getCategories();
    }
?>