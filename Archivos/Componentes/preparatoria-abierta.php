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
    include 'componentes/header.php';
    ?>

    <h1 class="titulo-preparatoria">Preparatoria Abierta</h1>

    <!-- SECTION INFO PREPARATORIA -->
    

    <section class="info-preparatoria container">
        <div class="contenedor-info get-started">
                <h2 class="titulo-estudia">Beneficios</h2>
                <div class="contenedor-flex">
                <p class="texto-preparatoria">*Termina la preparatoria de 6 meses a 1 año.
                    <br>
                    <br>
                    *Certificado SEP, con validez en todas las universidades (La UANL te recibe como interno)
                    <br>
                    <br>
                    *Sin tareas, ni proyectos. Estudiando a tu paso.
                    <br>
                    <br>
                    *Gratis asesorías con maestros altamente capacitados.</p>
                <img class="img-prepa" src="imagenes/Prepa-Abierta.jpg" alt="">
            </div>
            </div>
    </section>
    <!-- FIN SECTION INFO PREPARATORIA -->

    <!-- SECTION REQUISITOS -->
    <section class="requisitos-preparatoria container">
        <h2 class="titulo-requisitos">REQUISITOS</h2>
            <ul class="lista-requisitos">
                <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i> CURP</li>
                <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i> Acta de Nacimiento</li>
                <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i> Certificado de terminacion de estudios educacion secundaria(Ambos lados)</li>
                <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i> 2 fotografias tamañan infantil (Acabado Mate con camisa blanca y fondo blanco)</li>
                <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i> Solicitud de Preparatoria Abierta</li>
                <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i> Realizar el pago de inscripcion a Preparatoria Abierta por $150 (Traer ticket original)</li>
                <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i> Estar inscrito durante todo el ciclo escolar en alguna especialidad en el CECATI No.125 durate tu estadia en Preparatoria Abierta</li>
            </ul>
    </section>
    <!-- FIN SECTION REQUISITOS -->

    <section class="costos-preparatoria container">
        <h2 class="titulo-costos">COSTOS</h2>
        <ul class="lista-requisitos">
            <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i>  Examen     $83</li>
            <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i>  Guias de estudio    $50</li>
            <li class="objeto-lista"><i class="fa-regular fa-circle-check"></i>  Al finalizar tus 22 modulos el tramite del certificado tiene un costo de $300</li>
        </ul>
    </section>


    <!-- SECTION PREGUNTAS FRECUENTES -->
    <section class="preguntas-frecuentes container">
        <h2 class="titulo-preguntas">Preguntas Frecuentes</h2>

        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUno" aria-expanded="false" aria-controls="collapseUno">
                    ¿Que es la preparatoria abierta?
                </button>
              </h2>
              <div id="collapseUno" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
                <div class="accordion-body">
                  <p>Es un plan de estudio modular que esta integrado por 22 Módulos, los cuales si te propones los puedes acreditar en solo 8 meses.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                    ¿Que es un modulo?
                </button>
              </h2>
              <div id="collapseDos" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
                <div class="accordion-body">
                  <p>Un módulo es una unidad de aprendizaje del plan se integran los contenidos de distintos campos de conocimiento, estrategias de enseñanza y aprendizaje, actividades formativas e información cuya finalidad es que desarrolles competencias. (Un modulo es igual a un examen)</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                    ¿Cuando me puedo inscirbir?
                  </button>
                </h2>
                <div id="collapseTres" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Al realizar la inscripción de CECATI puedes realizar tu inscripción en Preparatoria Abierta en el Área de Vinculación con papelería completa.(Durante todo el ciclo escolar están disponibles las inscripciones).</p>
                  </div>
                </div>
              </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
                    ¿Cúantos módulos puedo presentar por mes?
                  </button>
                </h2>
                <div id="collapseCuatro" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
                  <div class="accordion-body">
                    <p>Durante un mes puedes presentar hasta 4 exámenes, de los cuales se presentan 2 cada 15 días.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                    ¿Cuentan con asesorías?
                  </button>
                </h2>
                <div id="collapseCinco" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
                  <div class="accordion-body">
                    <p>Si, son de manera presencial en el plantel los sábados a las 12:45 hrs. ,además contamos con una pagina donde puedes presentar exámenes de simulación Daypo.com.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis">
                    ¿Cómo consigo mis guías?
                  </button>
                </h2>
                <div id="collapseSeis" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>En el Área de Vinculación del Cecati 125 de lunes a sábado en un horario de 8:00 a 13:00 hrs.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSiete" aria-expanded="false" aria-controls="collapseSiete">
                    ¿Siempre serán en línea los exámenes?
                  </button>
                </h2>
                <div id="collapseSiete" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
                  <div class="accordion-body">
                    <p>Una vez que el sistema prepa abierta nos indiquen los exámenes serán en el plantel los sábados (previo calendario) a las 12:45 horas.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOcho" aria-expanded="false" aria-controls="collapseOcho">
                    ¿Cómo se mi resultado del examen?
                  </button>
                </h2>
                <div id="collapseOcho" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>El resultado se envía por correo electrónico 15 días después de haber presentado los exámenes. La calificación mínima aprobatoria es 6 en una escala de 10.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNueve" aria-expanded="false" aria-controls="collapseNueve">
                    ¿Puedo revalidar mis materias?
                  </button>
                </h2>
                <div id="collapseNueve" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
                  <div class="accordion-body">
                    <p>Por ser un sistema no escolarizado NO se revalidan materias.</p>
                  </div>
                </div>
              </div>
          </div>
    </section>

    <!-- FIN SECTION PREGUNTAS FRECUENTES -->

    <?php 
    include 'componentes/footer.php';
    ?>
    
    
    <script src="Js/scripts.js"></script>
    <script src="Js/whats.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>