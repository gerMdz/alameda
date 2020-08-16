<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 15/05/2020
 * Time: 06:34
 */
$lema = 'Contacto Iglesia Alameda';
$lemaSinEspacios = 'Contacto-Iglesia-Alameda';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'Contacto';
/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once ('gerVendor/gerFunctions.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ('meta-base.php');
    include ('style-base-uikit.php')
    ?>
    
<!--    <link href="css/styles.css?v=--><?php //echo $version ?><!--" rel="stylesheet">-->
    <script src = "js/alameda.js"> </script>



    <style>
        strong{font-weight: 400 !important}
        .card-text{font-size: 1.1em !important;
        font-weight: 600 !important;}
        .header {
            background-image: url('images/series/cabecera_index.jpg');
            background-size: cover;
            background-position: center;
            position: relative;

        }
        .overlay {
            position: absolute;
            min-height: 100%;
            min-width: 100%;
            left: 0;
            top: 0;
            background: rgba(255, 255, 255, 0.6);

        }
        img.resize {
            width:10%; /* you can use % */
            height: auto;
        }
        .btn-xl{
            padding: 1.25rem 1.25rem;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            border: none currentcolor;
            border-radius: 10rem;
        }



    </style>

<!--    <link href="css/styles.css?v=--><?php //echo $version ?><!--" rel="stylesheet">-->
<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />-->
<!---->
<!---->
<!--    <link href="css/landings/heroic-features.css" rel="stylesheet">-->

</head>

<body id="page-top">

<?php
include 'nav.php';
?>


<header class="masthead masthead-oportunidades">

    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <a class="btn btn-blue btn-round btn-xl js-scroll-trigger "
                   href="https://forms.gle/yMmDuFqn6mXkJ8Sb6"
                   target="_blank">
                    Completar Tarjeta de Conexión
                </a>
                <h1 class="text-uppercase text-realce-alameda">
                    <small class="text-black">Bienvenido a la Alameda </small><br/> ¡Nos encataría conocerte!
                </h1>

                <div class="d-flex col-sm-12">
                    <hr class="my-auto flex-grow-1 divider col-sm-5">
                    <img src="/images/institucional/logo-gris-oscuro-2020.jpg"
                         class="col-sm-1 img-fluid rounded-circle" style="max-width: 100px" alt="Iglesia de La Alameda">
                    <hr class="col-sm-5 my-auto flex-grow-1">
                </div>




            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-black-75 font-weight-light mb-5">
                    Creemos que Dios tiene un plan maravilloso para tu vida.<br/>
                    Nuestro profundo deseo es ayudarte a
                    comenzar una relación con Dios<br/>
                    y así crecer de tal manera que alcances
                    la verdadera felicidad para vos y tu hogar.<br/>
                    Estamos listos para oir tus sueños y acompañarte
                    a través de las etapas de la vida.<br/>
                    Sabemos que sos importante para Dios.<br/>
                    "Deseamos verte llenar tu vida con próposito"
                </p>

            </div>
        </div>
    </div>
</header>


<hr class="m-0">
    <?php
    include "footer.php";
    ?>

    <!-- Bootstrap core JavaScript -->
    <?php
    include('js-base-uikit.php');
    ?>

</body>

</html>