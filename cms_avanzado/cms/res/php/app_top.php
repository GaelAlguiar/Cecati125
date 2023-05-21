<?php
    require "Functions.php";
    $user = new User_Actions();

    if(!isset($_GET['section'])){
        //obtener publicaciones
        $posts = $user->getRecentPosts();

        
    }elseif(
        isset($_GET['section']) &&
        $_GET['section'] == "post"
    ){
        //obtener contenido de las publicaciones
        $post = $user->getPostInfo($_GET['post_Id']);
       
    }
?>