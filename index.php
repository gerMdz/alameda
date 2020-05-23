<?php
$lema = 'Oraciones Audaces';
$lemaSinEspacios = 'oraciones-audaces';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once('gerVendor/gerFunctions.php');
include_once('links.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iglesia de La Alameda,
     <?php echo $lema; ?>, Iglesia Bautista, Celebracion, Dios, Fe, Amistad, Arte,Libertad, Servicio, Misión, Mendoza">
    <meta name="keywords"
          content="Iglesia de la Alameda, Celebracion, Dios, Fe, Amistad, Arte, Libertad, Servicio, Misión, Mendoza">
    <meta name="author" content="Iglesia de la Alameda">

    <meta property="og:title" content="Iglesia Alameda"/>
    <meta property="og:type" content="website"/>

    <meta property="og:url" content="https://iglesiaalameda.com/index.php"/>

    <meta property="og:image" content="https://iglesiaalameda.com/images/og/og-base.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Iglesia de la Alameda</title>
    <?php include 'favicon.php' ?>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="stream-ui-kit/assets/vendors/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap core CSS -->

    <!-- Icon core  -->

    <link href="css/foundation-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/743c9941eb.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Icon core  -->

    <!-- Style 3th core  -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/business-casual.min.css?v=<?php echo $version ?>" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stream-ui-kit/assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="stream-ui-kit/assets/css/styles.css">
    <!-- Style 3th core  -->

    <!-- Style Auto core  -->
    <link href="css/igles.min.css?v=<?php echo $version ?>" rel="stylesheet">
    <!-- Style Auto core  -->

    <!-- Fonts  core  -->
    <link href="css/alameda/fontAlameda.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700"
          rel="stylesheet">
    <link href="css/fonts/univers/font.css?v=<?php echo $version ?>" rel="stylesheet">
    <!-- Fonts  core  -->

    <!-- Custom styles for this template -->

    <style>
        /*.swiper-container {*/
        /*width: 100vw;*/
        /*height: 100vh;*/
        /*padding: 50px;*/
        /*}*/
        /*.swiper-slide {*/
        /*background-position: center;*/
        /*background-size: cover;*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*}*/
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }
    </style>


</head>

<body>

<!--<h1 class="site-heading text-center text-white d-sm-block">-->
<!--      <span class="section-heading-upper">-->
<!--        <img src="imagenes/LOGO_ALAMEDA_CON_TEXTO_B.png" style="max-height: 150px" class="img-fluid mt-5">-->
<!--      </span>-->
<!---->
<!---->
<!--</h1>-->
<header>
    <?php include 'nav.php'; ?>
    <hr class="mt-5"/>
    <div class="col-12 bg-faded">
        <div class="text-center">
            <h1 class="display-sm-4 display-lg-3 ">
                <a href="notas.php">
                    <i class="fas fa-globe  "></i>
                </a>
                <span class="js-display-typing"></span>
            </h1>
        </div>
    </div>
    <!--Seccion cover-->
    <section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white"
             style="background-image: url(images/series/cabecera_index.jpg); background-position: 50% 0px !important;">
        <!-- Vacío para texto Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space ">
            <div class="row justify-content-center">

            </div>
        </div>


        <!-- Fin Vacío para texto Content -->
    </section>
    <!--    FIn Section COver-->


</header>

