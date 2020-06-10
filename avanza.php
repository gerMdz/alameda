<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 18/05/2020
 * Time: 06:56
 */
$lema = 'Taller de Ministerio';
$lemaSinEspacios = 'Taller-Madurez-Iglesia-Alameda';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = $lema;
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once ('gerVendor/gerFunctions.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ('meta-base.php');
    include ('style-base-uikit.php')
    ?>
    <link href="css/styles.css?v=<?php echo $version ?>" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
        strong{font-weight: 400 !important}
        .card-text{font-size: 1.1em !important;
        font-weight: 600 !important;}
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
            width:10%; /* you can use % */
            height: auto;
        }
        .btn-xl{
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


<header>
    <?php include 'nav.php'; ?>

    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-dark" style="background-image: url(images/aldia/contacto.png); background-repeat: repeat-y ;">
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


    <!-- Contact Form -->
    <section class="a-content-space-medium">
        <div class="container">
            <div class="text-center">
                <a class="btn btn-blue js-scroll-trigger mx-auto btn--pill"
                   href="https://forms.gle/J2Lz4jyyN8vUa2747" target="_blank">
                    <i class="far fa-list-alt text-white"></i> Más detalles e inscripción
                </a>
            </div>
            <header class="text-center w-md-50 mx-auto mb-8 mt-1">
                <div class="show" id="blockquotes-center-1" role="tabpanel" aria-labelledby="blockquotes-center-tab-1">
                    <!-- Centered -->
                    <blockquote class="blockquote-v1 blockquote-v1--left align-text-top">
                        <h3 >
                            En tiempos de PANDEMIA nuestra iglesia nunca dejó de SERVIR <br/>
                            y es tiempo que puedas sumarte a este desafío.<br/>
                            Tendremos nuestro seminario <br/> “Descubriendo tu F.O.R.M.A.”.
                            <br/>
                            Dios te ha dado regalos únicos que solo vos podés abrir, <br/>
                            es por eso que te invitamos a que <br/>
                            descubras cómo te ha formado para el Servicio.


                        </h3>
                        <p class="h5">Inscríbete</p>
                        <footer class="blockquote-footer">
                            Martes 23/6 de 19:00 a 20:30 hs por ZOOM<br/>
                            </footer>
                    </blockquote>
                    <!-- End Centered -->
                </div>
            </header>
        </div>
    </section>
    <!-- End Contact Form -->
</main>



    <?php
    include "footer.php";
    ?>

    <!-- Bootstrap core JavaScript -->
    <?php
    include ('js-base-uikit.php');
    ?>
    <script src="js/alameda.js"> </script>

</body>

</html>

