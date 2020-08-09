<?php

//use gerVendor\HandlerNotas;
//use gerVendor\Links;

//use gerVendor\HandlerNotas;
//use gerVendor\Links;

$lema = 'Escape a la LIbertad';
$lemaSinEspacios = 'Escape-a-la-LIbertad';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once('gerVendor/gerFunctions.php');
include_once('links.php');
require_once 'gerVendor/Links.php';
require_once 'gerVendor/HandlerNotas.php';
$links = new \gerVendor\Links();




?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iglesia de La Alameda,
     <?php echo $lema; ?>, Iglesia Bautista, Celebracion, Dios, Fe, Amistad, Arte,Libertad, Servicio, Misión, Mendoza">
    <meta name="keywords"
          content="Iglesia de la Alameda, Celebracion, Dios, Fe, Amistad, Arte, Libertad, Servicio, Misión, Mendoza">
    <meta name="author" content="Iglesia de la Alameda">

    <meta property="og:title" content="Iglesia Alameda"/>
    <meta property="og:type" content="website"/>

    <meta property="og:url" content="https://iglesiaalameda.com/index.php"/>

    <meta property="og:image" content="https://iglesiaalameda.com/images/og/og-base.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Iglesia de la Alameda</title>
    <?php include 'favicon.php' ?>

    <!-- Icon core  -->

    <link href="css/foundation-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/743c9941eb.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Icon core  -->

    <!-- Style 3th core  -->
    <!--    <link href="css/mdb.min.css" rel="stylesheet">-->
    <!--    <link rel="stylesheet" type="text/css" href="stream-ui-kit/assets/vendors/bootstrap/css/bootstrap.min.css">-->
    <!--    <link href="/css/business-casual.min.css?v=--><?php //echo $version ?><!--" rel="stylesheet">-->
    <link href="/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/stream-ui-kit/assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="/stream-ui-kit/assets/css/styles.css">
    <!-- Style 3th core  -->


    <!-- Fonts  core  -->
    <link href="/css/alameda/fontAlameda.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"-->
    <!--          rel="stylesheet">-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700"-->
    <!--          rel="stylesheet">-->

    <link href="/css/fonts.min.css?v=<?php echo $version ?>" rel="stylesheet">
    <!--    <link href="/css/igles.css" rel="stylesheet">-->

    <!-- Style Auto core  -->
    <link href="/css/igles.min.css?v=<?php echo $version ?>" rel="stylesheet">
    <link href="/css/bg.min.css?v=<?php echo $version ?>" rel="stylesheet">
    <!-- Style Auto core  -->
    <link href="/material-kit/css/material-kit.css?v=2.0.4" rel="stylesheet"/>
    <!-- Fonts  core  -->

    <!-- Custom styles for this template -->

    <style>
        /*.linkYoutube{*/
        /*    width: 100%;*/
        /*    height: 315px !important;*/
        /*}*/
        /*.swiper-container {*/
        /*width: 100vw;*/
        /*height: 100vh;*/
        /*padding: 50px;*/
        /*}*/
        /*.swiper-slide {*/
        /*background-position: center;*/
        /*background-size: cover;*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*}*/
        /*.swiper-container {*/
        /*    width: 100%;*/
        /*    padding-top: 50px;*/
        /*    padding-bottom: 50px;*/
        /*}*/

        /*.swiper-slide {*/
        /*    background-position: center;*/
        /*    background-size: cover;*/
        /*    width: 300px;*/
        /*    height: 300px;*/
        /*}*/

    </style>


</head>

<body class="bg-white">


<header>
    <?php include 'nav.php'; ?>
<!--    <hr class="mt-5"/>-->
    <div class="mt-lg-1 d-none d-lg-block"></div>

</header>

<!-- Horarios - Invitación - Video -->
<section class="bg-alameda page-section mt-n1 ">
    <div class="container-fluid">
        <!-- Invitación: Header -->
        <!--        <header class="text-center w-md-50 mx-auto  mt-5 mb-8 ">-->
        <!---->
        <!--        </header>-->

        <!-- Invitación: Header -->
        <header class="text-center w-md-50 mx-auto mt-a35   mb-8 text-black-75">
            <h2 class="h2  ">
                <a href="https://online.iglesiaalameda.com" class="text-black-75 ArialLight" target="_blank">
                    Alameda online
                </a>

            </h2>
            <h4 class="">
                <b class="text-black-75">Domingos 11 Hs.
<!--                    <br class="d-block d-md-none"/>-->

                    y 20 Hs.</b>
            </h4>


        <hr>
        <!-- End Invitación: Header -->
    </div>

</section>
<!-- Fin Horarios - Invitación - Video -->
<?php
include 'sectionHeader.php';
?>

<?php
include 'section-two.php';
?>

<!--Fin Section Slider Fotos-->


<?php include('footer.php'); ?>

<!-- Bootstrap core JavaScript -->
<!--<script src="vendor/jquery/jquery.min.js"></script>-->
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!-- Global Vendor -->
<script src="stream-ui-kit/assets/vendors/jquery.min.js"></script>
<script src="stream-ui-kit/assets/vendors/jquery.migrate.min.js"></script>
<script src="stream-ui-kit/assets/vendors/popper.min.js"></script>
<script src="stream-ui-kit/assets/vendors/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>


<!-- Components Vendor  -->
<script src="stream-ui-kit/assets/vendors/jquery.parallax.js"></script>
<script src="stream-ui-kit/assets/vendors/typedjs/typed.min.js"></script>
<script src="stream-ui-kit/assets/vendors/slick-carousel/slick.min.js"></script>
<script src="stream-ui-kit/assets/vendors/counters/waypoint.min.js"></script>
<script src="stream-ui-kit/assets/vendors/counters/counterup.min.js"></script>

<!-- Theme Settings and Calls -->
<script src="stream-ui-kit/assets/js/global.js"></script>

<!-- Theme Components and Settings -->
<script src="stream-ui-kit/assets/js/vendors/parallax.js"></script>
<script src="stream-ui-kit/assets/js/vendors/carousel.js"></script>
<script src="stream-ui-kit/assets/js/vendors/counters.js"></script>
<!-- END JAVASCRIPTS -->


<script src="material-kit/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="material-kit/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="material-kit/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="material-kit/js/material-kit.js?v=2.0.4" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip({html: true, placement: "bottom"});
    });
</script>
<script type="text/javascript">

    // $('.carousel').carousel({
    //     interval: 10000
    // })


</script>
<!-- Initialize Swiper -->
<script>
    let swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        autoplay: {
            delay: 7500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<script>
    $(document).on('ready', function () {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
            strings: [
                "Viví la experiencia ",
                "Alameda OnLine",
            ],
            typeSpeed: 90,
            loop: true,
            backDelay: 2500
        });
    });
</script>


</body>

</html>