<!-- Horarios - Invitación - Video -->
<section class="bg-light u-content-space mt-5">
    <div class="container">
        <!-- Invitación: Header -->
        <header class="text-center w-md-50 mx-auto  mt-5 mb-8 ">
            <div class="row align-items-lg-center mb-5">

                <div class="display-4 mb-2 text-primary col-sm-12 text-center">
                    <div class="col-lg-3 mx-auto">
                        <i class="fas fa-laptop-house"></i>
                    </div>
                    <div class="col-lg-7 mx-auto">
                        <h2>

                            <b>Domingos 11 Hs.

                                y 20 Hs.</b></h2>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Invitación: Header -->


        <div class="row align-items-lg-center">
            <!--            <div class="col-lg-4 col-md-5">-->
            <!--                 Row -->
            <!--                <div class="row mr-md-4 mb-lg-5">-->
            <!--                    <div class="col-lg-12 mb-5">-->
            <!--                        <div class="text-primary mb-2">-->
            <!--                            <h3><i class="fas fa-clock"></i></h3>-->
            <!--                        </div>-->
            <!--                        <h2 class="h2">Domingos 11:00 Hs.</h2>-->
            <!--                        <p class="mb-0"></p>-->
            <!--                    </div>-->
            <!---->
            <!--                    <div class="col-lg-12 mb-5">-->
            <!--                        <div class="text-primary mb-2">-->
            <!--                            <h3>-->
            <!--                            <i class="far fa-clock"></i>-->
            <!--                            </h3>-->
            <!--                        </div>-->
            <!--                        <h4 class="h2">Domingos 20:00 Hs.</h4>-->
            <!--                        <p class="mb-0"></p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!-- End Row -->

            <!-- Row -->
            <!--                <div class="row mr-md-4">-->
            <!--                    <div class="col-lg-6 mb-5 mb-lg-0">-->
            <!--                        <div class=" text-primary mb-2">-->
            <!--                            <h3>-->
            <!--                            <i class="fas fa-laptop-house"></i>-->
            <!--                            </h3>-->
            <!--                        </div>-->
            <!--                        <h4 class="h5">Una Casa Grande</h4>-->
            <!--                        <p class="mb-0">Para una Familia Grande.</p>-->
            <!--                    </div>-->
            <!---->
            <!--                    <div class="col-lg-6 mb-5 mb-lg-0">-->
            <!--                        <div class=" text-primary mb-2">-->
            <!--                            <h3>-->
            <!--                            <i class="fas fa-globe"></i>-->
            <!--                            </h3>-->
            <!--                        </div>-->
            <!--                        <h4 class="h5">-->
            <!--                            Viví la Experiencia OnLine-->
            <!--                            </h4>-->
            <!--                        <p class="mb-0">-->
            <!--                            <a href="notas.php">-->
            <!--                            Ingresa aquí para no perderte nada-->
            <!--                            </a>-->
            <!--                        </p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!-- End Row -->
        </div>

        <div class="col-lg-12 col-md-12">
            <!-- Enlave Video -->
            <article class="u-destacado u-box-shadow-sm text-center rounded">
                <!-- Article Header -->
                <header class="u-destacado__header bg-light-blue text-white rounded-top">
                    <strong class="u-destacado__header-price display-4 font-weight-bold mb-2">
                        <h3>Experiencia Alameda</h3>
                    </strong>

                    <h3 class="u-destacado__header-title small text-uppercase u-letter-spacing-sm mb-4">
                        <a href="notas.php" class="text-white">
                            En vivo desde aqui
                        </a>
                    </h3>

                    <svg class="u-destacado__header-decoration" version="1.1" preserveAspectRatio="none"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
                         height="70px" viewBox="0 0 300 70">
                        <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                              opacity="0.6" fill="#fff"></path>
                        <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                              opacity="0.6" fill="#fff"></path>
                        <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                              opacity="0.7" fill="#fff"></path>
                        <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                              fill="#fff"></path>
                    </svg>
                </header>
                <!-- End Article Header -->

                <!-- Article Content -->
                <div class="u-destacado__content">
                    <iframe src="https://www.youtube.com/embed/<?php echo $index_link; ?>" class="img-fluid mx-auto"
                            frameborder="0"
                            width="100%"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    <!--                        <a class="btn btn-primary py-3 px-4" href="#!">Order Now</a>-->
                </div>
                <!-- End Article Content -->
            </article>
            <!-- Fin Enlace Video -->
        </div>

        <!-- Invitación: Header -->
        <header class="text-center w-md-50 mx-auto  mt-5 mb-8">
            <h2 class="h1 bg-alameda">
                <a href="notas.php" class="text-white">
                    Vení tal como SOS</h2>

            <p class="h5"></p>
        </header>
        <!-- End Invitación: Header -->
    </div>

</section>
<!-- Fin Horarios - Invitación - Video -->

