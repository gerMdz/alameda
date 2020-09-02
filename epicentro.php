<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 18/05/2020
 * Time: 06:56
 */
$lema = 'Epicentro 2020';
$lemaSinEspacios = 'Conferencia-de-Pastores';
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
<html lang="en">

<head>
    <?php
    include('meta-base.php');
    include('style-base-uikit.php')
    ?>
    <title></title>
    <link href="css/styles.css?v=<?php echo $version ?>" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
        body {
            background-color: white !important
        }

        ;
        }
        strong {
            font-weight: 400 !important
        }

        .card-text {
            font-size: 1.1em !important;
            font-weight: 600 !important;
        }

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
</head>

<body class="bg-white">


<header class="bg-white mb-5">
    <?php include 'nav.php'; ?>
</header>


<!-- Contact Form -->
<section class="a-content-space-medium pt-5 mt-5 mb-0 pb-5 bg-white">
    <div class="container">
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="display-sm-4 display-lg-3 h2"><b class="text-alameda aire-2">
                                Bienvenidos a Epicentro 2020</b>
                        </h1>
                        <hr style="width: 25%"/>
                        <p class="text-14-300">
                            Desde hace 11 años realizamos esta conferencia especial para pastores y líderes con el
                            propósito de compartir los principios y las prácticas que han llevado al crecimiento a la
                            Alameda.
                        </p>
                        <p class="text-14-300">
                            Este año debido a las limitaciones conocidas, ofreceremos una versión condensada, en dos
                            días, de manera online y de manera gratuita para todos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="a-content-space-medium text-center h-100 bg-gris-medio my-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="container text-center">
                    <div class="text-center">
                        <h2>
                            Para participar sigue estos tres pasos:
                        </h2>
                        <br/>
                        <h4 class="text-left">
                            <i class="fas fa-check mr-2"></i> Registrate en este formulario
                        </h4>
                        <blockquote class="mb-3 blockquote blockquote-alameda-primary ml-5 text-left">
                            <h6>
                                <a href="http://bit.ly/EPICENTRO2020" target="_blank">
                                    <i class="far fa-list-alt text-alameda mx-2"></i> http://bit.ly/EPICENTRO2020
                                </a>
                            </h6>
                        </blockquote>

                        <h4 class="text-left">
                            <i class="fas fa-check mr-2"></i> Conectate a nuestra casa virtual durante el evento
                        </h4>
                        <blockquote class="mb-3 blockquote blockquote-alameda-primary ml-5 text-left">
                            <h6>
                                Visita <a href="https://online.iglesiaalameda.com"
                                          target="_blank">online.iglesiaalameda.com</a>
                                desde tu PC o Smartphone y podrás ver las conferencias, hacer preguntas, chatear con
                                pastores, y
                                recibir los enlaces para la descarga de materiales.
                            </h6>
                        </blockquote>

                        <h4 class="text-left">
                            <i class="fas fa-check mr-2"></i>
                            Y preparate con una cuenta de Zoom
                        </h4>
                        <blockquote class="mb-3 blockquote blockquote-alameda-primary ml-5 text-left">
                            <h6>
                                Con ella podrás participar de momentos interactivos con los enlaces que ofreceremos
                                durante
                                el evento.
                            </h6>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Form -->

<section class="a-content-space-medium text-center h-100 bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="container text-center">
                    <div class="text-center">
                        <h2>
                            Programa del Evento
                        </h2>
                        <br/>
                        <h4 class="text-center">
                            (Hora de Argentina -3GM) <br/>
                            Hora de Inicio en otros países:
                            <br/> 11 a.m. Centroamérica /<br/>
                            12 a.m. Ciudad de México- Perú –Colombia /<br/>
                            1 p.m. Chile – Paraguay – Venezuela.
                        </h4>
                        <img src="/images/programa-epicentro-2020.png" class="img-fluid" alt="Iglesia de La Alameda">
                    </div>
                </div>
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
<script src="js/alameda.js"></script>

</body>

</html>

