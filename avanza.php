<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 22/08/2020
 * Time: 07:10
 */

use gerVendor\HandlerPasos;
use gerVendor\Pasos;

$lema = 'Camino de Crecimiento Alameda';
$lemaSinEspacios = 'Camino-de-Crecimiento-Alameda';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = $lema;
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;

include_once('gerVendor/HandlerPasos.php');
include_once('gerVendor/Pasos.php');
$pasos = new Pasos();
$referencias = new HandlerPasos();
$data = $referencias->getPasos();
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
    <section class="js-parallax u-promo-block u-promo-block--mheight-700 u-overlay bg-gris-medio text-white fuente-normal"
             style="background-image: url(/images/institucional/portada-avanza.jpg) ">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="display-sm-4 display-lg-3 h2"><b class="text-white aire-2">CAMINO DE CRECIMIENTO</b>
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
            <h2 class="fuente-arial-nova">
                Camino de Crecimiento Alameda
            </h2>
            <span class="mb-0 text-14-300">
                El Camino de Crecimiento en la Alameda te guiará a descubrir tu propósito redentor y vivir la vida que Dios creó para vos. El Camino de Crecimiento se compone de tres pasos que te equiparán para 1) Sumarte a la iglesia, 2) Adoptar hábitos saludables y 3) Descubrir y desarrollar tu diseño personal dado por Dios para hacer una diferencia en la vida de los demás.
            </span>
        </div>
    </section>
    <!-- End Free Quote -->

    <!-- Our Product -->
    <section class="u-content-space mx-auto text-center "
             style="background-image: url(/images/avanza/fondo-paso-1.jpg); background-repeat: no-repeat; background-size:cover">

        <div class="container">
            <div class="row">
                <!-- Article Content -->
                <div class="col-lg-6 align-self-center pr-5 ">
                    <header class="mb-5 text-left fuente-arial-nova">
                        <h2 class="h3 text-left fuente-arial-nova">
                            <?php
                            echo $data['titulo'];
                            ?>
                        </h2>
                        <span class="text-black-75 text-left">
                            <?php
                                echo $data['texto'];
                            ?>
                        </span>
                    </header>


                </div>
                <!-- End Article Content -->

                <!-- Article Image -->
                <div class="col-lg-6 align-items-center pl-5">
                    <!-- SVG Tablet Mockup -->
                    <div class="mx-auto bg-white p-5 text-center">
                        <h4 class="text-alameda text-center text-uppercase text-realce-alameda fuente-arial-nova">
<!--                            Unite a esta charla en línea-->
                            Asistí a esta charla
                        </h4>
                        <hr/>
                        <p class="mx-auto text-center fuente-arial-nova">
                            <?php
                            echo $data['fecha'] . ' a las ' . $data['hora'] . '<br/> en ' . $data['lugar'] ;
                            ?>
                        </p>
                        <a href="https://igle.ar/sumate" class="btn-alameda" target="_blank">
                            Registrate para tu próximo paso
                        </a>

                    </div>


                    <!-- End Article Image -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Product -->

    <section class="u-content-space border-bottom py-5 bg-gris-medio">
        <div class="container text-center">
            <h4 class="text-alameda">
                <b class="aire-2 fuente-arial-nova">
                    LOS PASOS EN EL CAMINO DE CRECIMIENTO
                </b>
            </h4>
            <hr/>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="pasos h-100">
                        <div class="card card-plain bg-white h-100">
                            <div class="col-sm-4 mx-auto text-center img-20">
                                <img src="/images/avanza/paso-1-int.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid  ">
                            </div>
                            <h4 class="card-title text-center text-alameda sub-img px-1 fuente-normal">
                                Paso uno:<br/> Conviértete en miembro
                                <br>
                            </h4>
                            <div class="card-body">
                                <p class="card-description text-center text-dark fuente-arial-nova">
                                    <?php
                                    echo $pasos->getTexto1();
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pasos h-100">
                        <div class="card card-plain bg-white h-100 ">
                            <div class="col-sm-4 mx-auto text-center img-20">
                                <img src="/images/avanza/paso-2-int.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid">
                            </div>
                            <h4 class="card-title text-center text-alameda sub-img px-1 fuente-normal">
                                Paso dos:<br/> Adopta nuevos hábitos.
                                <br>
                            </h4>
                            <div class="card-body">
                                <p class="card-description text-center text-dark fuente-arial-nova">
                                    <?php
                                    echo $pasos->getTexto2();
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pasos h-100">
                        <div class="card card-plain bg-white h-100">
                            <div class="col-sm-4 mx-auto text-center img-20">
                                <img src="/images/avanza/paso-3-int.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid">
                            </div>
                            <h4 class="card-title text-center text-alameda sub-img px-1 fuente-normal">
                                Paso tres:<br/> Descubrí tu FORMA
                                <br>
                            </h4>
                            <div class="card-body">
                                <p class="card-description text-center text-dark fuente-arial-nova">
                                    <?php
                                    echo $pasos->getTexto3();
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<!-- Footer -->

<!-- End Footer -->

<!-- Call Us Modal Window -->
<?php
echo $version;
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
