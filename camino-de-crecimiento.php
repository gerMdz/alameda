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
                            <hr/>
                        </h4>
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
                            <div class="col-md-6 mx-auto img-20">
                                <img src="/images/avanza/paso-1.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid  ">
                            </div>
                            <h4 class="card-title text-center text-alameda">Paso uno: Conviértete en miembro
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
                            <div class="col-md-6 ml-auto mr-auto img-20">
                                <img src="/images/avanza/paso-2.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid">
                            </div>
                            <h4 class="card-title text-center text-alameda">Paso dos: Adopta nuevos hábitos.
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
                            <div class="col-md-6 ml-auto mr-auto img-20">
                                <img src="/images/avanza/paso-3.jpg" alt="Iglesia de La Alameda"
                                     class="img-raised rounded-circle img-fluid">
                            </div>
                            <h4 class="card-title text-center text-alameda">Paso tres: Descubrí tu FORMA
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

    <!-- Features -->
    <!--    <section class="bg-light u-content-space">-->
    <!--        <div class="container">-->
    <!--            <header class="text-center w-md-50 mx-auto mb-8">-->
    <!--                <h2 class="h1">Features</h2>-->
    <!--                <p class="h5">Stream creative technology company providing key digital services for everyone.</p>-->
    <!--            </header>-->
    <!---->
    <!--            <!-- Feature Blocks -->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-4 mb-5 mb-lg-0">-->
    <!--                    <div class="display-4 text-primary mb-2">-->
    <!--                        <i class="fab fa-grav"></i>-->
    <!--                    </div>-->
    <!--                    <h4 class="h5">Excellent Features</h4>-->
    <!--                    <p>Achieve virtually any look and layout design within one UI Kit solution.</p>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-lg-4 mb-5 mb-lg-0">-->
    <!--                    <div class="display-4 text-primary mb-2">-->
    <!--                        <i class="fab fa-connectdevelop"></i>-->
    <!--                    </div>-->
    <!--                    <h4 class="h5">Powerful API</h4>-->
    <!--                    <p>We strive to figure out ways to help your audience grow through all platforms.</p>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-lg-4 mb-5 mb-lg-0">-->
    <!--                    <div class="display-4 text-primary mb-2">-->
    <!--                        <i class="fas fa-cubes"></i>-->
    <!--                    </div>-->
    <!--                    <h4 class="h5">Blockchain Based</h4>-->
    <!--                    <p>Find what you need in one template and combine features at will.</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <!-- End Feature Blocks -->
    <!---->
    <!--            <hr class="my-8">-->
    <!---->
    <!--            <!-- Feature Blocks -->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-4 mb-5 mb-lg-0">-->
    <!--                    <div class="display-4 text-primary mb-2">-->
    <!--                        <i class="fab fa-vuejs"></i>-->
    <!--                    </div>-->
    <!--                    <h4 class="h5">VueJS Included</h4>-->
    <!--                    <p>Easy and fast adjustments of elements are possible with Stream UI Kit.</p>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-lg-4 mb-5 mb-lg-0">-->
    <!--                    <div class="display-4 text-primary mb-2">-->
    <!--                        <i class="fab fa-react"></i>-->
    <!--                    </div>-->
    <!--                    <h4 class="h5">React Powered</h4>-->
    <!--                    <p>Our React Powered App will save you tons of time and cost in your projects.</p>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-lg-4 mb-5 mb-lg-0">-->
    <!--                    <div class="display-4 text-primary mb-2">-->
    <!--                        <i class="fab fa-angular"></i>-->
    <!--                    </div>-->
    <!--                    <h4 class="h5">Angular Compatible</h4>-->
    <!--                    <p>Power your app with Angular components for no cost within one stop solution.</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <!-- End Feature Blocks -->
    <!--        </div>-->
    <!--    </section>-->
    <!-- End Features -->

    <!-- Portfolio -->
    <!--    <section class="u-content-space">-->
    <!--        <div class="container">-->
    <!--            <header class="text-center w-md-50 mx-auto mb-8">-->
    <!--                <h2 class="h1">Branding Works</h2>-->
    <!--                <p class="h5">We design and develope experiances that make people's lives easy and simple.</p>-->
    <!--            </header>-->
    <!---->
    <!--            <ul class="js-shuffle-controls u-portfolio-controls text-center mb-5">-->
    <!--                <li class="u-portfolio-controls__item"><a href="#!" data-group="all" class="active">All</a></li>-->
    <!--                <li class="u-portfolio-controls__item"><a href="#!" data-group="its-illustration">Illustration</a></li>-->
    <!--                <li class="u-portfolio-controls__item"><a href="#!" data-group="its-design">Design</a></li>-->
    <!--                <li class="u-portfolio-controls__item"><a href="#!" data-group="its-graphic">Graphic</a></li>-->
    <!--                <li class="u-portfolio-controls__item"><a href="#!" data-group="its-logo">Logo</a></li>-->
    <!--            </ul>-->
    <!---->
    <!--            <!-- Work Content -->
    <!--            <div class="js-shuffle u-portfolio row no-gutters mb-6">-->
    <!--                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-illustration"]'>-->
    <!--                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img1.jpg" alt="Image Description">-->
    <!--                    <figcaption class="u-portfolio__info">-->
    <!--                        <h6 class="mb-0">IX Project</h6>-->
    <!--                        <small class="d-block">Branding</small>-->
    <!--                    </figcaption>-->
    <!--                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img1.jpg">Zoom</a>-->
    <!--                </figure>-->
    <!---->
    <!--                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-design"]'>-->
    <!--                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img2.jpg" alt="Image Description">-->
    <!--                    <figcaption class="u-portfolio__info">-->
    <!--                        <h6 class="mb-0">Bottle Design</h6>-->
    <!--                        <small class="d-block">Mockup</small>-->
    <!--                    </figcaption>-->
    <!--                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img2.jpg">Zoom</a>-->
    <!--                </figure>-->
    <!---->
    <!--                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-graphic"]'>-->
    <!--                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img3.jpg" alt="Image Description">-->
    <!--                    <figcaption class="u-portfolio__info">-->
    <!--                        <h6 class="mb-0">App Developement</h6>-->
    <!--                        <small class="d-block">Åpp</small>-->
    <!--                    </figcaption>-->
    <!--                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img3.jpg">Zoom</a>-->
    <!--                </figure>-->
    <!---->
    <!--                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-logo"]'>-->
    <!--                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img4.jpg" alt="Image Description">-->
    <!--                    <figcaption class="u-portfolio__info">-->
    <!--                        <h6 class="mb-0">Just Bored</h6>-->
    <!--                        <small class="d-block">Freetime</small>-->
    <!--                    </figcaption>-->
    <!--                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img4.jpg">Zoom</a>-->
    <!--                </figure>-->
    <!---->
    <!--                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-illustration"]'>-->
    <!--                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img5.jpg" alt="Image Description">-->
    <!--                    <figcaption class="u-portfolio__info">-->
    <!--                        <h6 class="mb-0">Cake Lab</h6>-->
    <!--                        <small class="d-block">Graphic</small>-->
    <!--                    </figcaption>-->
    <!--                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img5.jpg">Zoom</a>-->
    <!--                </figure>-->
    <!---->
    <!--                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-graphic"]'>-->
    <!--                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img6.jpg" alt="Image Description">-->
    <!--                    <figcaption class="u-portfolio__info">-->
    <!--                        <h6 class="mb-0">NB Project</h6>-->
    <!--                        <small class="d-block">Logo</small>-->
    <!--                    </figcaption>-->
    <!--                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img6.jpg">Zoom</a>-->
    <!--                </figure>-->
    <!---->
    <!--                <!-- sizer -->
    <!--                <figure class="col-sm-6 col-md-4 u-portfolio__item shuffle_sizer"></figure>-->
    <!--            </div>-->
    <!--            <!-- End Work Content -->
    <!---->
    <!--            <!-- Clints -->
    <!--            <div class="text-center">-->
    <!--                <ul class="list-unstyled row justify-content-center mb-2">-->
    <!--                    <li class="col-sm-6 col-lg-2">-->
    <!--                        <img class="u-clients__image img-fluid" src="assets/img-temp/partners/img2.png"-->
    <!--                             alt="Image Description">-->
    <!--                    </li>-->
    <!--                    <li class="col-sm-6 col-lg-2">-->
    <!--                        <img class="u-clients__image img-fluid" src="assets/img-temp/partners/img3.png"-->
    <!--                             alt="Image Description">-->
    <!--                    </li>-->
    <!--                    <li class="col-sm-6 col-lg-2">-->
    <!--                        <img class="u-clients__image img-fluid" src="assets/img-temp/partners/img4.png"-->
    <!--                             alt="Image Description">-->
    <!--                    </li>-->
    <!--                    <li class="col-sm-6 col-lg-2">-->
    <!--                        <img class="u-clients__image img-fluid" src="assets/img-temp/partners/img5.png"-->
    <!--                             alt="Image Description">-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--                <p>Got project? <a href="contacts.html">Request a free quote!</a></p>-->
    <!--            </div>-->
    <!--            <!-- End Clints -->
    <!--        </div>-->
    <!--    </section>-->
    <!-- End Portfolio -->
</main>

<!-- Footer -->

<!-- End Footer -->

<!-- Call Us Modal Window -->
<?php
include "footer.php";

include('js-base-uikit.php');
?>
<!-- End Call Us Modal Window -->

<!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- Global Vendor -->
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/vendors/jquery.migrate.min.js"></script>
<script src="assets/vendors/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>

<!-- Components Vendor  -->
<script src="assets/vendors/jquery.parallax.js"></script>
<script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/shuffle/jquery.shuffle.min.js"></script>

<!-- Theme Settings and Calls -->
<script src="assets/js/global.js"></script>

<!-- Theme Components and Settings -->
<script src="assets/js/vendors/parallax.js"></script>
<script src="assets/js/vendors/magnific-popup.js"></script>
<script src="assets/js/vendors/shuffle.js"></script>
<!-- END JAVASCRIPTS -->
</body>
<!-- End Body -->
</html>
