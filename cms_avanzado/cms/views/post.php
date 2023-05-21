<div class="post" >
    <div class="post_main_img">
        <img src="../res/img/img_posts/<?php echo $post[0]["img_post"]; ?>.png" alt="<?php echo $post[0]["name"]; ?>" >
    </div>

    <div class="post_main_body" >
        <h1><?php echo $post[0]["name"]; ?></h1>
        
        <p>
            <b><?php echo $post[0]["category"]; ?></b>
        </p>
        
        <p>
            <b><?php echo date("d-m-Y", $post[0]["created_at"]); ?></b>
        </p>

        <h4>Cecati-125</h4>

        <p>
            <?php echo $post[0]["body"]; ?>
        </p>
    </div>
</div>