<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="Css/frontend-legacy.min.css">
    <link rel="stylesheet" href="especialidades/main1.css">

    <!--Iconos Pre realizados-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <!--Estilos Css Realizados-->
    <link href="Css/styles.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Document</title>
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

    <section id="Maquinas-Herramientas" style="text-align: center;">
        <h2 class="titulo-esp">Herramientas STEM en el taller de maquinados</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/herramientas STEM en el taller de maquinados.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso tiene como objetivo proporcionar a los estudiantes los conocimientos y
                habilidades necesarias para trabajar con maquinaria industrial, incluyendo la selección y uso de
                herramientas de corte, técnicas de mecanizado y programación de máquinas CNC. Los estudiantes aprenderán
                sobre la seguridad en el trabajo, la interpretación de planos técnicos y la calibración de herramientas.
                Al finalizar el curso, los estudiantes podrán operar y mantener diferentes tipos de
                máquinas-herramientas, como tornos, fresadoras y rectificadoras.</p>
        </div>
        <hr>
    </section>
    <section id="Mantenimiento Electromecánico" style="text-align: center;">
        <h2 class="titulo-esp">Mantenimiento Electromecánico del Automóvil</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en el
                mantenimiento y reparación de sistemas mecánicos y eléctricos en vehículos automotores. Los estudiantes
                aprenderán sobre la mecánica básica de motores de combustión interna, sistemas de frenos, suspensión y
                dirección, así como sistemas eléctricos y electrónicos en vehículos modernos. Al finalizar el curso, los
                estudiantes podrán realizar tareas de mantenimiento preventivo y correctivo en vehículos, diagnosticar
                problemas mecánicos y eléctricos y realizar reparaciones de manera efectiva.</p>
        </div>
        <hr>
    </section>
    <section id="Soporte a Instalaciones Eléctricas y Motores Eléctricos" style="text-align: center;">
        <h2 class="titulo-esp">Soporte a Instalaciones Eléctricas y Motores Eléctricos</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para proporcionar a los estudiantes conocimientos y habilidades
                en la instalación, mantenimiento y reparación de sistemas eléctricos y motores eléctricos. Los
                estudiantes aprenderán sobre los principios básicos de electricidad, la interpretación de planos
                eléctricos y la selección de materiales y equipos eléctricos. Además, los estudiantes aprenderán sobre
                la instalación y mantenimiento de motores eléctricos y sistemas de control de motores. Al finalizar el
                curso, los estudiantes podrán realizar tareas de instalación y mantenimiento eléctrico y de motores
                eléctricos, así como diagnosticar y reparar problemas eléctricos.
            </p>
        </div>
        <hr>
    </section>
    <section id="Refrigeración de Aire Acondicionado" style="text-align: center;">
        <h2 class="titulo-esp">Refrigeración de Aire Acondicionado</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/instalacion y mantenimiento de minisplit inverter.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en la
                instalación, mantenimiento y reparación de sistemas de refrigeración y aire acondicionado. Los
                estudiantes aprenderán sobre los principios básicos de la refrigeración, la selección de equipos y
                materiales, y las técnicas de instalación y mantenimiento de sistemas de aire acondicionado y
                refrigeración. Además, los estudiantes aprenderán sobre el diagnóstico y reparación de problemas comunes
                en sistemas de refrigeración y aire acondicionado. Al finalizar el curso, los estudiantes podrán
                realizar tareas de instalación, mantenimiento y reparación de sistemas de refrigeración y aire
                acondicionado en una variedad de entornos.</p>
        </div>
        <hr>
    </section>
    <section id="Confección Industrial de Ropa" style="text-align: center;">
        <h2 class="titulo-esp">Confección Industrial de Ropa</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en la
                confección de ropa a nivel industrial. Los estudiantes aprenderán sobre los diferentes tipos de telas y
                materiales utilizados en la industria de la confección, la selección y uso de patrones, y las técnicas
                de costura y acabado. Además, los estudiantes aprenderán sobre la gestión de la producción, la
                planificación y control de inventarios y la calidad en la confección industrial de ropa. Al finalizar el
                curso, los estudiantes podrán trabajar en la industria textil, en fábricas de ropa o en su propio
                negocio de confección de ropa.
            </p>
        </div>
        <hr>
    </section>
    <section id="Ofimática (Informática)" style="text-align: center;">
        <h2 class="titulo-esp">Ofimática (Informática)</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/introduccion de redes computacionales.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en el
                uso de herramientas informáticas comunes en un entorno de oficina. Los estudiantes aprenderán sobre el
                manejo de programas de procesamiento de textos, hojas de cálculo, presentaciones y correo electrónico.
                Además, los estudiantes aprenderán sobre la organización y gestión de archivos, la seguridad de la
                información y la creación y gestión de bases de datos simples. Al finalizar el curso, los estudiantes
                podrán utilizar herramientas informáticas para realizar tareas comunes en un entorno de oficina y
                estarán preparados para aprender nuevas herramientas a medida que se desarrollen en el futuro.</p>
        </div>
        <hr>
    </section>
    <section id="Dibujo Industrial y Arquitectónico" style="text-align: center;">
        <h2 class="titulo-esp">Dibujo Industrial y Arquitectónico</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en la
                realización de dibujos técnicos para aplicaciones industriales y arquitectónicas. Los estudiantes
                aprenderán sobre las diferentes técnicas de dibujo, la selección y uso de herramientas y materiales, y
                la interpretación de planos y dibujos técnicos. Además, los estudiantes aprenderán sobre las normas y
                estándares de dibujo, la representación de objetos en 3D y el uso de programas de dibujo asistido por
                computadora (CAD). Al finalizar el curso, los estudiantes podrán realizar dibujos técnicos para
                aplicaciones en la industria y la arquitectura y estarán preparados para aprender nuevas técnicas y
                herramientas a medida que se desarrollen en el futuro.</p>
        </div>
        <hr>
    </section>
    <section id="Asistencia Ejecutiva" style="text-align: center;">
        <h2 class="titulo-esp">Asistencia Ejecutiva</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en el
                apoyo a la gestión y administración de una empresa. Los estudiantes aprenderán sobre la organización y
                gestión de agendas y citas, la atención telefónica, el archivo y gestión de documentos, la coordinación
                de eventos y la organización de viajes de negocios. Además, los estudiantes aprenderán sobre la
                comunicación empresarial, la atención al cliente y la resolución de problemas en un entorno empresarial.
                Al finalizar el curso, los estudiantes podrán desempeñar roles de asistencia ejecutiva en empresas y
                estarán preparados para aprender nuevas habilidades y adaptarse a diferentes entornos empresariales.</p>
        </div>
        <hr>
    </section>
    <section id="Administración" style="text-align: center;">
        <h2 class="titulo-esp">Administración</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/sistema de administracion y control estrategico.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en la
                gestión y administración de una empresa. Los estudiantes aprenderán sobre la planificación estratégica,
                la gestión de recursos humanos, la contabilidad y finanzas, el marketing y las ventas, la gestión de
                operaciones y la toma de decisiones empresariales. Además, los estudiantes aprenderán sobre la
                comunicación empresarial, la ética y responsabilidad social empresarial, y la gestión del cambio y la
                innovación. Al finalizar el curso, los estudiantes podrán desempeñar roles de liderazgo y gestión
                empresarial y estarán preparados para aprender nuevas habilidades y adaptarse a diferentes entornos
                empresariales.
            </p>
        </div>
        <hr>
    </section>
    <section id="Atención Integral a Personas Adultas Mayores" style="text-align: center;">
        <h2 class="titulo-esp">Atención Integral a Personas Adultas Mayores</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/Asistencia a personas adultas mayores autonomas con dependencia leve.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en la
                atención integral a personas adultas mayores. Los estudiantes aprenderán sobre las características y
                necesidades específicas de este grupo de población, así como también sobre técnicas y estrategias para
                la atención y cuidado de su salud física, emocional y social. Además, los estudiantes aprenderán sobre
                la promoción del envejecimiento activo y saludable, la prevención de enfermedades y lesiones, y la
                gestión de situaciones de emergencia y crisis. Al finalizar el curso, los estudiantes estarán preparados
                para trabajar en diferentes entornos donde se requiere la atención y cuidado de personas adultas
                mayores, como residencias geriátricas, centros de día, servicios de ayuda a domicilio, entre otros.
            </p>
        </div>
        <hr>
    </section>
    <section id="Atención a Personas con Discapacidad" style="text-align: center;">
        <h2 class="titulo-esp">Atención a Personas con Discapacidad</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en el
                apoyo a la atención de enfermería en diferentes entornos de salud. Los estudiantes aprenderán sobre la
                anatomía y fisiología del cuerpo humano, la farmacología y administración de medicamentos, la atención y
                cuidado de heridas y lesiones, la higiene y confort del paciente, entre otros temas. Además, los
                estudiantes aprenderán sobre la ética y responsabilidad profesional en la atención de enfermería, la
                comunicación con pacientes y familiares, y la gestión de situaciones de emergencia y crisis. Al
                finalizar el curso, los estudiantes podrán desempeñar roles de auxiliar de enfermería en hospitales,
                clínicas, consultorios médicos, entre otros entornos de salud.
            </p>
        </div>
        <hr>
    </section>
    <section id="Auxiliar en Enfermería" style="text-align: center;">
        <h2 class="titulo-esp">Auxiliar en Enfermería</h2>
        <div class="especialidades">
            <img src="imagenes/imagenes de especialidades/Actualizacion de competencias para la fabricacion en metal mecanica.jpg"
                class="img-esp">
            <p class="txt-esp">Este curso está diseñado para brindar a los estudiantes conocimientos y habilidades en el
                apoyo a la atención de enfermería en diferentes entornos de salud. Los estudiantes aprenderán sobre la
                anatomía y fisiología del cuerpo humano, la farmacología y administración de medicamentos, la atención y
                cuidado de heridas y lesiones, la higiene y confort del paciente, entre otros temas. Además, los
                estudiantes aprenderán sobre la ética y responsabilidad profesional en la atención de enfermería, la
                comunicación con pacientes y familiares, y la gestión de situaciones de emergencia y crisis. Al
                finalizar el curso, los estudiantes podrán desempeñar roles de auxiliar de enfermería en hospitales,
                clínicas, consultorios médicos, entre otros entornos de salud.</p>
        </div>
        <hr>
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
</body>

</html>