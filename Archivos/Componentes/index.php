<!DOCTYPE html>
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

    <div id="preloader">

    </div>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


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
    require "header.php";
    ?>

    <div class="contenedor">
        <div class="titulo-contenedor wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h1 class="titulo">Ven y capacítate para<br>crecer en tu trabajo o<br>emprender tu negocio</h1>
            <button class="ver-mas"><a href="">Ver más...</a></button>
        </div>
    </div>


    <div class="custom-shape-divider-bottom-1681240468">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 58" preserveAspectRatio="none">
            <path d="M649.97 0L599.91 54.12 550.03 0 0 0 0 120 1200 120 1200 0 649.97 0z" class="shape-fill"></path>
        </svg>
    </div>


    <main>
        <section class="small-section">
            <div class="container-v2">
                <h3>Acerca de Nosotros</h3>
            </div>
        </section>
        <section class="grey-section">
            <section id="Acerca">
                <div class="container">
                    <div class="center">
                        <p class="lead">Somos un Centro de Capacitación para el Trabajo Industrial (CECATI), y como
                            plantel educativo estamos adscritos a la Dirección General de Centros de Formación para el
                            Trabajo, que a su vez depende de la Subsecretaría de Educación Media Superior (SEMS) de la
                            Secretaría de Educación Pública Federal y como tal, forma parte del Sistema Nacional de
                            Educación Tecnológica del gobierno federal mexicano. En la actualidad existen 201 planteles
                            a lo largo y ancho de nuestra República Mexicana cuyos objetivos generales.</p>
                    </div>

                    <div class="row">
                        <div class="features">
                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-file"></i>
                                    <h2>Certifícate</h2>
                                    <h3>Evaluaciones con fines de certificación.</h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-user"></i>
                                    <h2>Aprende</h2>
                                    <h3>Tenemos una gran variedad de cursos.</h3>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-calendar"></i>
                                    <h2>Actualiza</h2>
                                    <h3>Nuevos cursos continuamente.</h3>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-money"></i>
                                    <h2>Ahorra</h2>
                                    <h3>Aprende oficios para aplicar en tu vida cotidiana.</h3>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-briefcase"></i>
                                    <h2>Comienza tu propio negocio</h2>
                                    <h3>Independizate y se tu propio jefe.</h3>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-cogs"></i>
                                    <h2>Capacítate</h2>
                                    <h3>Adquiere nuevas habilidades para tu currículum.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <div class="container-m">
            <div class="item imagen-izquierda">
                <img src="../Componentes/imagenes/Mision.JPG" alt="Imagen izquierda">
            </div>
            <div class="item texto-derecha">
                <div class="titulo-m">
                    <h2>Misión</h2>
                </div>
                <div class="contenido-m wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <p>Capacitar permanentemente para y en el trabajo en diferentes especialidades a corto plazo, a
                        mujeres y hombres, asi como certificar las competencias adquiridas por las personas de manera
                        empírica, contribuyendo a su desarrollo humano; fomentando una actitud analítica, emprendedora,
                        creativa y sustentable para su inserción en el mercado laboral o autoempleo; coaduyando así al
                        desarrollo social y ecónomico del país, a tráves de una estructura de servicios flexible,
                        equitativa, de calidad y pertinente.</p>
                </div>
            </div>
            <div class="item texto-izquierda">
                <div class="titulo-m">
                    <h2>Visión</h2>
                </div>
                <div class="contenido-m wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <p>Ser la primera opción de capacitación para el trabajo a nivel estatal, por la calidad de su
                        servicio educativo sustentada en el compromiso de sus trabajadores, consolidándose como el
                        principal proveedor de personas capacitadas para el sector productivo o el autoempleo.</p>
                </div>
            </div>
            <div class="item imagen-derecha">
                <img src="../Componentes/imagenes/Vision.JPG" alt="Imagen derecha">
            </div>
        </div>
    </main>

    <section id="Caed" class="transparent-bg">
        <div class="container">
            <div class="get-started center wow fadeInDown">
                <h2 class="t2">CAED-BNEED</h2>
                <h3 class="t3">Centros de Atención para Personas con Discapacidad <br> Bachillerato No Escolarizado para
                    Estudiantes con Discapacidad</h3>
                <h4 class="t4">¿Qué es el CAED?</h4>
                <strong>
                    <p>Es un subsistema correspondiente al nivel bachillerato que se ofrece en una modalidad no
                        escolarizada
                        a la población con alguna discapacidad y con deseos de iniciar este ciclo de formación. El plan
                        de
                        estudio lo realiza el interesado avanzando a su propio ritmo y a sus posibilidades de
                        aprendizaje.
                        No existe limite de edad, ni establece tiempos para concluir el curso. <br> <br>
                        CAED se encuentra alineado a los objetivos del Plan Nacional de Desarrollo, el cual promueve la
                        integración de la población al centro educativo mediante las adaptaciones de espacios y
                        eliminación de barreras físicas; además de facilitar el estudio del bachillerato mediante el uso
                        de software y hardware especializado, material didáctico y docentes capacitados como
                        facilitadores del proceso de aprendizaje.
                    </p>
                </strong>
                <iframe type="text/html" src="https://www.youtube.com/embed/_6SFhhDMj4s?rel=0&amp;wmode=opaque"
                    frameborder="0" allowFullScreen="true" width="480" height="270"></iframe>
                <div class="request">
                    <h4><a href="https://sites.google.com/a/dgb.email/enlace-caed/home/sobre-los-caed/nuevo-leon/cecati-125"
                            target="_blank">Más información</a></h4>
                </div>
            </div>
        </div>
    </section>

    <h2 class="titulo-noticias">NOTICIAS DE CURSOS</h2>
    <section class="noticias">
        <div class="noticia">
            <div class="imagen">
                <img src="imagenes/Noticia1.jpg" alt="Imagen de la noticia 1">
            </div>
            <div class="contenido">
                <div class="elementor-post__avatar">
                    <img src='imagenes/Usuario.png' class='avatar' height='60' width='60' loading='lazy'
                        decoding='async' />
                </div>
                <h2>Pacientes con Dependencia Leve</h2>
                <p class="fecha">1 de Mayo, 2023</p>
                <p>Pacientes con Dependencia Leve<br><br>
                    📌Inscríbete a nuestro nuevo curso presencial. <br><br>
                    🧑🏽Podrás realizar tus prácticas con pacientes , en nuestras instalaciones. <br><br>
                    📚Curso presencial lunes a viernes. <br><br>
                    10 am a 2:00 pm. <br><br>
                    Información :
                    📲811 686 79 12</p>
                <button class="vermas"><a href="ver-mas.html">Ver más&nbsp&nbsp&nbsp➤</a></button>
            </div>
        </div>
        <div class="noticia">
            <div class="imagen">
                <img src="imagenes/Noticia2.jpg" alt="Imagen de la noticia 2">
            </div>
            <div class="contenido">
                <div class="elementor-post__avatar">
                    <img src='imagenes/Usuario.png' class='avatar' height='60' width='60' loading='lazy'
                        decoding='async' />
                </div>
                <h2>Ajuste de Motor</h2>
                <p class="fecha">28 de Agosto, 2022</p>
                <p>Ajuste de motor <br><br>
                    📌Inscríbete a nuestro nuevo curso presencial. <br><br>
                    🧑🏽Podrás realizar tus prácticas con los motores , en nuestras instalaciones. <br><br>
                    📚Curso presencial lunes a viernes. <br><br>
                    2:00 pm a 7:00 pm. <br><br>
                    Información :
                    📲818 310 66 01</p>
                <button class="vermas"><a href="ver-mas.html">Ver más&nbsp&nbsp&nbsp➤</a></button>
            </div>
        </div>
        <div class="noticia">
            <div class="imagen">
                <img src="imagenes/Noticia3.jpg" alt="Imagen de la noticia 3">
            </div>
            <div class="contenido">
                <div class="elementor-post__avatar">
                    <img src='imagenes/Usuario.png' class='avatar' height='60' width='60' loading='lazy'
                        decoding='async' />
                </div>
                <h2>Cursos de Salud</h2>
                <p class="fecha">23 de Marzo, 2022</p>
                <p>Curso de Salud<br><br>
                    📌Inscríbete a nuestro nuevo curso presencial. <br><br>
                    🧑🏽Podrás realizar tus prácticas con pacientes , en nuestras instalaciones. <br><br>
                    📚Curso presencial lunes a viernes. <br><br>
                    10 am a 2:00 pm. <br><br>
                    Información :
                    📲811 686 79 12</p>
                <button class="vermas"><a href="ver-mas.html">Ver más&nbsp&nbsp&nbsp➤</a></button>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="fb-comments" data-href="http://192.168.1.73:5500/Archivos/Componentes/index.html" data-width="100%"
            data-numposts="3" data-order-by="reverse_time"></div>
    </div>

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

    <!--Preloader-->
    <script>
        const preloader = document.querySelector("#preloader");

        window.addEventListener("load", () => {
            preloader.style.display = "none";
        })
    </script>
</body>

</html>