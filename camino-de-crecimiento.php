<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 22/08/2020
 * Time: 07:10
 */
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
include_once('gerVendor/gerFunctions.php')
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
    <section class="js-parallax u-promo-block u-promo-block--mheight-700 u-overlay bg-gris-medio text-white "
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
            <h2>
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
                    <header class="mb-5 text-left">
                        <h2 class="h3 text-left">
                            Paso uno
                        </h2>
                        <span class="text-black-75 text-left">
                            Conéctate con la Alameda y descubrí las siete claves para pertenecer a la familia de fe.
                            Aprendé más detalles sobre nuestra visión, creencias y liderazgo. También tendrás la
                            oportunidad de convertirte en miembro de la Alameda.
                        </span>
                    </header>


                </div>
                <!-- End Article Content -->

                <!-- Article Image -->
                <div class="col-lg-6 align-items-center pl-5">
                    <!-- SVG Tablet Mockup -->
                    <div class="mx-auto bg-white p-5 text-center">
                        <h4 class="text-alameda text-center text-uppercase text-realce-alameda">
                            Unite a esta charla en línea
                        </h4>
                        <hr/>
                        <p class="mx-auto text-center ">
                            29 de agosto a las 18:00 hs.
                        </p>
                        <a href="https://forms.gle/J6d7cZ8rk8xys8NHA" class="btn-alameda">
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
                <b class="aire-2">
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
                                <img src="/images/avanza/paso-1.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid  ">
                            </div>
                            <h4 class="card-title text-center text-alameda sub-img">
                                Paso uno: Conviértete en miembro
                                <br>
                            </h4>
                            <div class="card-body">
                                <p class="card-description text-center text-dark">
                                    Conéctate con la Alameda y descubrí las siete claves para pertenecer a la familia de
                                    fe. Aprendé más detalles sobre nuestra visión, creencias y liderazgo. También
                                    tendrás la oportunidad de convertirte en miembro de la Alameda
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pasos h-100">
                        <div class="card card-plain bg-white h-100 ">
                            <div class="col-sm-4 mx-auto text-center img-20">
                                <img src="/images/avanza/paso-2.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid">
                            </div>
                            <h4 class="card-title text-center text-alameda sub-img">
                                Paso dos: Adopta nuevos hábitos.
                                <br>
                            </h4>
                            <div class="card-body">
                                <p class="card-description text-center text-dark ">
                                    Aprendé como desarrollar los tres hábitos que te llevarán a una vida de libertad y victoria en tu vida cristiana.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pasos h-100">
                        <div class="card card-plain bg-white h-100">
                            <div class="col-sm-4 mx-auto text-center img-20">
                                <img src="/images/avanza/paso-3.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid">
                            </div>
                            <h4 class="card-title text-center text-alameda sub-img">
                                Paso tres: Descubrí tu FORMA
                                <br>
                            </h4>
                            <div class="card-body">
                                <p class="card-description text-center text-dark">
                                    Sumergite en los detalles de tu personalidad, descubrí tus dones y experimenta cómo tu diseño revela tu propósito en la vida y tu mejor lugar en el voluntariado de la Alameda. Conéctate con las oportunidades disponibles en la Alameda para vivir tu propósito y servir a los demás utilizando los dones que Dios le ha dado.
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
