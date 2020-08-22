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
include_once ('gerVendor/gerFunctions.php')
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>

    <?php
    include ('meta-base.php');
    include ('style-base-uikit.php')
    ?>
    <title><?php echo $lema;?> Iglesia de la Alameda</title>
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
    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-white"
             style="background-image: url(/images/institucional/contacto2.jpg) linear-gradient(0deg|100deg,#ffffff,#0a6ebd);">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="display-sm-4 display-lg-3 h1">CAMINO DE CRECIMIENTO
                        </h1>
                        <p class="h6 text-uppercase u-letter-spacing-sm mb-0">
                            <hr width="25%"/>
                        </p>
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
    <section class="border-bottom py-3">
        <div class="container text-center">
            <p class="mb-0"><span class="badge badge-primary badge-pill mr-2">New</span> We are offering free quotation for any type of projects, <a href="contacts.html">request a free quote!</a></p>
        </div>
    </section>
    <!-- End Free Quote -->

    <!-- Our Product -->
    <section class="u-content-space-top">
        <div class="container">
            <div class="row">
                <!-- Article Content -->
                <div class="col-lg-6 align-self-center mb-5 mb-lg-0 pr-lg-5">
                    <header class="mb-5">
                        <h2 class="h1">Our Product</h2>
                        <p class="h5">Convert more visitors, and win more business with Stream - UI Kit.</p>
                    </header>

                    <p class="mb-4">Easy and fast adjustments of elements are possible with Front template. Find our more about our all-in-one programmatic template. We help to take of all the paperwork.</p>

                    <a class="mr-4" href="#!">
                        <i class="fab fa-google-play mr-1"></i> Google Play
                    </a>
                    <a href="#!">
                        <i class="fab fa-app-store-ios mr-1"></i> App Store
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
    <!-- End Our Product -->

    <!-- Features -->
    <section class="bg-light u-content-space">
        <div class="container">
            <header class="text-center w-md-50 mx-auto mb-8">
                <h2 class="h1">Features</h2>
                <p class="h5">Stream creative technology company providing key digital services for everyone.</p>
            </header>

            <!-- Feature Blocks -->
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fab fa-grav"></i>
                    </div>
                    <h4 class="h5">Excellent Features</h4>
                    <p>Achieve virtually any look and layout design within one UI Kit solution.</p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fab fa-connectdevelop"></i>
                    </div>
                    <h4 class="h5">Powerful API</h4>
                    <p>We strive to figure out ways to help your audience grow through all platforms.</p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h4 class="h5">Blockchain Based</h4>
                    <p>Find what you need in one template and combine features at will.</p>
                </div>
            </div>
            <!-- End Feature Blocks -->

            <hr class="my-8">

            <!-- Feature Blocks -->
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fab fa-vuejs"></i>
                    </div>
                    <h4 class="h5">VueJS Included</h4>
                    <p>Easy and fast adjustments of elements are possible with Stream UI Kit.</p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fab fa-react"></i>
                    </div>
                    <h4 class="h5">React Powered</h4>
                    <p>Our React Powered App will save you tons of time and cost in your projects.</p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fab fa-angular"></i>
                    </div>
                    <h4 class="h5">Angular Compatible</h4>
                    <p>Power your app with Angular components for no cost within one stop solution.</p>
                </div>
            </div>
            <!-- End Feature Blocks -->
        </div>
    </section>
    <!-- End Features -->

    <!-- Portfolio -->
    <section class="u-content-space">
        <div class="container">
            <header class="text-center w-md-50 mx-auto mb-8">
                <h2 class="h1">Branding Works</h2>
                <p class="h5">We design and develope experiances that make people's lives easy and simple.</p>
            </header>

            <ul class="js-shuffle-controls u-portfolio-controls text-center mb-5">
                <li class="u-portfolio-controls__item"><a href="#!" data-group="all" class="active">All</a></li>
                <li class="u-portfolio-controls__item"><a href="#!" data-group="its-illustration">Illustration</a></li>
                <li class="u-portfolio-controls__item"><a href="#!" data-group="its-design">Design</a></li>
                <li class="u-portfolio-controls__item"><a href="#!" data-group="its-graphic">Graphic</a></li>
                <li class="u-portfolio-controls__item"><a href="#!" data-group="its-logo">Logo</a></li>
            </ul>

            <!-- Work Content -->
            <div class="js-shuffle u-portfolio row no-gutters mb-6">
                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-illustration"]'>
                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img1.jpg" alt="Image Description">
                    <figcaption class="u-portfolio__info">
                        <h6 class="mb-0">IX Project</h6>
                        <small class="d-block">Branding</small>
                    </figcaption>
                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img1.jpg">Zoom</a>
                </figure>

                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-design"]'>
                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img2.jpg" alt="Image Description">
                    <figcaption class="u-portfolio__info">
                        <h6 class="mb-0">Bottle Design</h6>
                        <small class="d-block">Mockup</small>
                    </figcaption>
                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img2.jpg">Zoom</a>
                </figure>

                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-graphic"]'>
                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img3.jpg" alt="Image Description">
                    <figcaption class="u-portfolio__info">
                        <h6 class="mb-0">App Developement</h6>
                        <small class="d-block">Åpp</small>
                    </figcaption>
                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img3.jpg">Zoom</a>
                </figure>

                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-logo"]'>
                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img4.jpg" alt="Image Description">
                    <figcaption class="u-portfolio__info">
                        <h6 class="mb-0">Just Bored</h6>
                        <small class="d-block">Freetime</small>
                    </figcaption>
                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img4.jpg">Zoom</a>
                </figure>

                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-illustration"]'>
                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img5.jpg" alt="Image Description">
                    <figcaption class="u-portfolio__info">
                        <h6 class="mb-0">Cake Lab</h6>
                        <small class="d-block">Graphic</small>
                    </figcaption>
                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img5.jpg">Zoom</a>
                </figure>

                <figure class="col-sm-6 col-md-4 u-portfolio__item" data-groups='["its-graphic"]'>
                    <img class="u-portfolio__image" src="assets/img-temp/portfolio/img6.jpg" alt="Image Description">
                    <figcaption class="u-portfolio__info">
                        <h6 class="mb-0">NB Project</h6>
                        <small class="d-block">Logo</small>
                    </figcaption>
                    <a class="js-popup-image u-portfolio__zoom" href="assets/img-temp/portfolio/img6.jpg">Zoom</a>
                </figure>

                <!-- sizer -->
                <figure class="col-sm-6 col-md-4 u-portfolio__item shuffle_sizer"></figure>
            </div>
            <!-- End Work Content -->

            <!-- Clints -->
            <div class="text-center">
                <ul class="list-unstyled row justify-content-center mb-2">
                    <li class="col-sm-6 col-lg-2">
                        <img class="u-clients__image img-fluid" src="assets/img-temp/partners/img2.png" alt="Image Description">
                    </li>
                    <li class="col-sm-6 col-lg-2">
                        <img class="u-clients__image img-fluid" src="assets/img-temp/partners/img3.png" alt="Image Description">
                    </li>
                    <li class="col-sm-6 col-lg-2">
                        <img class="u-clients__image img-fluid" src="assets/img-temp/partners/img4.png" alt="Image Description">
                    </li>
                    <li class="col-sm-6 col-lg-2">
                        <img class="u-clients__image img-fluid" src="assets/img-temp/partners/img5.png" alt="Image Description">
                    </li>
                </ul>
                <p>Got project? <a href="contacts.html">Request a free quote!</a></p>
            </div>
            <!-- End Clints -->
        </div>
    </section>
    <!-- End Portfolio -->
</main>

<!-- Footer -->
<footer class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                <small class="text-white">&copy; 2018 <a class="text-white" href="https://htmlstream.com">Htmlstream</a>. All Rights Reserved.</small>
            </div>

            <div class="col-md-4 align-self-center">
                <ul class="list-inline text-center text-md-right mb-0">
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <a class="text-white" target="_blank" href="https://www.facebook.com/htmlstream">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <a class="text-white" target="_blank" href="https://www.instagram.com/htmlstream">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <a class="text-white" target="_blank" href="https://twitter.com/htmlstream">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                        <a class="text-white" target="_blank" href="https://dribbble.com/htmlstream">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Call Us Modal Window -->
<div class="modal fade" id="callUsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">We'll call you</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="modalName" placeholder="Your Name">
                    </div>
                    <div class="form-group mb-4">
                        <input type="tel" class="form-control" id="modalPhone" placeholder="Your Phone Number">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
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
