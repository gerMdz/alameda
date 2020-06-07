<?php

$lema = 'A2 - Adolescentes Alameda';
$lemaSinEspacios = 'A2-Adolescentes-Alameda';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'A2 - ';
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once('../gerVendor/gerFunctions.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('../meta-base.php');
    include('../favicon.php');
    include('../style-base-uikit.php')
    ?>
    <link rel="icon" href="../images/index.png" sizes="32x32"/>
    <link rel="icon" href="../images/index192.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="../images/indexapple.png"/>

    <link href="../css/styles.css?v=<?php echo $version ?>" rel="stylesheet">
    <link href="/series/css/series.min.css?v=<?php echo $version ?>" rel="stylesheet">


    <style>
        strong {
            font-weight: 400 !important
        }

        .card-text {
            font-size: 1.1em !important;
            font-weight: 600 !important;
        }

        .header {
            background-image: url('../images/series/cabecera_index.jpg');
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

        .bg-light {
            background-color: #f8f9fa !important;
        }


    </style>

</head>

<body>


<header>
    <?php include '../nav.php'; ?>
    <div class="row a-content-space-medium bg-white mt-5 ">
        <div class="col-sm-4">
            <img src="../images/institucional/a2-fdoBlanco-ltrNaranja.jpg" class="img-fluid">
        </div>
        <div class="col-sm-8 w-md-50 mx-auto text-center my-auto ">
            <h2 class="h1 font-weight-light mb-1">Si tenés entre 13 y 17 años</h2>
            <p class="mb-4 mx-auto">
                queremos invitarte a nuestros encuentros de adolescentes <br/>
                <b>Todos los sábados</b><br/>
                y también a nuestros <i>grupos pequeños</i> semanales. <br/>
                <small>
                    En estos encuentros vas a poder vivir tiempos de amistad,
                    diversión y reflexión que pueden impactar tu vida.<br/>
                    Conectate con nosotros a través de las redes
                    <a class="mr-2" rel="tooltip" title="Conectate en la fanpage" data-placement="bottom"
                       href="https://www.facebook.com/IglesiaAlameda" target="_blank"
                       data-original-title="Conectate en la fanpage">
                        <i class="fab fa-facebook-square "></i>
                    </a>
                    <a class="mr-2" rel="tooltip" title="Reviví los encuentos" data-placement="bottom"
                       href="https://youtube.com/user/IglesiaAlameda" target="_blank"
                       data-original-title="Reviví los encuentros">
                        <i class="fab fa-youtube-square "></i>
                    </a>
                    <a class="mr-2" rel="tooltip" title="Conectate en Instagram" data-placement="bottom"
                       href="https://www.instagram.com/iglesialameda" target="_blank"
                       data-original-title="Conectate en Instagram">
                        <i class="fab fa-instagram "></i>
                    </a>
                    de nuestra Iglesia: Iglesia de la Alameda. <br/>
                    O a nuestro Instagram:<br/>

                    <a href="https://www.instagram.com/adolescentes_de_la_alameda/" target="_blank">
                        <img class="rounded-circle" src="/images/institucional/a2-fdoNegro-ltrBlanca.jpg" style="width: 30px;" alt="Instagram A2">
                        <small class="text-1-2 text-realce-verde"> adolescentes_de_la_alameda</small>
                    </a><br/>
                    Seguinos asi no te perdes de <u>nada!</u><br/>
                    Esta es una oportunidad para tu vida. No te lo pierdas, te esperamos!!!
                </small>
            </p>
        </div>
    </div>
</header>

<!-- Inicio Videos-->
<section class="js-parallax bg-light u-content-space"
         style="background-image: url(../stream-ui-kit/assets/img/bg-pattern.png);">
    <div class="container">
        <!-- Video Principal -->
        <div class="row">
            <div class="col-lg-5 align-self-center pr-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-light mb-3">A2</h2>
                <p><strong class="text-primary">Adolescentes</strong> de la Alameda </p>
                <p>Programa de Adolescentes de la Iglesia de la Alameda.</p>
            </div>

            <div class="col-lg-7 order-first order-lg-last mb-4 mb-lg-0">
                <!-- Mockup Browser -->
                <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 857 40" style="enable-background:new 0 0 857 40;" xml:space="preserve">
                  <g>
                      <path style="fill: #fff;"
                            d="M856.8,40.2H0.8V19c0-10.5,8.5-19,19-19h818c10.5,0,19,8.5,19,19V40.2z"/>
                  </g>
                        <g>
                            <ellipse style="fill: #fb4143;" cx="28.5" cy="20.1" rx="6" ry="6"/>
                            <ellipse style="fill: #fab633;" cx="48.4" cy="20.1" rx="6" ry="6"/>
                            <ellipse style="fill: #0dd157;" cx="68.4" cy="20.1" rx="6" ry="6"/>
                        </g>
                </svg>
                </figure>
                <!-- End Mockup Browser -->

                <a target="_blank" href="https://www.youtube.com/embed/jS0Ff65oBp8">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/jS0Ff65oBp8" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </a>
            </div>
        </div>
        <!-- End Video Principal -->
        <hr class="my-6">

        <!-- Video 1 -->
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <!-- Mockup Browser -->
                <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 857 40" style="enable-background:new 0 0 857 40;" xml:space="preserve">
                  <g>
                      <path style="fill: #fff;"
                            d="M856.8,40.2H0.8V19c0-10.5,8.5-19,19-19h818c10.5,0,19,8.5,19,19V40.2z"/>
                  </g>
                        <g>
                            <ellipse style="fill: #fb4143;" cx="28.5" cy="20.1" rx="6" ry="6"/>
                            <ellipse style="fill: #fab633;" cx="48.4" cy="20.1" rx="6" ry="6"/>
                            <ellipse style="fill: #0dd157;" cx="68.4" cy="20.1" rx="6" ry="6"/>
                        </g>
                </svg>
                </figure>
                <!-- End Mockup Browser -->

                <a target="_blank" href="https://www.youtube.com/embed/VB7P1YX1r9c">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/VB7P1YX1r9c" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </a>
            </div>

            <div class="col-lg-5 align-self-center pl-lg-5">
                <h2 class="font-weight-light mb-3">A2</h2>
                <p><strong class="text-primary">Todos</strong> los sábados </p>

            </div>
        </div>
        <!-- End Video 1 -->

        <hr class="my-6">

        <!-- Video 2 -->
        <div class="row u-content-space-bottom">
            <div class="col-lg-5 align-self-center pr-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-light mb-3">A2</h2>
                <p><strong class="text-primary">Grupos pequeños</strong> semanales</p>
            </div>

            <div class="col-lg-7 order-first order-lg-last mb-4 mb-lg-0">
                <!-- Mockup Browser -->
                <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 857 40" style="enable-background:new 0 0 857 40;" xml:space="preserve">
                  <g>
                      <path style="fill: #fff;"
                            d="M856.8,40.2H0.8V19c0-10.5,8.5-19,19-19h818c10.5,0,19,8.5,19,19V40.2z"/>
                  </g>
                        <g>
                            <ellipse style="fill: #fb4143;" cx="28.5" cy="20.1" rx="6" ry="6"/>
                            <ellipse style="fill: #fab633;" cx="48.4" cy="20.1" rx="6" ry="6"/>
                            <ellipse style="fill: #0dd157;" cx="68.4" cy="20.1" rx="6" ry="6"/>
                        </g>
                </svg>
                </figure>
                <!-- End Mockup Browser -->

                <a target="_blank" href="https://www.youtube.com/embed/DlR-Uty0t7k">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/DlR-Uty0t7k" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </a>
            </div>
        </div>
        <!-- End Video 2 -->

        <!-- Video 3 -->
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <!-- Mockup Browser -->
                <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 857 40" style="enable-background:new 0 0 857 40;" xml:space="preserve">
                  <g>
                      <path style="fill: #fff;"
                            d="M856.8,40.2H0.8V19c0-10.5,8.5-19,19-19h818c10.5,0,19,8.5,19,19V40.2z"/>
                  </g>
                        <g>
                            <ellipse style="fill: #fb4143;" cx="28.5" cy="20.1" rx="6" ry="6"/>
                            <ellipse style="fill: #fab633;" cx="48.4" cy="20.1" rx="6" ry="6"/>
                            <ellipse style="fill: #0dd157;" cx="68.4" cy="20.1" rx="6" ry="6"/>
                        </g>
                </svg>
                </figure>
                <!-- End Mockup Browser -->

                <a target="_blank" href="https://www.youtube.com/embed/3EQ-NatdVEw">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/3EQ-NatdVEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </a>
            </div>

            <div class="col-lg-5 align-self-center pl-lg-5">
                <h2 class="font-weight-light mb-3">A2</h2>
                <p><strong class="text-primary">Conectate</strong></p>

            </div>
        </div>
        <!-- End Video 3 -->
    </div>
</section>
<!-- Fin Videos-->

<?php
include "../footer.php";
?>

<!-- Bootstrap core JavaScript -->
<?php
include('../js-base-uikit.php');
?>

<script src="../js/alameda.js"></script>

</body>

</html>