<section class="page-section cta fondo-evento" id="campania">
    <div id="series" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#series" data-slide-to="0" class="active"></li>
            <li data-target="#series" data-slide-to="1"></li>
            <li data-target="#series" data-slide-to="2"></li>
            <!--                    <li data-target="#series" data-slide-to="3"></li>-->

        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="images/slider/imagen%20auditorio.png" alt="La Alameda" class="img-fluid rounded">
            </div>
            <div class="carousel-item ">
                <img src="series/oraciones-audaces/ORACIONES-AUDACES-2020-ANUNCIO-02.jpg" alt="La Alameda"
                     class="img-fluid ">
            </div>

            <div class="carousel-item ">
                <img src="images/slider/imagen%20auditorio_noche.png" alt="La Alameda" class="img-fluid ">
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#series" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#series" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!--</div>-->
    <!--</div>-->
    </div>
</section>

<?php if ($ahora < date('2020-05-23 18:00')) { ?>
<section class="u-destacado section" id="avanza">
    <div class="js-parallax u-content-space u-box-shadow-lg bg-white rounded-md mx-3 mx-lg-5">
        <div class="container">
            <div class="text-center w-md-50 mx-auto py-5">
                <a class="display-4 d-inline-block mb-3 text-dark" target="_blank" href="avanza.php"
                   data-toggle="tooltip" data-placement="top" title="" data-original-title="Avanza">
                            <span class="fa-stack list-inline">
                            <i class="fas fa-circle fa-stack-2x text-point"></i>
                            <i class="fi fi-torsos-all fa-stack-1x fa-inverse item-inline"
                               style="font-size: 1em; text-align: left" aria-hidden="true"></i>
                            <i class="fi fi-torsos-all-female fa-stack-1x fa-inverse item-inline"
                               style="font-size: 1em; text-align: right" aria-hidden="true"></i>
                            <i class="fas fa-plus-circle fa-stack-1x fa-inverse item-inline "
                               style="font-size: 0.5em; text-align: center; margin-top:35px " aria-hidden="true"></i>
                        </span>

                </a>
                <h2 class="lead font-weight-normal mb-5 text-uppercase display-5">¿Te gustaría formar parte de nuestra
                    <strong>familia de fe?</strong></h2>


                <a class="btn btn-primary btn--pill u-box-shadow-lg py-3 px-4 btn-xl"
                   href="avanza.php">
                    <i class="fas fa-road mr-2 text-white"></i>Sumate desde aquí
                </a>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<section class="page-section container cta fondo-evento" id="ppasos">

    <div class="row text-center">
        <div class="col-sm-3 pull-left">
            <img src="../images/next.jpg" class="img-fluid rounded"/>
        </div>
        <div class="col-sm-9 pull-right">
            <blockquote class="bg-dark text-tan blockquote rounded">

                <h3 class="quote ">

                    Dios tiene un plan para tu vida <br/>
                    y queremos ayudarte a descubrirlo.

                </h3>

            </blockquote>
        </div>
    </div>


    <div class="card bg-teal text-tan container mb-1">
        <div class="row">
            <div class="col-sm-3 pull-left card-header px-2 px-lg-3">
                <!--        <img class="w-100" src="../images/PuntoDePartida.jpeg" alt="Punto de Partida">-->
                <img class="w-100" src="images/gpc-sin-texto.png" alt="Grupos Pequeños">
            </div>
            <div class="col-sm-9  pull-right text-left ">

                <div class="card-body ml-lg-5 5 mt-lg-5">
                    <h1>Grupos Pequeños</h1>
                    <span class="card-text">

                    Para que cada persona que llegue a la iglesia de La Alameda, se integre, permanezca, se desarrolle y se multiplique en un Grupo Pequeño.
                </span>
                    <div class="text-center">
                        <small class="text-tan">Sumate a un grupo pequeño desde </small><br/>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfuKOBEFTWx-t_wiQR7CL8Gf443RxGeAYhP1nNETb7BSNkGuA/viewform"
                           class="btn btn-outline-info text-tan btn-sm" target="_blank">aquí</a>
                    </div>
                    <!--            <span class="card-text ">-->
                    <!--                ¿Tenés preguntas acerca de Dios y te gustaría conversar?<br/>-->
                    <!--                Punto de partida es una experiencia conversacional creada-->
                    <!--                para vos que buscás tener un acercamiento a la fe, explorando preguntas como: <br/>-->
                    <!--            <ul class="punto">-->
                    <!--                <li ><img class="img-fluid" src="../images/PEncuentroSinText.png" width="16" height="16"></img>-->
                    <!--                    ¿Dios existe?-->
                    <!--                </li>-->
                    <!--                <li> <img class="img-fluid" src="../images/PEncuentroSinText.png" width="16" height="16"></img>-->
                    <!--                    ¿Puedo confiar en la Biblia?-->
                    <!--                </li>-->
                    <!---->
                    <!--            </ul>-->
                    <!--            En un ambiente libre de prejuicios.-->
                    <!--            </span>-->
                </div>

            </div>
        </div>
        <!--        <div class="card-footer text-center">-->
        <!--            <small class="text-tan">Si estas interesado, envíanos un whatsapp al 0261 3070 443 con la frase-->
        <!--                <strong>"info punto de partida"</strong> y nos comunicaremos con vos </small><br/>-->
        <!--            <a href="puntopartida.php" class="btn btn-outline-info text-tan btn-sm">Ver detalles</a>-->
        <!--        </div>-->
    </div>

    <!--<div class="card-deck">
    <div class="col-sm-12 bg-light">
        <div class="col-sm-3 float-left">
            <div class="card-header">
                <img src="imagenes/PuntoDePartida.jpeg" class="img-fluid"
                >
            </div>

        </div>
        <div class="col-sm-9 text-center">
            <div class="card-body">
                <h5 class="card-title text-center">Punto de Partida</h5>
                <p class="card-text ">
                    ¿Tenés preguntas acerca de Dios y te gustaría conversar?<br/>
                    Punto de partida es una experiencia conversacional creada
                    para vos que buscás tener un acercamiento a la fe, explorando preguntas como: <br/>
                <ul class="punto">
                    <li ><img class="img-fluid" src="imagenes/PEncuentroSinText.png" width="16" height="16"></img>
                        ¿Dios existe?
                    </li>
                    <li> <img class="img-fluid" src="imagenes/PEncuentroSinText.png" width="16" height="16"></img>
                        ¿Puedo confiar en la Biblia?
                    </li>

                </ul>
                En un ambiente libre de prejuicios.
                </p>

            </div>

        </div>
        <div class="col-sm-12 float-none">
            <div class="card-footer text-center">
                <small class="text-point-sec">Si estas interesado, envíanos un whatsapp al 0261 3070 443 con la frase
                    <strong>"info punto de partida"</strong> y nos comunicaremos con vos </small>
            </div>
        </div>
    </div>
    </div>-->


    <div class="container-fluid">
        <div class="row">
            <div class="card-deck " id="'bautismo">
                <div class="card bg-point border-point ">
                    <div class="text-center pt-3 ">
                        <span class="card-title text-center ">
                            <i class="fas fa-seedling fa-9x text-point"></i></span>
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title text-center">Charla de Bautismo</h5>
                        <p class="card-text text-center">
                            Cuando decidís se un seguidor de Jesús, lo primero que descubrís es que sus huellas
                            comienzan en las aguas del bautismo. <br/>
                            ¡El bautismo como Jesús lo propuso, es la marca que separa el camino de los curiosos,
                            del camino de los seguidores!<br/>
                            Vení a la charla preparatoria y enterate porqué.<br/>
                            Te esperamos.
                            <!--                            En el edificio educacional (San Martín 2020).<br/>-->
                            <!--                            Para niños de 4° a 7° grado. Los Esperamos-->


                        </p>

                    </div>
                    <div class="card-footer text-center">
                        <?php if ($ahora < date('2019-10-26 16:00')) { ?>
                            <small class="text-point-sec">
                                Sábado 26 de octubre, 16:00 hs.
                                <br/>
                                <!--                            <a href="masporhacer.php#crecimiento20181110"-->
                                <!--                               data-toggle="tooltip"-->
                                <!--                               title="<h5 class='bg-light-blue'><strong>Mas detallles aquí</strong> "><i class="material-icons btn-sm text-point-sec">local_library</i></a>-->
                                <small>Adelantá tu asistencia enviando un mensaje a nuestro número de Conectar Alameda
                                    (261 517 8081)
                                    <br/>
                                    con el texto <strong>Bautismo</strong> o por <br/>
                                    <a href="https://api.whatsapp.com/send?phone=5492615178081&text=BAUTISMO"
                                       class="text-realce-verde"> por Whatsapp
                                        <i class="fab fa-whatsapp"></i> haciendo clic aqui </a>
                                </small>
                            </small>

                        <?php } ?>
                    </div>

                </div>


                <div class="card bg-point border-point">
                    <div class="text-center pt-3 ">
                        <span class="card-title ">
                            <i class="fas fa-link fa-9x text-point"></i></span>
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title text-center">Enlace de Grupos de Amistad</h5>
                        <p class="card-text">
                            Si todavía no tenes un grupo pequeño con quien experimentar 40 días de Bondad.<br/>
                            Si queres connectarte con nuevos amigos<br/>
                            Si no queres quedarte afuera


                        </p>
                        <!--                        <small>Adelantá tu asistencia enviando un mensaje a nuestro número de Conectar Alameda-->
                        <!--                            (261 517 8081)  con el texto <strong>Enlace</strong></small>-->
                    </div>

                    <div class="card-footer text-center">
                        <?php if ($ahora < date('2019-08-02 21:00')) { ?>
                            <small class="text-point-sec">
                                Viernes 02 de agosto a las 21:00 hs.<br/>
                                Realizaremos un nuevo "Enlace de Grupos Pequeños".
                                Adelantá tu asistencia enviando un mensaje a nuestro número de Conectar Alameda
                                (261 517 8081) con la palabra <strong>Enlace</strong> o por
                                <a href="https://api.whatsapp.com/send?phone=5492615178081&text=ENLACE"> por Whatsapp
                                    <i class="fab fa-whatsapp"></i> haciendo clic aqui </a>


                            </small>
                        <?php } ?>
                    </div>
                    <?php ?>

                </div>

                <div class="card bg-point border-point">
                    <div class="text-center pt-3">
                        <span class="card-title ">
                            <span class="fa-stack list-inline" style="font-size: 4.5em">
                            <i class="fas fa-circle fa-stack-2x text-point"></i>
                            <i class="fi fi-torsos-all fa-stack-1x fa-inverse item-inline"
                               style="font-size: 1em; text-align: left" aria-hidden="true"></i>
                            <i class="fi fi-torsos-all-female fa-stack-1x fa-inverse item-inline"
                               style="font-size: 1em; text-align: right" aria-hidden="true"></i>
                            <i class="fas fa-plus-circle fa-stack-1x fa-inverse item-inline "
                               style="font-size: 0.5em; text-align: center; margin-top:35px " aria-hidden="true"></i>
                        </span>
                            </span>
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title text-center">Charla para nuevos miembros</h5>
                        <p class="card-text">
                            Nos alegra verte cada domingo en La Alameda y saber que esto ha sido bueno para tu
                            corazón<br/>
                            Cientos de voluntarios sirven cada semana para hacer realidad nuestra amada comunidad de fe.<br/>
                            <b> ¿Te atreves a ser parte?</b>
                            Si ya estás bautizado, ahora da el paso adelante y sumate a la familia.
                            !Se miembro de La Alameda!

                        </p>
                    </div>

                    <div class="card-footer text-center">
                        <?php if ($ahora < date('2020-05-23 18:00')) { ?>
                            <small class="text-point-sec">
                                Sábado 23/5, de 19 a 21hs
                                <!--                                        <a href="masporhacer.php#crecimiento20181110"-->
                                <!--                                                                             data-toggle="tooltip"-->
                                <!--                                                                             title="<h5 class='bg-light-blue'><strong>Mas detallles aquí</strong> "><i class="material-icons btn-sm text-point-sec">local_library</i></a>-->

                                <br/>
                                <!--                            <a href="masporhacer.php#crecimiento20181110"-->
                                <!--                               data-toggle="tooltip"-->
                                <!--                               title="<h5 class='bg-light-blue'><strong>Mas detallles aquí</strong> "><i class="material-icons btn-sm text-point-sec">local_library</i></a>-->
                                <!--                                <small>Adelantá tu asistencia enviando un mensaje a nuestro número de Conectar Alameda-->
                                <!--                                    (261 517 8081)-->
                                <!--                                    <br/>-->
                                <!--                                    con el texto <strong>Sumarme</strong> o por <br/>-->
                                <!--                                    <a href="https://api.whatsapp.com/send?phone=5492615178081&text=SUMARME"-->
                                <!--                                       class="text-realce-verde"> por Whatsapp-->
                                <!--                                        <i class="fab fa-whatsapp"></i> haciendo clic aqui </a>-->
                                <!--                                </small>-->
                                Más detalles e inscripción<br/>

                                <a class="btn btn-alameda  js-scroll-trigger mx-auto btn--pill"
                                   href="https://forms.gle/gkJjReojfHy2QG7e8" target="_blank">
                                    <i class="far fa-list-alt text-white"></i> Aquí
                                </a>
                            </small>
                        <?php } ?>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <div class="col-sm-12">
        <a href="noticias/camino-crecimiento.php" class="text-success">
            <blockquote class="bg-white text-tan blockquote rounded d-flex align-items-center">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <i class="fas fa-road fa-2x text-invitacion"></i>
                    </div>
                    <div class="col-sm-8 text-center">
                        <h3 class="text-dark ">
                            Conocé el Camino de Crecimiento Alameda
                        </h3>
                    </div>

            </blockquote>
        </a>

    </div>
</section>

<section class="page-section container cta fondo-evento" id="versiculoClave">
    <!--    <div class="row text-center">-->
    <div class="row text-center d-flex align-items-center bg-white">
        <div class="col-sm-4 pull-left">
            <img src="images/textos/texto-ppal.jpg" class="img-fluid rounded"/>
        </div>

        <div class="col-sm-8 pt-5">
            <blockquote class="blockquote-uvcp_dark text-white-75 rounded align-items-center px-5">
                <div class="center-element btn btn-blue rotar90 mt-sm-0">
                    Juan 3:16 (NTV)
                </div>
                <div>
                    <h2 style="text-indent: 2em; font-family: 'Courgette', cursive; color: #000000"
                        class="pt-sm-0 pt-lg-3 text-right">
                        "
                        Pues Dios amó tanto al mundo que dio a su único Hijo, para que todo el que crea en él no se
                        pierda, sino que tenga vida eterna
                        "
                    </h2>
                </div>


            </blockquote>


        </div>
        <div class="col-sm-12">
            <a href="notas.php" class="text-light-blue"
               data-toggle="tooltip"
               title="<h5 class='bg-light-blue'><strong>Mas detallles aquí</strong> "><i
                        class="material-icons btn-sm text-point-sec">local_library</i> Empieza aquí</a>
        </div>


    </div>


</section>

<!-- Inicio Ministerios-->
<?php
//include ('section-ministerios.php');
?>

<!-- Fin Ministerios-->



<section class="page-section container cta fondo-evento" id="revivir">
    <!--    <div class="row text-center">-->
    <div class="row text-center d-flex align-items-center">
        <div class="col-sm-3 pull-left">
            <img src="../images/logoYoutubeBrown.png" class="img-fluid rounded"/>
        </div>
        <div class="col-sm-9 pull-right ">

            <a title="Reviví los mensajes" data-placement="bottom" style="text-decoration-line: none"
               href="https://youtube.com/user/IglesiaAlameda" target="_blank" data-original-title="Reviví los mensajes"
            >
                <blockquote class="bg-danger text-tan blockquote rounded d-flex align-items-center">
                    <i class="fab fa-youtube-square fa-4x" style="color: #FFF"></i>
                    <h3 style="color: #FFF; text-indent: 4em">
                        Reviví los mensajes en YouTube
                    </h3>

                </blockquote>
            </a>
        </div>
    </div>
</section>

<!--<section class="page-section container cta fondo-evento" id="dias">-->
<!--    <div class="container-fluid p-0 ">-->
<!--        <a href="dias.php"><i class="fas fa-arrows-alt"></i> <i>Ver a pantalla completa</i></a>-->
<!--        <div class="swiper-container ">-->
<!--            <div class="swiper-wrapper  ">-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia25.jpg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia24.jpg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia23.jpg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia22.jpg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia21.jpg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia20.jpg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia19.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia18.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia17.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia16.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia15.jpg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia14.jpg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia13.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia12.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia11.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia10.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia9.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia8.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia7.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia6.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia5.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia4.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia3.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia2.jpeg)"></div>-->
<!--                <div class="swiper-slide" style="background-image:url(imagenes/campanias/dia1.jpeg)"></div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- Add Pagination -->
<!--            <div class="swiper-pagination"></div>-->
<!---->
<!---->
<!--            <!-- Add Arrows -->
<!--            <div class="swiper-button-prev"></div>-->
<!--            <div class="swiper-button-next"></div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</section>-->

