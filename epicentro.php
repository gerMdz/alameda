<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 18/05/2020
 * Time: 06:56
 */
$lema = 'Epicentro 2020';
$lemaSinEspacios = 'Conferencia-de-Pastores';
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
    <title></title>
    <link href="css/styles.css?v=<?php echo $version ?>" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
        body{
            background-color: white !important};
        }
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

<body class="bg-white">


<header class="bg-white mb-5">
    <?php include 'nav.php'; ?>



</header>



    <!-- Contact Form -->
    <section class="a-content-space-medium pt-5 mt-5 mb-0 pb-5 bg-white">
        <div class="container">
<!--            <div class="text-center">-->
<!--                <a class="btn btn-blue js-scroll-trigger mx-auto btn--pill"-->
<!--                   href="https://forms.gle/J2Lz4jyyN8vUa2747" target="_blank">-->
<!--                    <i class="far fa-list-alt text-white"></i> Más detalles e inscripción-->
<!--                </a>-->
<!--            </div>-->
            <header class="text-center w-md-50 mx-auto mb-8 mt-1">
                <div class="show" id="blockquotes-center-1" role="tabpanel" aria-labelledby="blockquotes-center-tab-1">
                    <!-- Centered -->
                    <img class="img-center img-fluid" src="/images/epicentro-square-2020.jpg" alt="Iglesia Alameda Epicentro" />
                    <!-- End Centered -->
                </div>
            </header>
        </div>
    </section>
    <!-- End Contact Form -->




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

