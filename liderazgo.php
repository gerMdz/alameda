<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 02/06/2020
 * Time: 06:22
 */

//use gerVendor\HandlerNotas;
use gerVendor\Routes;

use gerVendor\HandlerNotas;

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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('meta-base.php');
    include('favicon.php');
    include('style-base-uikit.php')
    ?>
    <title>Notas - Iglesia de la Alameda</title>
    <link rel="icon" href="images/index.png" sizes="32x32"/>
    <link rel="icon" href="images/index192.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="/images/indexapple.png"/>
    <!--    <link href="/css/styles.css?v=--><?php //echo $version ?><!--" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="/stream-ui-kit/assets/css/styles.css">
    <style>
        strong {
            font-weight: 400 !important
        }

        .card-text {
            font-size: 1.1em !important;
            font-weight: 600 !important;
        }

        /*.header {*/
        /*    background-image: url('images/series/cabecera_index.jpg');*/
        /*    background-size: cover;*/
        /*    background-position: center;*/
        /*    position: relative;*/
        /*}*/

        /*.overlay {*/
        /*    position: absolute;*/
        /*    min-height: 100%;*/
        /*    min-width: 100%;*/
        /*    left: 0;*/
        /*    top: 0;*/
        /*    background: rgba(255, 255, 255, 0.6);*/
        /*}*/

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

        .bg-fam {
            /*background: #fafafa;*/
            box-shadow: inset 0 0 .625rem rgba(0, 0, 0, .1), inset 0 0 2.188rem rgba(0, 0, 0, .03);
        }

        .position-relative {
            position: relative !important;
        }

        .mt-n6, .my-n6 {
            margin-top: -5rem !important;
        }

        .card-a {
            -webkit-box-shadow: 0 0 !important;
            box-shadow: 0 0 !important;
        }

        .card {
            -webkit-box-shadow: 0 0 !important;
            box-shadow: 0 0 !important;
        }

        .bottom-0 {
            position: absolute;
            left: 5%;
            bottom: 1%;
            width: 90%;
            /*background-color: red;*/
            /*color: white;*/
            text-align: center;
        }

        .middle-0 {
            position: relative;
            top: 25%;
            transform: translateY(-25%);
        }
    </style>
</head>
<body>
<header>
    <?php include 'nav.php'; ?>

</header>
<main role="main" class="bg-white mt-5">
    <section class="a-content-space-medium py-3">
        <div class="container">
            <div class="row ">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-2 mb-lg-2 pl-lg-2 fuente-normal">
                    <h1 class="mb-3 fuente-arial-nova">Ignición</h1>
                    <p>
                        Están los disponibles. Ellos dan su teléfono por si se los necesita.<br/>
                        Están los voluntarios. Ellos dan su corazón y su tiempo para servir generosamente.<br/>
                        Y están los líderes. Los líderes son aquellos que llaman a los disponibles, <br/>
                        reúnen y sirven a los voluntarios y se ponen al hombro los equipos que hacen <br/>
                        la diferencia en el Reino de Dios.<br/>
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
                <div class="col-lg-6 align-self-center">
                    <img class="img-fluid rounded mb-4 mb-lg-0 overflow-auto align-items-center"
                         src="/images/institucional/IGNICION-2020-SQUARE.jpg" alt="<?php echo $lemaSinEspacios ?>">
                </div>
            </div>
        </div>
    </section>


</main>

<?php
include "footer.php";
?>
<div id="modal-01" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">
                <i class="fas fa-times text-white"></i>
            </span>
            <span class="sr-only">
                <i class="fas fa-window-close-o"></i>
            </span>
        </button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" class="img-fluid" alt="Iglesia de la Alameda">
            </div>
        </div>
    </div>
</div>
<div id="modal-02" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">
                <i class="fas fa-times text-white"></i>
            </span>
            <span class="sr-only">
                <i class="fas fa-window-close-o"></i>
            </span>
        </button>
        <div class="modal-content">
            <div class="modal-body  ">
                <img src="" class="img-fluid" alt="Iglesia de la Alameda">
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<?php
include('js-base-uikit.php');
?>
<script src="/js/alameda.js"></script>
<script>
    $(function () {
        $('.img-modal').on("click", function () {
            let img = this.src;
            let modal = $('#modal-02')
            $('.modal-body img').attr('src', img);
            modal.modal();
        });
    })
</script>
</body>
</html>
