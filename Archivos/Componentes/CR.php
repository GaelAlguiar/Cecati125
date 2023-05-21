<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cecati 125</title>
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

    <div id="preloader"></div>

    <div class="nav-bottom  wow fadeInDown animated">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="popup-whatsapp fadeIn wow" data-wow-duration="100ms" data-wow-delay="600ms">
            <div class="content-whatsapp -top"><button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">close</i>
                </button>
                <p><img src="../Componentes/imagenes/cecati-logo.png" width="45"> Hola, ¿en que podemos ayudarte? </p>

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
    include 'componentes/header.php';
    ?>

<h1 class="titulo-preparatoria">Cursos de extensión</h1>

<section class="info-preparatoria container">
    <div class="contenedor-info get-started">
        <h2 class="titulo-estudia">Información:</h2>
        <div class="contenedor-flex">
            <p class="texto-preparatoria">*Permiten a los estudiantes adquirir los conocimientos teóricos-prácticos indispensables para su incorporación al medio laboral.
            <br>
            </p>
        </div>
    </div>
</section>

    <?php
    include 'componentes/footer.php';
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

    <!--Preloader-->
    <script>
        const preloader = document.querySelector("#preloader");

        window.addEventListener("load", () => {
            preloader.style.display = "none";
        })
    </script>
</body>

</html>