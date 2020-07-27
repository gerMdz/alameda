<?php
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


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <script src="https://kit.fontawesome.com/743c9941eb.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Material Kit CSS -->
    <link href="material-kit/css/material-kit.css?v=2.0.4" rel="stylesheet" />
</head>
<body>
<?php include 'nav.php'; ?>


<div class="page-header header-filter" data-parallax="true" style="background-image: url('material-kit/img/bg3.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand text-center">
                    <h1>Your title here</h1>
                    <h3 class="title text-center">Subtitle</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Your main section here</h2>
        </div>
    </div>
</div>

<footer class="footer footer-default" >
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com/">
                        Creative Tim
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="material-kit/js/core/jquery.min.js" type="text/javascript"></script>
<script src="material-kit/js/core/popper.min.js" type="text/javascript"></script>
<script src="material-kit/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
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
<script src="material-kit/js/material-kit.js?v=2.0.4" type="text/javascript"></script></body>
</html>