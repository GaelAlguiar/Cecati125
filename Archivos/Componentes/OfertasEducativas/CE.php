<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cecati 125</title>
    <link rel="shortcut icon" href="imagenes/Favicon-cecati.png" type="image/x-icon">

    <!--Bootstrap y Recursos Pre realizados-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="Css/whats.css" rel="stylesheet">
    <link href="Css/whats2.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/frontend.min.css">
    <link rel="stylesheet" href="Css/frontend2.min.css">
    <link rel="stylesheet" href="Css/global.css">

    <!--Iconos Pre realizados-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <!--Estilos Css Realizados-->
    <link href="Css/styles.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
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