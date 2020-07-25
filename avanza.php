<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 18/05/2020
 * Time: 06:56
 */
$lema = 'Taller de Membresía ';
$lemaSinEspacios = 'Taller-Membresía-Iglesia-Alameda';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'Taller de Membresía';
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
    
    <link href="css/styles.css?v=<?php echo $version ?>" rel="stylesheet">




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

</head>

<body>


<header>
    <?php include 'nav.php'; ?>

    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-dark" style="background-image: url(images/aldia/contacto.png); background-repeat: repeat-y ;">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">

                                <div class="site-heading p-5">
                                    <img src="images/LOGO_ALAMEDA_CON_TEXTO_B.png" style="max-height: 150px" class="img-fluid ">

                                </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Promo Content -->
    </section>
</header>
<main role="main" class="bg-white">


    <!-- Contact Form -->
    <section class="u-content-space">
        <div class="container">
            <header class="text-center w-md-50 mx-auto mb-8">
                <div class="tab-pane fade active show" id="blockquotes-center-1" role="tabpanel" aria-labelledby="blockquotes-center-tab-1">
                    <!-- Centered -->
                    <blockquote class="blockquote-v1 text-center">
                        <h2 class="h1">
                            ¿Te gustaría formar parte de nuestra familia de fe?

                        </h2>
                        <p class="h5">No te pierdas el próximo taller de membresía.</p>
                        <footer class="blockquote-footer"> sábado 23/5, de 19 a 21hs<br/>

                            </footer>
                    </blockquote>
                    <!-- End Centered -->
                </div>

            </header>



                <div class="text-center">
                    Más detalles e inscripción<br/>

                    <a class="btn btn-blue  js-scroll-trigger mx-auto btn--pill" href="https://forms.gle/gkJjReojfHy2QG7e8" target="_blank">
                        <i class="far fa-list-alt text-white"></i> Aquí
                    </a>
                </div>

        </div>
    </section>
    <!-- End Contact Form -->
</main>




    <section class="vacio mb-3">

    </section>



    <?php
    include "footer.php";
    ?>

    <!-- Bootstrap core JavaScript -->
    <?php
    include ('js-base-uikit.php');
    ?>
    <script src="js/alameda.js"> </script>

</body>

</html>

