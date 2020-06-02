<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 02/06/2020
 * Time: 06:22
 */
$lema = 'Familia 2020';
$lemaSinEspacios = 'Familia-2020';
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
    include ('favicon.php');
    include('style-base-uikit.php')
    ?>
    <link rel="icon" href="images/index.png" sizes="32x32" />
    <link rel="icon" href="images/index192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="../images/indexapple.png" />

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

        .bg-fam {
            background-color: #113c3c;
        }


    </style>

</head>

<body>


<header>
    <?php include 'nav.php'; ?>

    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-dark"
             style="background-image: url(series/familia-2020/FAMILIA-2020-TAPA-002.jpg); background-repeat: repeat-y ;">
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
    <section class="a-content-space-medium">
        <div class="container">
            <div class="row ">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-5 mb-lg-5 pl-lg-5 align-self-center">
                    <h1 class="mb-3">Familia 2020</h1>
                    <p>
                        Aquí Reseña
                    </p>
                    <p class="blockquote-footer">
                        Aquí texto o frase
                    </p>
                </div>

                <div class="col-lg-6">
                    <img class="img-fluid rounded mb-4 mb-lg-0 overflow-auto"
                         src="series/familia-2020/FAMILIA-2020-TAPA-001.jpg" alt="<?php echo $lemaSinEspacios ?>">
                </div>
            </div>
        </div>
    </section>


    <!-- Charlas -->

    <section class="a-content-space-medium bg-dark text-center">
        <div class="container">
            <div class="row">
<!--                Charla 1-->
                <div class="col-md-4 mb-5 mx-auto   ">
                    <div class="card h-100">

                        <div class="card-header">
                            Título Charla
                        </div>
                        <div class="card-header-pills ">
                            <blockquote class="u-blockquote-v2 rounded mb-1 ">
                                <span class="mr-1"></span>
                                ["play", "election", "describe"
                            </blockquote>
                        </div>
                        <hr class="text-hide" />
                        <div class="media u-font-size-90 card-footer bg-fam mt-auto">
                            <img class="u-box-shadow-lg img-fluid mt-1 align-self-center rounded a-blockquote-v2__image u-box-shadow-lg mx-3 mt-2"
                                 src="series/oraciones-audaces/07-la-ultima-oportunidad.jpg"
                                 alt="<?php echo $lemaSinEspacios ?>">
                            <div class="media-body align-self-center">
                                <a class="mr-4" href="#!">

                                    <i class="far fa-file-pdf mr-1"></i>
                                    <b>Notas del mensaje</b>
                                </a><br/>
                                <a href="#!">

                                    <i class="fab fa-youtube fa-fw mr-1"></i>

                                    <i>Ver Mensaje</i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
<!--                Fin Charla 1-->
            </div>
        </div>
    </section>
    <!-- Charla 1 -->
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