<!--<section class="page-section about-heading" id="proximaserie">-->
<!--    <div class="container-fluid">-->
<!---->
<!--        <div class="row justify-content-between  mx-auto ">-->
<!--            <hr/>-->
<!--            <div class="section-body col-sm-6 col-md-6 col-lg-6 card border-0"><br/>-->
<!--                <h2 style="font-family: joyful" class="text-center"><br/>-->
<!--                    Ya falta poco!<br/><br/>-->
<!--                    Jueves  <br/>-->
<!--                    18 de Abril<br/>-->
<!--                    20:30 hs.<br/>-->
<!--                    Encuentro de <br/>-->
<!--                    Adoración e <br/>-->
<!--                    Inspiración-->
<!---->
<!--                    <br/><br/>-->
<!--                    Domingo <br/>-->
<!--                    21 de Abr. <br/>-->
<!--                    Gran Lanzamiento<br/>-->
<!--                    a las 10hs. y a las-->
<!--                    20hs.-->
<!--                </h2>-->
<!--            </div>-->
<!--            <div class="section-body col-sm-6 col-md-6 col-lg-6 card border-0  ">-->
<!--                <a href="series/bondad.php">-->
<!--                    <img class="img-fluid" style="height: 100vh; " src="imagenes/series/bondad/IMAGENES-PREVIAS-BONDAD.png"/>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</section>-->


