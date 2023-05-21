<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cecati no.125</title>
    <link rel="shortcut icon" href="imagenes/Favicon-cecati.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="Css/whats.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="Css/whats2.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/preparatoria-abierta.css">
    <link href="css/main.css" rel="stylesheet">
    <link href="Css/styles.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- HEADER -->

    <div id="preloader"></div>

    <div class="nav-bottom">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="popup-whatsapp fadeIn">
            <div class="content-whatsapp -top"><button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">close</i>
                </button>
                <p> <img src="../Componentes/imagenes/cecati-logo.png" width="45"> Hola, ¿en que podemos ayudarte? </p>

            </div>
            <div class="content-whatsapp -bottom">
                <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />

                <button class="send-msPopup" id="send-btn" type="button">
                    <i class="material-icons icon-font-color--black">send</i>
                </button>

            </div>
        </div>
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <div class="float">
                <i class="fa fa-whatsapp my-float"></i>
            </div>
        </button>
        <div class="circle-anime"></div>
    </div>

    <?php 
    require "header.php";
    ?>
    
    <section id="CAE" style="text-align: center;">
        <h2 class="titulo-esp">Capacitacion Acelerada Especifica</h2>
        <div class="OFERTAS">
            <img src="imagenes/imagenes de especialidades/herramientas STEM en el taller de maquinados.jpg"
                class="img-esp">
            <p class="txt-esp">Los cursos CAE apoyan al sector productivo al facilitarles el cumplimiento de las disposiciones legales en materia de capacitación de sus trabajadores. Tienen contenido y duración variable, y requieren el diseño de programas específicos. Se implementan con base a un convenio celebrados entre el CECATI y la parte interesada.

                Al término del curso se otorga al alumno una constancia de Capacitación Acelerada Específica. </p>
        </div>
        <hr>
    </section>
    <section id="ROCO" style="text-align: center;">
        <h2 class="titulo-esp">Examen de Reconocimiento Oficial de la Competencia Ocupacional</h2>
        <div class="OFERTAS">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">El examen se aplica a las personas que poseen los conocimientos, habilidades o destrezas y actitudes, que han adquirido en el desempeño de sus actividades, que forman la experiencia propia del individuo y que no cuentan con certificación oficial que lo avale.

                Al acreditar los conocimientos el participante obtiene un documento con validez oficial ante la Secretaría de Educación, válido en todo del país.</p>
        </div>
        <hr>
    </section>
    <section id="Cursos Regulares" style="text-align: center;">
        <h2 class="titulo-esp">Cursos Regulares</h2>
        <div class="Ofertas">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">
            </p>
        </div>
        <hr>
    </section>

    <?php 
    require "footer.php";
    ?>

    <!--Bootstrap y Recursos Pre realizados-->
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="Js/whats.js"></script>

    <!--Javascrip realizado-->
    <script src="Js/scripts.js"></script>
</body>

</html>