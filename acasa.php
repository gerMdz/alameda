<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 26/09/2020
 * Time: 11:30
 */

$lema = 'ACASA';
$lemaSinEspacios = 'ACASA';
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
             style="background-image: url(/images/institucional/acasa-portada.png)">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center d-md-none d-lg-none d-xl-none">
                        <h1 class="display-sm-4 display-lg-3 h2">
                            <b class="text-white aire-2">
                                <?php
                                echo $lema;
                                ?>
                            </b>
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
                ACASA ...
            </h2>
            <span class="mb-0 text-14-300">
                ... es un lugar de contención y ayuda a víctimas de abuso sexual, trabajamos en pos de la sanidad integral de la persona y su entorno primario.
            </span>
        </div>
    </section>
    <!-- End Free Quote -->

    <!-- Our Product -->
    <section class="u-content-space mx-auto text-center "
             style="background-image: url(/images/acasa/portada.jpg);
             background-repeat: no-repeat; background-size:cover;">
        <div class="container">
            <div class="row">
                <!-- Article Content -->
                <div class="col-lg-6 align-self-center pr-5 ">
                    <header class="mb-5 text-left">
                        <i
                    </header>
                </div>
                <!-- End Article Content -->
                <!-- Article Image -->
                <div class="col-lg-6 align-items-center pl-5">
                    <!-- SVG Tablet Mockup -->
                    <div class="mx-auto bg-white p-5 text-center">
                        <h4 class="text-alameda text-center text-uppercase text-realce-alameda">
                            Para más información contactate a través de
                        </h4>
                        <hr/>
                        <p class="mx-auto text-center ">
<!--                            Conectate enviando un mensaje <br/>-->
<!--                            <a href="sms:+5492613070449;?&body=Quisiera conectarme a un grupo abierto">SMS-->
<!--                                <i class="fas fa-sms"></i></a>-->
<!--                            o-->
                            <a href="https://api.whatsapp.com/send?phone=+542612192838&text=Quisiera más información sobre ACASA">
                                Whatsapp <i class="fab fa-whatsapp"></i> <br/> +54 261 219-2838</a> (Mónica Catalá)
                            <hr/>
                            Facebook <i class="fab fa-facebook"> </i> <br/>
                            ACASA Fundación Alameda
                            <hr/>
                            Instagram <i class="fab fa-instagram"> </i> <br/>
                            acasa_alameda

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
