
<div id="new_posts_container" class="ui form new_posts_container">
    <h1>Categorias</h1>
    <p><b>Nombre de la Categoria</b></p>
    
    <div class="ui input">
        <input type="text" class="txtNameCategory" placeholder="Nombre de la Categoria">    
    </div>
   

    <button class="ui blue basic button btnSaveCategory">Guardar Categoria</button>

    <h3>Categorias Existentes</h3>
    <table class="ui single line table tblCategories">
        <thead>
            <tr>
                <th>Nombre de la categoria</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category):  ?>
            <tr>
                <td><?php echo $category['category']; ?></td>
                <td><i class="ri-close-circle-fill btnRemoveCategory" data-categoryId="<?php echo $category['category_Id']; ?>" style="color: red; cursor: pointer;" title="Eliminar Categoria"></i></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   
</div>