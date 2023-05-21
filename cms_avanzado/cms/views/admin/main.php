<div class='background_main'>
    <h1 class="logo"></h1>
</div>
<div class="ui grid stackable container" style="margin-top: 25px;">


    <?php foreach($posts as $post): ?>
        <a href='https://prueba-poo.000webhostapp.com/cms_avanzado/cms/post/<?php echo $post["post_Id"]; ?>' class="four wide column post_container">
            <div>
                <img src="../res/img/img_posts/<?php echo $post["img_post"]; ?>.png" class="post_img" alt="<?php echo $post["name"]; ?>">
                <h2 class="post_title"><?php echo $post["name"]; ?></h2>
                
                <p style="text-align: center;" ><b><?php echo $post["category"]; ?></b></p>
                
                <p class="post_date"><?php echo date("d-m-Y", $post["created_at"]); ?></p>
            </div>
        </a>
    <?php endforeach; ?>
    
</div>