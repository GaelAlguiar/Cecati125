$(document).ready(function(){
    var root = "https://prueba-poo.000webhostapp.com/cms_avanzado/cms/"

    try{
        CKEDITOR.replace( 'txtDescription' );
    }catch(e){}

    $(".btnAdminLogin").on("click", function(){

        var email = $(".txtEmailLogin").val().trim(),
            pass  = $(".txtPassLogin").val().trim();


        $.ajax({
            type: "POST",
            url: root + "res/php/admin_actions/login.php",
            data: {
                email: email,
                pass: pass
            },
            success: function(data){
                if(data === "true"){
                    window.location.href = "https://prueba-poo.000webhostapp.com/cms_avanzado/cms/admin/";
                }else if(data === "false"){
                    alert("Sus credenciales no coinciden");
                }
            }
        });
    });

    
    $(".btnSaveCategory").on("click", function(){
        var category = $(".txtNameCategory").val().trim()
            self      = this;

        $.ajax({
            type: "POST", 
            url: root + "res/php/admin_actions/save_category.php",
            data: {
                category: category
            },
            beforeSend: function(){
                $(self).addClass("loading");
            },
            success: function(data){
                $(self).removeClass("loading");
                if(data > 0){
                    alert("Se guardo con exito su nueva categoria");
                    $(".txtNameCategory").val();

                    $(".tblCategories tr:last").after('<tr><td>'+category+'</td><td><i class="ri-close-circle-fill btnRemoveCategory" data-categoryId="'+data+'" style="color: red; cursor: pointer;" title="Eliminar Categoria"></i></td></tr>');
                }else{
                    alert("Hubo un error al agregar su categoria")
                }
            },
            error: function(){
                alert("Se ha producido un error");
            }
        });
    });
    
    $(".tblCategories").on("click", ".btnRemoveCategory", function(){
        var category_Id = $(this).attr("data-categoryId"),
            self        = this;

        $.ajax({
            type: "POST", 
            url: root + "res/php/admin_actions/delete_category.php",
            data: {
                category_Id: category_Id
            },
            success: function(data){       
                console.log(data); 
                if(data > 0){
                    $(self).parent().parent().remove();
                    alert("Se ha eliminado con exito");
                }else{
                    alert("Se ha producido un error");
                }                
            },
            error: function(){
                alert("Se ha producido un error");
            }
        });
    });

    $('.btnSavePost').on("click", function(e){
        e.preventDefault();
        var description = CKEDITOR.instances.txtDescription.getData(),
            name        = $('.txtNamePost').val().trim(),
            category_Id = $('.txtCategoryPost').val().trim();

        if(description !== "" && name !== "" && category_Id > 0){
            //subir publicacion            formulario**
            var formData = new FormData($("#new_posts_container")[0]);
            formData.append("description", description);

            $.ajax({
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();

                    xhr.upload.addEventListener("progress", function(evt){
                        if(evt.lengthComputable){
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = parseInt(percentComplete * 100);

                            console.log(percentComplete);
                        }
                    }, false);

                    return xhr;
                },
                type: "POST",
                url: root + "res/php/admin_actions/new_post.php",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function(){
                    //nada
                },
                success: function(data){
                    $('.txtNamePost, .image_file').val("");
                    CKEDITOR.instances['txtDescription'].setData("");
                    alert  ("La publicacion ha sido cargada");
                },
                error: function(){
                    alert ("ERROR");
                }

            });
        }else{
            alert ("Llene todos los campos");
        }
    });

    

});