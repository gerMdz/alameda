<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 02/06/2020
 * Time: 06:22
 */

//use gerVendor\HandlerNotas;
use gerVendor\Routes;

use gerVendor\HandlerNotas;

$lema = 'Escape a la Libertad';
$lemaSinEspacios = 'Escape-a-la-Libertad';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'Serie Escape a la Libertad';
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once('../gerVendor/gerFunctions.php');
include_once('links.php');
require_once('../gerVendor/Routes.php');
require_once '../gerVendor/HandlerNotas.php';
$links = new Routes();
$referencias = new HandlerNotas();
$data = $referencias->getReferencias('2020-08-16 09:30');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('../meta-base.php');
    include('../favicon.php');
    include('../style-base-uikit.php')
    ?>
    <title>Notas - Iglesia de la Alameda</title>
    <link rel="icon" href="/images/index.png" sizes="32x32"/>
    <link rel="icon" href="/images/index192.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="/images/indexapple.png"/>
    <!--    <link href="/css/styles.css?v=--><?php //echo $version ?><!--" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="/stream-ui-kit/assets/css/styles.css">
    <style>
        strong {
            font-weight: 400 !important
        }

        .card-text {
            font-size: 1.1em !important;
            font-weight: 600 !important;
        }

        /*.header {*/
        /*    background-image: url('images/series/cabecera_index.jpg');*/
        /*    background-size: cover;*/
        /*    background-position: center;*/
        /*    position: relative;*/
        /*}*/

        /*.overlay {*/
        /*    position: absolute;*/
        /*    min-height: 100%;*/
        /*    min-width: 100%;*/
        /*    left: 0;*/
        /*    top: 0;*/
        /*    background: rgba(255, 255, 255, 0.6);*/
        /*}*/

        img.resize {
            width: 10%; /* you can use % */
            height: auto;
        }

        .btn-xl {
            padding: 1.25rem 1.25rem;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            border: none currentcolor;
            border-radius: 10rem;
        }

        .bg-fam {
            /*background: #fafafa;*/
            box-shadow: inset 0 0 .625rem rgba(0, 0, 0, .1), inset 0 0 2.188rem rgba(0, 0, 0, .03);
        }

        .position-relative {
            position: relative !important;
        }

        .mt-n6, .my-n6 {
            margin-top: -5rem !important;
        }

        .card-a {
            -webkit-box-shadow: 0 0 !important;
            box-shadow: 0 0 !important;
        }

        .card {
            -webkit-box-shadow: 0 0 !important;
            box-shadow: 0 0 !important;
        }

        .bottom-0 {
            position: absolute;
            left: 5%;
            bottom: 1%;
            width: 90%;
            /*background-color: red;*/
            /*color: white;*/
            text-align: center;
        }

        .middle-0 {
            position: relative;
            top: 25%;
            transform: translateY(-25%);
        }
    </style>
</head>
<body>
<header>
    <?php include '../nav.php'; ?>
    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-dark"
             style="background-image: url(/series/escape-a-la-libertad/escape-a-la-libertad-encabezado.jpg); background-repeat: repeat-y ;">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <div class="site-heading p-5">
                            <img src="/images/LOGO_ALAMEDA_CON_TEXTO_B.png" style="max-height: 150px" class="img-fluid"
                                 alt="Iglesia de la Alameda">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Promo Content -->
    </section>
