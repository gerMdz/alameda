<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 18/05/2020
 * Time: 06:56
 */
$lema = 'Familia 2020';
$lemaSinEspacios = 'familia-2020';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'Serie Familia 2020';
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once('gerVendor/gerFunctions.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('meta-base.php');
    include('style-base-uikit.php')
    ?>

    <link href="css/styles.css?v=<?php echo $version ?>" rel="stylesheet">


    <style>
        strong {
            font-weight: 400 !important
        }

        .card-text {
            font-size: 1.1em !important;
            font-weight: 600 !important;
        }

        .header {
            background-image: url('images/series/cabecera_index.jpg');
            background-size: cover;
            background-position: center;
            position: relative;

        }

        .overlay {
            position: absolute;
            min-height: 100%;
            min-width: 100%;
            left: 0;
            top: 0;
            background: rgba(255, 255, 255, 0.6);

        }

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


    </style>

</head>

<body>


<header class="mb-0">
    <?php include 'nav.php'; ?>

    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-dark mb-0"
             style="background-image: url(series/familia-2020/familia-2020-index-01.jpg); background-repeat: repeat-y ;">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">

                        <div class="site-heading p-5">
                            <img src="images/LOGO_ALAMEDA_CON_TEXTO_B.png" style="max-height: 150px" class="img-fluid ">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Promo Content -->
    </section>
</header>
<main role="main" class="bg-white">
    <section >
        <div class="container">
            <hr class="u-content-space-bottom"/>
            <div class="row u-content-space-bottom ">
                <div class="col-lg-6 mb-5 mb-lg-5 pl-lg-5">
                    <h2 class="mb-3">FAMILIA</h2>
                    <h4>Tu lugar en el mundo</h4>
                </div>
                <div class="col-lg-6">


                    <!-- End Progress Bar -->
                </div>
            </div>
        </div>
    </section>
    <section class="u-content-space-top">
        <div class="container">
            <div class="row">
                <!-- Article Content -->
                <div class="col-lg-6 align-self-center mb-5 mb-lg-0 pr-lg-5">
                    <header class="mb-5">
                        <h2 class="h1">Titulo 1</h2>
                        <p class="h5">Subtitulo</p>
                    </header>

                    <p class="mb-4">
                        Descripción 1
                        </p>

                    <a class="mr-4" href="#!">
                        <i class="fab fa-youtube mr-1"></i> Ver Mensaje
                    </a>
                    <a href="#!">
                        <i class="fas fa-file-pdf mr-1"></i> Descarga la hoja de notas
                    </a>
                </div>
                <!-- End Article Content -->

                <!-- Article Image -->
                <div class="col-lg-6 align-self-center">
                    <!-- SVG Tablet Mockup -->
                    <div class="u-device mx-auto">
                        <figure class="u-device__item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 603 892" style="enable-background:new 0 0 603 892;" xml:space="preserve">
                    <path id="BG_Color" style="fill: #fff;" d="M603,51.8v788.5c0,28.5-23.3,51.8-51.8,51.8H51.8C23.3,892,0,868.7,0,840.2L0,51.8
                      C0,23.3,23.3,0,51.8,0l499.5,0C579.7,0,603,23.3,603,51.8z"/>
                                <circle id="tabletFrameTouchID1" style="fill: #f7f7f7;" cx="302.5" cy="846.5" r="25.5"/>
                                <circle id="tabletFrameCameraID1" style="fill: #f7f7f7;" cx="301.8" cy="45.9" r="6.2"/>
                                <g>
                                    <defs>
                                        <rect id="tabletFrameID1" x="36" y="86" width="533" height="711"/>
                                    </defs>
                                    <clipPath id="tabletFrameID2">
                                        <use xlink:href="#tabletFrameID1"  style="overflow:visible;"/>
                                    </clipPath>
                                    <g style="clip-path:url(#tabletFrameID2);">
                                        <!-- Apply your (533px width to 711px height) image here -->
                                        <image style="overflow:visible;" width="533" height="711" xlink:href="assets/img-temp/533x711/img1.jpg" transform="matrix(1 0 0 1 36 86)"></image>
                                    </g>
                                    <use xlink:href="#tabletFrameID1" stroke-miterlimit="10" style="overflow: visible; stroke: #f2f4fb; fill: none;"/>
                                </g>
                  </svg>
                        </figure>
                    </div>
                    <!-- End SVG Tablet Mockup -->
                </div>
                <!-- End Article Image -->
            </div>
        </div>
    </section>
    <section class="vacio mb-3">

    </section>


    <!-- Contact Form -->

    <!-- End Contact Form -->
</main>





<?php
include "footer.php";
?>

<!-- Bootstrap core JavaScript -->
<?php
include('js-base-uikit.php');
?>
<script src="js/alameda.js"></script>

</body>

</html>

