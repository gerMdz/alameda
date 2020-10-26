<?php
/**
 * Created by PhpStorm.
 * User: gerardo
 * Date: 09/04/19
 * Time: 08:27
 */
$lema = 'Ignición';
$lemaSinEspacios = 'Ignición';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'Ignición';
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
<section class="masthead masthead-oportunidades">
    <div class="container mt-5 pt-5">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-6 align-self-center">
                <img class="img-fluid rounded mb-4 mb-lg-0 overflow-auto align-items-center"
                     src="/images/institucional/IGNICION-2020-SQUARE.jpg" alt="<?php echo $lemaSinEspacios ?>">
            </div>

            <div class="col-lg-1"></div>
            <div class="col-lg-5 mb-2 mb-lg-2 pl-lg-2 fuente-normal">
                <h1 class="text-uppercase text-realce-alameda">
                    Ignición
                </h1>
                <p class="text-black-75 font-weight-light mb-5 text-left">
                    <u>Están los disponibles.</u><br/>
                    <span class="mr-5"> </span> Ellos dan su teléfono por si se los necesita.
                    <br/>
                    <u>Están los voluntarios.</u> <br/>
                    <span class="mr-5"> </span> Ellos dan su corazón y su tiempo para servir generosamente.<br/>
                    <u>Y están los líderes.</u> <br/>
                    <span class="mr-5"> </span> Los líderes son aquellos que llaman a los disponibles,
                    reúnen y sirven a los voluntarios y se ponen al hombro los equipos que hacen la diferencia en el Reino de Dios.<br/>
                    <hr/>
                    Ignición es un espacio de inspiración, visión y herramientas para nuevos líderes. <br/>
                    En cada encuentro compartimos el desafío de la semana con la presencia de invitados <br/>
                    y luego el pastor Fabian comparte una enseñanza desde la Biblia acerca del corazón y <br/>
                    las habilidades necesarias para hacer la diferencia.
                </p>
                <p class="blockquote-footer">
                    Exclusivamente por nuestra casa virtual:
                    <a href="https://online.iglesiaalameda.com" target="_blank">
                        online.iglesiaalameda.com
                    </a>

                </p>

            </div>

        </div>
    </div>
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
