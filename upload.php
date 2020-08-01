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
include_once('gerVendor/Links.php');
$notas = new Links();

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
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <script src="https://kit.fontawesome.com/743c9941eb.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="/css/igles.min.css?v=<?php echo $version ?>" rel="stylesheet">

    <!-- Material Kit CSS -->
    <link href="material-kit/css/material-kit.css?v=2.0.4" rel="stylesheet"/>

    <style>
        .container-img {
            position: relative;
            text-align: center;
            color: white;
        }

        /* Bottom left text */
        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px;
        }

        /* Top left text */
        .top-left {
            position: absolute;
            top: 8px;
            left: 16px;
        }

        /* Top right text */
        .top-right {
            position: absolute;
            top: 8px;
            right: 16px;
        }

        /* Bottom right text */
        .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
        }

        /* Centered text */
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
<?php include 'nav.php'; ?>
<hr class="mt-5"/>
<hr class="mt-lg-1 d-none d-lg-block"/>
<section class="bg-white ">
    <div class="container-fluid mt-lg-1 mt-sm-5">
        <div class="row">
            <div class="col-md-10 mx-auto ">
                <div class="row ">
                    <div class="col-md-8 align-items-center">
                        <div class="col-sm-12 mx-auto vh-100">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">


                                <iframe
                                        src="https://www.youtube.com/embed/<?php echo $notas->getIndex(); ?>"
                                        class="embed-responsive-item p-0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
<!--                                <div class="card-img-overlay">-->
                                    <div class="card-footer bg-white justify-content-between"
                                         style="top: 80%; position: relative">
                                        <a href="javascript:" class="card-link">
                                            <small><?php echo $notas->getFecha(); ?></small><br/>
                                            <b><?php echo $notas->getTitle(); ?></b><br/>
                                            <small><?php echo $notas->getAutor(); ?></small>

                                        </a>
                                        <a href="<?php echo $notas->getNota() ?>" class="card-link mr-2"
                                           style="z-index: 100">
                                            Ver la celebración
                                        </a>
<!--                                    </div>-->


                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-lg-1 mt-sm-5 align-items-center">

                        <div class="row align-items-center">

                            <div class="col-sm-12 container-img mt-0 mb-2">

                                <img src="/images/institucional/conocerte.jpg" class="img-fluid card-img vw-100 shadow-blue p-1"
                                     alt="Iglesia de la Alameda"/>


                                <a class="btn btn-round bg-white centered" href="/contacto.php">
                                    <h6>
                                        <b class="text-blue">
                                            ¿Nuevo en La Alameda? <br class="d-block d-md-none"/>
                                            Queremos conocerte
                                        </b>
                                    </h6>
                                </a>
                            </div>

                            <div class="col-sm-12 container-img mt-2 mb-lg-0 mb-sm-5">

                                <img src="/images/gp_escalado.png" class="img-fluid card-img vw-100 shadow-blue p-5"
                                     alt="Iglesia de la Alameda"/>


                                <a class="btn btn-round bg-white centered" href="/oportunidades/grupos-pequeños.php">
                                    <h6>
                                        <b class="text-blue">
                                            Se parte de un<br class="d-block d-md-none"/>
                                            Grupo Pequeño
                                        </b>
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<div class="main main-raised">-->
<!--    <div class="container">-->
<!--        <div class="section text-center">-->
<!--            <h2 class="title">Your main section here</h2>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--<footer class="footer footer-default">-->
<!--    <div class="container">-->
<!--        <nav class="float-left">-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="/index.php">-->
<!--                        Iglesia de la Alameda-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--        <div class="copyright float-right">-->
<!--            &copy;-->
<!--            <script>-->
<!--                document.write(new Date().getFullYear())-->
<!--            </script>-->
<!--            , echo con <i class="material-icons">favorite</i> por-->
<!--            <a href="/index.php" target="blank">Iglesia de la Alameda</a> .-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<?php
include 'footer.php';
?>
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
<script src="material-kit/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
</body>
</html>