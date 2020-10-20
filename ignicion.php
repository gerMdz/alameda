<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 26/09/2020
 * Time: 11:30
 */

$lema = 'Ignición';
$lemaSinEspacios = 'Ignición';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = $lema;
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>

    <?php
    include('meta-base.php');
    include('style-base-uikit.php')
    ?>
    <title><?php echo $lema; ?> Iglesia de la Alameda</title>
    <!-- Meta -->
    <meta charset="utf-8"/>

    <!-- Components Vendor Styles -->

    <link rel="stylesheet" type="text/css" href="/stream-ui-kit/assets/vendors/magnific-popup/magnific-popup.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="/stream-ui-kit/assets/css/styles.css">
</head>
<!-- End Head -->

<body>
<!-- Header -->
<header>
    <!-- Navbar -->
    <?php include 'nav.php'; ?>
    <!-- End Navbar -->

    <!-- Promo Block -->
    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay bg-gris-medio text-white "
             style="background-image: url(/images/institucional/ignition-2020.jpg)">
        <!-- Promo Content -->

        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center d-md-none d-lg-none d-xl-none">
                        <h1 class="display-sm-4 display-lg-3 h2"><b class="text-dark aire-2">
                                IGNICIÓN</b>
                        </h1>
                        <hr style="width: 25%"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Promo Content -->
    </section>
    <!-- End Promo Block -->
</header>
<!-- End Header -->

<main role="main">
    <!-- Free Quote -->
    <section class="u-content-space border-bottom py-5 bg-gris-medio ">
        <div class="container text-center">
            <h2>
                Ignición
            </h2>
            <span class="mb-0 text-14-300">
                Están los disponibles. Ellos dan su teléfono por si se los necesita.<br/>
                Están los voluntarios. Ellos dan su corazón y su tiempo para servir generosamente.<br/>
                Y están los líderes. Los líderes son aquellos que llaman a los disponibles, <br/>
                reúnen y sirven a los voluntarios y se ponen al hombro los equipos que hacen <br/>
                la diferencia en el Reino de Dios.<br/>
                Ignición es un espacio de inspiración, visión y herramientas para nuevos líderes. <br/>
                En cada encuentro compartimos el desafío de la semana con la presencia de invitados <br/>
                y luego el pastor Fabian comparte una enseñanza desde la Biblia acerca del corazón y <br/>
                las habilidades necesarias para hacer la diferencia.
            </span>
        </div>
    </section>
    <!-- End Free Quote -->

    <!-- Our Product -->
    <section class="u-content-space mx-auto text-center "
             style="background-image: url(/images/institucional/imagen_auditorio_escalado_2.jpg);
             background-repeat: no-repeat; background-size:cover;">
        <div class="container">
            <div class="row">
                <!-- Article Content -->
                <div class="col-lg-6 align-self-center pr-5 ">
                    <header class="mb-5 text-left">
                    </header>
                </div>
                <!-- End Article Content -->
                <!-- Article Image -->
                <div class="col-lg-6 align-items-center pl-5">
                    <!-- SVG Tablet Mockup -->
                    <div class="mx-auto bg-white p-5 text-center">
                        <h4 class="text-alameda text-center text-uppercase text-realce-alameda">
                            Todos los miércoles a las 21 hs.
                        </h4>
                        <hr/>
                        <p class="mx-auto text-center">
                            Exclusivamente por nuestra casa virtual:
                            <a href="https://online.iglesiaalameda.com" target="_blank">
                                online.iglesiaalameda.com
                            </a>
                        </p>
                    </div>
                    <!-- End Article Image -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Product -->
</main>

<?php
include "footer.php";

include('js-base-uikit.php');
?>
<!-- End Call Us Modal Window -->
<!-- Components Vendor  -->
<script src="stream-ui-kit/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="stream-ui-kit/assets/vendors/shuffle/jquery.shuffle.min.js"></script>
<!-- Theme Components and Settings -->

<script src="stream-ui-kit/assets/js/vendors/magnific-popup.js"></script>
<script src="stream-ui-kit/assets/js/vendors/shuffle.js"></script>

</body>
<!-- End Body -->
</html>
