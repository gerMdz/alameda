<?php
/**
 * Created by PhpStorm.
 * User: gerardo
 * Date: 09/04/19
 * Time: 08:27
 */
$lema = 'Pedidos de Oración';
$lemaSinEspacios = 'Pedidos-Oración';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'Pedidos de Oración';
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
    include('style-base-uikit.php')
    ?>
    <title>Oración - Iglesia de la Alameda</title>


    <link href="/css/styles.css?v=<?php echo $version ?>" rel="stylesheet">
    <script src="/js/alameda.js"></script>


    <style>
        strong {
            font-weight: 400 !important
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


    </style>

    <link href="/css/styles.css?v=<?php echo $version ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
          rel="stylesheet"/>


    <link href="/css/landings/heroic-features.css" rel="stylesheet">

</head>

<body>


<header>
    <?php include 'nav.php'; ?>

</header>


    <section class="px-sm-0 p-xl-5 p-md-3  mt-1 " id="inicio">
        <div class="container-fluid">
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="col-sm-12 text-center mx-auto mt-1">

                    <header class="jumbotron my-1">
                        <a class="btn btn-blue btn-xl js-scroll-trigger mx-auto"
                           href="https://forms.gle/DuJvVG374UMNjCuv7" target="_blank">
                            Podés hacerlo
                            desde aqui
                        </a>

                        <h1 class="text-uppercase text-black-50 font-weight-bold">
                            Motivos de Oración
                        </h1>
                        <span class="divider-new my-1">
                        <img src="images/institucional/LOGO-ORACION.png"
                             class="resize img-fluid rounded-circle" alt="Iglesia de La Alameda"></span>


                        <h5 class="text-black-50 font-weight-light my-1 p-1">
                            <b>Ningún</b> problema es demasiado grande para Dios,<br/>
                            ni insignificante para su cuidado <b>Paternal</b>. <br/>
                            Dejanos <b>tu motivo</b> de oración específico, <br/>
                            tenemos un equipo de personas que <b>estará orando</b> por vos.
                        </h5>





                    </header>
                </div>

            </div>
        </div>
    </section>


    <section class="vacio mb-3">

    </section>


    <?php
    include "footer.php";
    ?>

    <!-- Bootstrap core JavaScript -->
    <?php
    include('js-base-uikit.php');
    ?>

</body>

</html>


<!--<!-- Bootstrap core JavaScript -->
<!--<script src="vendor/jquery/jquery.min.js"></script>-->
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!---->
<!--<!-- Plugin JavaScript -->
<!--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->
<!---->
<!--<!-- Contact form JavaScript -->
<!--<script src="js/jqBootstrapValidation.js"></script>-->
<!--<script src="js/contact_me.js"></script>-->
<!---->
<!--<!-- Custom scripts for this template -->
<!--<script src="js/agency.min.js"></script>-->
<!---->
<!--</body>-->
<!---->
<!--</html>-->
