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
    include('style-base-uikit.php');

    ?>
    <title>Oración - Iglesia de la Alameda</title>


    <!--    <link href="/css/styles.css?v=--><?php //echo $version ?><!--" rel="stylesheet">-->
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

    <!--    <link href="/css/styles.css?v=--><?php //echo $version ?><!--" rel="stylesheet">-->
    <!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"-->
    <!--          rel="stylesheet"/>-->
    <!---->
    <!---->
    <!--    <link href="/css/landings/heroic-features.css" rel="stylesheet">-->

</head>

<body id="page-top">

<?php
include 'nav.php';
?>
<header class="masthead masthead-oportunidades">
    <div class="container h-40">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <a class="btn btn-blue btn-round btn-xl js-scroll-trigger "
                   href="https://forms.gle/DuJvVG374UMNjCuv7"
                   target="_blank">
                    Podés hacerlo desde aqui
                </a>
                <h1 class="text-uppercase text-realce-alameda">
                    <small class="text-black">Motivos de </small> Oración
                </h1>
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-black-75 font-weight-light mb-5"><b>Ningún</b> problema es demasiado grande para
                    Dios,<br/>
                    ni insignificante para su cuidado <b>Paternal</b>. <br/>
                    Dejanos <b>tu motivo</b> de oración específico, <br/>
                    tenemos un equipo de personas que <b>estará orando</b> por vos.
                </p>
            </div>
        </div>
    </div>

    <div class="d-flex col-sm-12">
        <hr class="my-auto flex-grow-1 divider col-sm-5">
        <img src="/images/institucional/logo-oracion-alameda.png"
             class="col-sm-1 img-fluid rounded-circle" style="max-width: 100px" alt="Iglesia de La Alameda">
        <hr class="col-sm-5 my-auto flex-grow-1">
    </div>

    <div class="container h-40">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">

                <h1 class="text-uppercase text-realce-alameda">
                    <small class="text-black">Motivos de </small> GRATITUD
                </h1>


            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-black-75 font-weight-light mb-5">
                    Si <b>Dios ha respondido</b> a un pedido específico que les has hecho y
                    <br/>
                    deseas <b>agradecer y compartir</b>, llena esta Tarjeta.
                    <br/>
                    "Yo te daré gracias en la gran asamblea, ante una multitud te alabaré." Salmos 35:18

                </p>
                <a class="btn btn-blue btn-round btn-xl js-scroll-trigger "
                   href="https://forms.gle/RgHtdq3EWWv5NiScA"
                   target="_blank">
                    Agradecimiento
                </a>

            </div>

        </div>
    </div>
</header>
<div class="bg-gris-alameda" style="height: 50px">

</div>


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