<section class="page-section container cta fondo-evento bg-white" id="epa">
    <div class="row text-center d-flex align-items-cente ">
        <div class="col-sm-12">
            <h1 class="text-point-sec text-realce ">
                ESTAMOS PARA VOS
            </h1>
            <strong>Contamos con un equipo de <br/>
                consejeros pastorales <br/>
                listos para brindarte ayudarte.
                <!--                simplemente solicita una entrevista enviando <br/>un correo eléctronico.-->
            </strong>
        </div>
        <br/>
        <div class="col-md-6 col-lg-3  ">
            <span class="fa-stack list-inline compuesto">
                <i class="fas fa-circle fa-stack-2x text-point"></i>
                <i class="fas fa-circle-notch fa-stack-1x fa-inverse item-inline"
                   style="font-size: 1em; text-align: center; top:-0.3em" aria-hidden="true"></i>
                <i class="fas fa-circle-notch fa-stack-1x fa-inverse fa-rotate-180 item-inline"
                   style="font-size: 1em; text-align: center; bottom:-0.3em" aria-hidden="true"></i>
            </span>
            <br/>
            <h3><a href="nuestraalameda.php#amc" class="text-point-sec"> Ayuda para matrimonios en crisis </a></h3>
        </div>
        <div class="col-md-6 col-lg-3  ">
            <span class="fa-stack list-inline compuesto">
                <i class="fas fa-circle fa-stack-2x text-point"></i>
                <i class="fas fa-award fa-stack-1x fa-inverse item-inline" style="font-size: 1em; text-align: center; "
                   aria-hidden="true"></i>
            </span>
            <h3>
                <a href="nuestraalameda.php#celebremos" class="text-point-sec">
                    Ayuda para adicciones y hábitos compulsivos
                </a>
            </h3>
        </div>
        <div class="col-md-6 col-lg-3  ">
            <span class="fa-stack list-inline compuesto">
                <i class="fas fa-circle fa-stack-2x text-point"></i>
                <i class="fas fa-female fa-stack-1x fa-inverse item-inline" style="font-size: 1em; text-align: center; "
                   aria-hidden="true"></i>
            </span>
            <h3>
                <a href="nuestraalameda.php#mujer" class="text-point-sec">
                    Ayuda para escapar como mujer del maltrato o situaciones de riesgo
                </a>
            </h3>
        </div>
        <div class="col-md-6 col-lg-3  ">
            <span class="fa-stack list-inline compuesto" ">
            <i class="fas fa-circle fa-stack-2x text-point"></i>
            <i class="material-icons fa-stack-1x fa-inverse item-inline"
               style="font-size: 1em; text-align: center; top:0.5em" aria-hidden="true">toys</i>
            </span>
            <h3>
                <a href="nuestraalameda.php#acasa" class="text-point-sec">
                    Ayuda para enfrentar casos de abusos y maltratro infantil
                </a>
            </h3>
        </div>
