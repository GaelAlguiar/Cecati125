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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="Css/whats.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="Css/whats2.css" rel="stylesheet">
    <link href="./Css/requisitos.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/styles-sector-productivo.css">
    <script src="https://kit.fontawesome.com/41cd0ceacd.js" crossorigin="anonymous"></script>
    <link href="Css/styles.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
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
    include 'componentes/header.php';
    ?>

    <!-- SECTION REQUISITOS -->

    <div class="wrapper">
        <div class="fondo"></div>
        <div class="one">
            <h1 style="margin-bottom: 10px;">Requisitos</h1>
            <ul>
                <li><i class="fa-solid fa-square-check" style="color: #ffffff;">
                    </i><b>
                        Copia de Acta de Nacimiento
                    </b></li>
                <li><i class="fa-solid fa-square-check" style="color: #ffffff;">
                    </i><b>
                        de Certificado de último grado de estudios
                    </b> </li>
                <li><i class="fa-solid fa-square-check" style="color: #ffffff;">
                    </i><b>
                        Copia de comprobante de domicilio con código postal
                    </b></li>
                <li><i class="fa-solid fa-square-check" style="color: #ffffff;">
                    </i><b>
                        4 fotografías recientes tamaño infantil (Tipo Mate)
                    </b></li>
                <li><i class="fa-solid fa-square-check" style="color: #ffffff;">
                    </i><b>
                        Copia de CURP</b></li>
                <li><i class="fa-solid fa-square-check" style="color: #ffffff;">
                    </i><b>
                        Edad de 15 a 65 años
                    </b></li>
                <li><i class="fa-solid fa-square-check" style="color: #ffffff;">
                    </i><b>
                        Cuota única por curso
                    </b></li>

            </ul>


        </div>


    </div>


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