<meta name="viewport" content="initial-scale=1, width=device-width">

<div class='background_main' <img src="../img/img_fondo_publi.png">

    <h1 class="logo"></h1>
    
</div>
<div class="ui grid stackable container" style="margin-top: 25px;">


    <?php foreach($posts as $post): ?>
        <a href='post/<?php echo $post["post_Id"]; ?>' class="four wide column post_container">
            <div>
                <img src="res/img/img_posts/<?php echo $post["img_post"]; ?>.png" class="post_img" alt="<?php echo $post["name"]; ?>">
                <h2 class="post_title"><?php echo $post["name"]; ?></h2>
                
                <p style="text-align: center;" ><?php echo $post["category"]; ?></p>
                
                <p class="post_date"><?php echo date("d-m-Y", $post["created_at"]); ?></p>
            </div>
        </a>
    <?php endforeach; ?>
    
</div>