</header>
<main role="main" class="bg-white">
    <section class="a-content-space-medium">
        <div class="container">
            <div class="row ">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-2 mb-lg-2 pl-lg-2 ">
                    <h1 class="mb-3">Escape a la <br/> Libertad</h1>
                    <p>
                        Es hora que las puertas se abran
                    </p>
                    <p class="blockquote-footer">
                        Pasaron la primera y la segunda guardia, y al llegar a la puerta de hierro que daba a la ciudad,
                        ¡ésta se abrió por sí misma!
                        Hechos 12:10 (RVC)
                    </p>
                </div>
                <div class="col-lg-6 align-self-center">
                    <img class="img-fluid rounded mb-4 mb-lg-0 overflow-auto align-items-center"
                         src="/series/escape-a-la-libertad/no-te-rindas-tapa.jpg" alt="<?php echo $lemaSinEspacios ?>">
                </div>
            </div>
        </div>
    </section>
    <!-- Charlas -->
    <section class="a-content-space-medium bg-fam text-center">
        <div class="container">
            <div class="row   ">
                <!--                charla 1-->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/01-escape-a-la-libertad.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                Escape a la libertad
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>La prisión vs. la oración</u>
                                <br/>
                                Pasaron la primera y la segunda guardia, y al llegar a la puerta de hierro que daba a la
                                ciudad, ¡ésta se abrió por sí misma!
                                <p>Hechos 12:10 (RVC)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/01-escape-a-la-libertad.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/18isylytojk" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                </div>-->
                <!--                fin charla 1-->

                <!--                charla 2-->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/02-hay-equipo.jpg" class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                Hay equipo
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>
                                    ¡Cómo elegir buenos amigos para escapar del encierro!
                                </u>
                                <br/>
                                En aquellos días, Jesús subió a una montaña para orar. Allí pasó toda la noche hablando
                                con Dios.
                                Al día siguiente, llamó a sus seguidores y eligió a doce de ellos.
                                <p>Lucas 6:12-16 (TLA)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/02-hay-equipo.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/HRA1-R6z7Os" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 2-->

                <!--                charla 3-->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/03-por-las-lentejas.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                ¡Por las lentejas!
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>
                                    ¡Cómo pelear cuando vienen por tu libertad!
                                </u>
                                <br/>
                                El Señor cuida de los hombres honrados;
                                y mantendrá la herencia de ellos para siempre.
                                En tiempos difíciles no serán avergonzados,
                                y en tiempos de escasez tendrán abundancia
                                <p>Salmos 37:18-19 (RVC)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/03-por-las-lentejas.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/c7n-w-0Ucno" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 3-->

                <!--                charla 4-->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/04-dia-de-entrenamiento.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                Día de Entrenamiento
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>
                                    ¡Cómo defender tu posición en tiempos malos!
                                </u>
                                <br/>
                                Por lo tanto, pónganse todas las piezas de la armadura de Dios para poder resistir al
                                enemigo en el tiempo del mal. Así, después de la batalla, todavía seguirán de pie,
                                firmes. Defiendan su posición

                                <p>Efesios 6:13-14 (NTV)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/04-dia-de-entrenamiento.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/WCIjIWEegdA" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 4-->

                <!--                charla 5 -->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/05-rescate-a-la-medianoche.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                Día de Entrenamiento
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>
                                    ¡Cuándo terminará todo!
                                </u>
                                <br/>
                                A eso de la medianoche ...

                                <p>Hechos 16:25 (NVI)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <br/>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/05-rescate-a-la-medianoche.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/zEtQAWbJ-Jg" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 5 -->

                <!--                charla 6 -->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/06-quien-te-crees.jpg" class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                Quién te crees
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>
                                    Cuando tu imagen propia es la celda
                                </u>
                                <br/>
                                Por la fe salió de Egipto sin tenerle miedo a la ira del rey,
                                pues se mantuvo firme como si estuviera viendo al
                                Invisible.”

                                <p>Hebreos 11:27 (NVI)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <br/>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/06-quien-te-crees.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/rpkIGB6lvxM" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 6 -->

                <!--                charla 7 -->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/07-despues-de-esto.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                Después de esto
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>
                                    Una revelación de tu futuro
                                </u>
                                <br/>
                                "Después de esto miré, y allí en el cielo...”

                                <p>Apocalipsis 4:1 (NVI)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <br/>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/07-despues-de-esto.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/fNmexqNwNZo" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 7 -->

                <!--                charla 8 -->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/08-fuerzas-para-llegar.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                Fuerzas para llegar
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>
                                    Cuando parece que no das mas!
                                </u>
                                <br/>
                                pero los que confían en el Señor renovarán sus fuerzas
                                <p>Isaías 40:31(NVI)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <br/>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/08-fuerzas-para-llegar.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/unx7-7YhH5c" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 8 -->

                <!--                charla 9 -->
                <div class="col-md-4 mb-2 mx-auto">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/09-tu-lugar-de-paz.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                TU Lugar de Paz
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>
                                    Como encontrar paz en medio de la tormenta y rodeado de gente fuera de control
                                </u>
                                <br/>
                                No habían avanzado mucho cuando una terrible tempestad se
                                levantó, El viento los azotaba con furia, y las olas inmensas
                                amenazaban con anegar completamente la barca.<br/>
                                Marcos 4:37(BAD)<br/>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <br/>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/09-tu-lugar-de-paz.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/JcowXKUdfuk" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 9 -->

                <!--                charla 10 -->
                <div class="col-md-4 mb-2 mx-auto">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/escape-a-la-libertad/10-no-te-rindas.jpg" class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase">
                                No te rindas
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                <u>

                                </u>
                                Pues vivimos por lo que creemos y no por lo que vemos.
                                <br/>
                                <p>2° Corintios 5:7(NTV)</p>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <br/>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/escape-a-la-libertad/10-no-te-rindas.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/ZEa7PjHUMH4" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 10 -->
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="card-body">
        <h4 class="text-darker card-text text-center">Ver series anteriores </h4>
        <div class="col-sm-2 mx-auto text-center">
            <a href="/familia-tu-lugar-en-el-mundo.php" class="btn btn-xl btn-primary"> Familia, tu lugar en el mundo</a>
        </div>
    </div>
</footer>
<?php
include "footer.php";
?>
<div id="modal-01" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">
                <i class="fas fa-times text-white"></i>
            </span>
            <span class="sr-only">
                <i class="fas fa-window-close-o"></i>
            </span>
        </button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" class="img-fluid" alt="Iglesia de la Alameda">
            </div>
        </div>
    </div>
</div>
<div id="modal-02" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">
                <i class="fas fa-times text-white"></i>
            </span>
            <span class="sr-only">
                <i class="fas fa-window-close-o"></i>
            </span>
        </button>
        <div class="modal-content">
            <div class="modal-body  ">
                <img src="" class="img-fluid" alt="Iglesia de la Alameda">
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<?php
include('js-base-uikit.php');
?>
<script src="/js/alameda.js"></script>
<script>
    $(function () {
        $('.img-modal').on("click", function () {
            let img = this.src;
            let modal = $('#modal-02')
            $('.modal-body img').attr('src', img);
            modal.modal();
        });
    })
</script>
</body>
</html>
