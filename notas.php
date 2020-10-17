<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 02/06/2020
 * Time: 06:22
 */

//use gerVendor\HandlerNotas;
use gerVendor\Links;

use gerVendor\HandlerNotas;

$lema = 'Estar bien';
$lemaSinEspacios = 'Estar-bien';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'Serie Estar bien';
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once('gerVendor/gerFunctions.php');
include_once('links.php');
require_once('gerVendor/Links.php');
require_once 'gerVendor/HandlerNotas.php';
$links = new Links();
$referencias = new HandlerNotas();
$data = $referencias->getReferencias('2020-08-16 09:30');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('meta-base.php');
    include('favicon.php');
    include('style-base-uikit.php')
    ?>
    <title>Notas - Iglesia de la Alameda</title>
    <link rel="icon" href="images/index.png" sizes="32x32"/>
    <link rel="icon" href="images/index192.png" sizes="192x192"/>
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
    <?php include 'nav.php'; ?>
    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-dark"
             style="background-image: url(series/estar-bien/estar-bien-parallax.jpg); background-repeat: repeat-y ;">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <div class="site-heading p-5">
                            <img src="images/LOGO_ALAMEDA_CON_TEXTO_B.png" style="max-height: 150px" class="img-fluid"
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
    <section class="a-content-space-medium py-3">
        <div class="container">
            <div class="row ">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-2 mb-lg-2 pl-lg-2 fuente-normal">
                    <h1 class="mb-3 fuente-arial-nova">Estar bien</h1>
                    <p>
                        No necesitas esperar que todo pase para estar mejor.
                    </p>
                    <p class="blockquote-footer">
                        A pesar de todo, hay un camino, un camino para ESTAR BIEN!<br/>
                        8 Claves, 8 charlas únicas.
                    </p>
                </div>
                <div class="col-lg-6 align-self-center">
                    <img class="img-fluid rounded mb-4 mb-lg-0 overflow-auto align-items-center"
                         src="/series/estar-bien/05-estar-bien-tapa.jpg" alt="<?php echo $lemaSinEspacios ?>">
                </div>
            </div>
        </div>
    </section>
    <!-- Charlas -->
    <section class="a-content-space-medium bg-fam text-center pt-2 pb-5">
        <div class="container ">
            <div class="row   ">
                <!--                charla 1-->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100"> -->
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/estar-bien/01-estar-bien.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase fuente-normal">
                                ¡Está bien no estar bien!
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-2"></i>

                                Afortunados los que <b>reconocen su necesidad espiritual</b> porque el reino de Dios les
                                pertenece
                                <p>Mateo 5:3 (PDT) <i class="fas fa-quote-right ml-3"></i></p>

                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/estar-bien/01-estar-bien.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/XeXV3DiKd4U" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                fin charla 1-->

                <!-- inicio charla 2-->
                <div class="col-md-4 mb-2 mx-auto">
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/estar-bien/02-estar-bien.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase fuente-normal">
                                Prisionero de esperanza
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-2"></i>

                                Bienaventurados los que lloran, <b>porque ellos serán consolados</b>
                                <p>Mateo 5:4 (BT) <i class="fas fa-quote-right ml-3"></i></p>

                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/estar-bien/02-estar-bien.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/XeXV3DiKd4U" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin charla 2-->

                <!-- inicio charla 3-->
                <div class="col-md-4 mb-2 mx-auto">
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/estar-bien/03-estar-bien.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase fuente-normal">
                                Manso y tranquilo
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-2"></i>

                                Bienaventurados los mansos, <b>porque el mundo entero les pertenece</b>
                                <p>Mateo 5:5 (BAD)<i class="fas fa-quote-right ml-3"> </i></p>

                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/estar-bien/03-estar-bien.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/DgWJJQ3BS_4" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin charla 3-->

                <!-- inicio charla 4-->
                <div class="col-md-4 mb-2 mx-auto">
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/estar-bien/04-estar-bien.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase fuente-normal">
                                Con el Hambre Intacta
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-2"></i>
                                Bienaventurados los que tienen hambre y sed de justicia, <b>porque ellos serán
                                    saciados</b>
                                <p>Mateo 5:6 <i class="fas fa-quote-right ml-3"> </i></p>

                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/estar-bien/04-estar-bien.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/q4AdQ--Wnj4" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin charla 4-->

                <!-- inicio charla 5-->
                <div class="col-md-4 mb-2 mx-auto">
                    <div class="card card-a h-100 overflow-hidden ">
                        <div class="position-relative">
                            <img src="/series/estar-bien/05-estar-bien.jpg"
                                 class="card-img-top img-modal"
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title text-uppercase fuente-normal">
                                Regala Compasión
                            </h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-2"></i>
                                Bienaventurados los compasivos, <b>porque serán tratados con
                                    compasión.</b>
                                <p>Mateo 5:7 (NBLH-NTV) <i class="fas fa-quote-right ml-3"> </i></p>

                            </div>
                            <div class="btn-group bottom-0 justify-content-between border-alameda border-alameda-top border-alameda-bottom pt-1 ">
                                <a href="/series/estar-bien/05-estar-bien.pdf"
                                   target="_blank"
                                   class="card-link text-center">
                                    <i class="far fa-file-pdf ml-5 mr-1"></i>
                                    <span class="text-alameda btn-icon ">Notas</span><br/>
                                </a>
                                <a href="https://youtu.be/q4AdQ--Wnj4" class="card-link text-center" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <span class="text-alameda btn-icon mr-5  ">Video</span><br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin charla 5-->


            </div>
        </div>
    </section>
</main>
<footer class="footer ">
    <div class="card-body">
        <h4 class="text-darker card-text text-center">Ver series anteriores </h4>
        <div class="col-sm-2 mx-auto text-center">
            <a href="/mensajes-anteriores/escape-a-la-libertad.php" class="btn btn-xl btn-primary"> Escape a la
                libertad</a>
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