</section>
<?php include('footer.php'); ?>

<!-- Bootstrap core JavaScript -->
<!--<script src="vendor/jquery/jquery.min.js"></script>-->
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!-- Global Vendor -->
<script src="stream-ui-kit/assets/vendors/jquery.min.js"></script>
<script src="stream-ui-kit/assets/vendors/jquery.migrate.min.js"></script>
<script src="stream-ui-kit/assets/vendors/popper.min.js"></script>
<script src="stream-ui-kit/assets/vendors/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip({html: true, placement: "bottom"});
    });
</script>
<script type="text/javascript">

    $('.carousel').carousel({
        interval: 10000
    })

    $('[data-countdown]').each(function () {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {

            var semanas = event.offset.weeks;
            var dias = event.offset.days;
            var horas = event.offset.hours;
            var minutos = event.offset.minutes;
            var segundos = event.offset.seconds;

            var letrasS = " semanas"
            if (dias > 1) {
                var letrasD = " %d días" + "<br/>"
            }
            if (dias == 1) {
                var letrasD = " %d día" + "<br/>"
            }
            if (dias < 1) {
                var letrasD = " "
            }
            if (semanas == 1) {
                var letrasW = "%w semana" + "<br/>"
            }
            if (semanas < 1) {
                var letrasW = " "
            }
            if (minutos > 1) {
                var letrasM = " %M minutos" + "<br/>"
            }
            if (minutos == 1) {
                var letrasM = " %M minuto" + "<br/>"
            }
            if (minutos < 1) {
                var letrasM = " "
            }
            if (horas > 1) {
                var letrasH = " %H horas" + "<br/>"
            }
            if (horas == 1) {
                var letrasH = " %H hora" + "<br/>"
            }
            if (horas < 1) {
                var letrasH = " "
            }
            if (segundos > 1) {
                var letrasS = " %S segundos" + "<br/>"
            }
            if (segundos == 1) {
                var letrasS = " %S segundo" + "<br/>"
            }
            if (segundos < 1) {
                var letrasS = " "
            }

            if (dias == 0 && semanas == 0 && horas == 0 && minutos == 0 && segundos == 0) {
                letrasB = '¡BIENVENIDOS!'
            } else {
                letrasB = ''
            }
            /*$(this).append().html(event.strftime(' letrasW + letrasD + letrasH + letrasM + letrasS));*/


            $this.html(event.strftime('<div class="text-info card-body h-100 my-auto ">' +
                letrasW + letrasD + letrasH + letrasM + letrasB
                + '</div>'));
        });
    });

</script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        autoplay: {
            delay: 7500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>


<!-- Components Vendor  -->
<script src="stream-ui-kit/assets/vendors/jquery.parallax.js"></script>
<script src="stream-ui-kit/assets/vendors/typedjs/typed.min.js"></script>
<script src="stream-ui-kit/assets/vendors/slick-carousel/slick.min.js"></script>
<script src="stream-ui-kit/assets/vendors/counters/waypoint.min.js"></script>
<script src="stream-ui-kit/assets/vendors/counters/counterup.min.js"></script>

<!-- Theme Settings and Calls -->
<script src="stream-ui-kit/assets/js/global.js"></script>

<!-- Theme Components and Settings -->
<script src="stream-ui-kit/assets/js/vendors/parallax.js"></script>
<script src="stream-ui-kit/assets/js/vendors/carousel.js"></script>
<script src="stream-ui-kit/assets/js/vendors/counters.js"></script>
<!-- END JAVASCRIPTS -->
<script>
    $(document).on('ready', function () {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
            strings: [
                "Viví la experiencia ",
                "Alameda OnLine",
            ],
            typeSpeed: 90,
            loop: true,
            backDelay: 2500
        });
    });
</script>


</body>

</html>
