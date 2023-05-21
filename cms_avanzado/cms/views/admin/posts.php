
<form enctype="multipart/form-data" id="new_posts_container" class="ui form new_posts_container">
    <h1>Nueva Publicaci&oacute;n</h1>
    <p><b>Nombre de la publicaci&oacute;n</b></p>
    <div class="ui input">
        <input type="text" class="txtNamePost" name="txtNamePost" placeholder="Nombre de la publicaci&oacute;n">
    </div>

    <p><b>Categoria</b></p>
    <div class="field">
        <select class="txtCategoryPost" name="txtCategoryPost">
            <option value="0">--Seleccionar una categoria--</option>
            <?php foreach($categories as $category): ?>
                <option value = "<?php echo $category['category_Id']; ?>" ><?php echo $category['category'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <p><b>Seleccione Una Imagen (Portada)</b></p>
    <div class="ui input">
            <input type="file" class="image_file" name="image_file">
    </div>
    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <!-- Make sure the path to CKEditor is correct. -->
            <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

        </head>
        <body>
            <form>
                <h3>Publicaciones</h3>
                <textarea name="txtDescription" id="txtDescription" >
                    
                </textarea>
                

                <button class="ui blue basic button btnSavePost">Subir publicacion</button>


            </form>
            
        </body>
    </html>
    
    
   
    
</form>
