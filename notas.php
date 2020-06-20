<?php
/**
 * Created by PhpStorm.
 * User: Gerardo J. Montivero @ Iglesia Alameda
 * Date: 02/06/2020
 * Time: 06:22
 */
$lema = 'Familia, Tu lugar en el Mundo';
$lemaSinEspacios = 'familia-tu-lugar-en-el-mundo';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
$title = 'Serie Familia 2020';
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
    <?php
    include('meta-base.php');
    include('favicon.php');
    include('style-base-uikit.php')
    ?>
    <link rel="icon" href="images/index.png" sizes="32x32"/>
    <link rel="icon" href="images/index192.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="../images/indexapple.png"/>

    <link href="css/styles.css?v=<?php echo $version ?>" rel="stylesheet">


    <style>
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

        .bg-fam {
            background: #fafafa;
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
            /*top: 25%;*/
            position: relative;
        }


    </style>

</head>

<body>


<header>
    <?php include 'nav.php'; ?>

    <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-dark"
             style="background-image: url(series/familia-2020/FAMILIA-2020-TAPA-002.jpg); background-repeat: repeat-y ;">
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
    <section class="a-content-space-medium">
        <div class="container">
            <div class="row ">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-2 mb-lg-2 pl-lg-2 ">
                    <h1 class="mb-3">Familia,<br/> Tu lugar en el Mundo</h1>
                    <p>
                        Descubrir el valor inmenso de la familia. A comprender el hilo que enlaza tu vida en tu familia.
                        Explorar y trabajar el desafío presente. Practicar algunas herramientas para destrabar los
                        enemigos de las relaciones. Encontrar en Dios las fuerzas para un amor más valiente, más
                        generoso, más confiado.

                    </p>
                    <p class="blockquote-footer">
                        "Ámense unos a otros con un afecto genuino y deléitense al honrarse mutuamente." Romanos 12:10
                        (NTV)

                    </p>
                </div>

                <div class="col-lg-6 align-self-center">
                    <img class="img-fluid rounded mb-4 mb-lg-0 overflow-auto align-items-center"
                         src="series/familia-2020/FAMILIA-2020-TAPA-001.jpg" alt="<?php echo $lemaSinEspacios ?>">
                </div>
            </div>
        </div>
    </section>
    <!-- Charlas -->
    <section class="a-content-space-medium bg-fam text-center">
        <div class="container">
            <div class="row">
                <!--                charla 1-->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100">-->
                    <div class="card card-a h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="/series/familia-2020/01-Maravillas-Cotidianas.jpg" class="card-img-top "
                                 data-toggle="modal" data-target="#modal-01"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title">MARAVILLAS COTIDIANAS</h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i><br/>
                                Descubrir el valor inmenso de la familia que hoy está a tu lado. Celebrar el regalo
                                milagroso que sucede cada día al practicar el principio de la honra. Asignar valor a
                                cada persona, y asi practicar el asombro, la admiración ante la maravilla que un padre,
                                un conyugue, un hijo, un hermano son y serán en tu vida.
                                <br/>

                                <i class="fas fa-quote-right ml-5"></i>
                            </div>
                            <br/>

                            <div class="btn-group bottom-0">

                                <a class="mr-4 btn btn-icon" href="series/familia-2020/01-Maravillas-Cotidianas.pdf"
                                   target="_blank">
                                    <i class="far fa-file-pdf mr-1"></i>
                                    <b>Notas</b>
                                </a><br/>
                                <a href="https://youtu.be/7KpEdC1O8eQ" class="btn btn-icon" target="_blank">
                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <i>Video</i>
                                </a>

                            </div>
                        </div>
                    </div>
                    <!--                                        </div>-->
                </div>
                <!--                fin charla 1-->

                <!--                charla 2-->
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100">-->
                    <div class="card card-a h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="/series/familia-2020/02-tan-distintos-tan-valiosos.jpg" class="card-img-top "
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title">¡TAN DISTINTOS, TAN VALIOSOS!</h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i>
                                <br/>
                                Una ayuda del cielo para tu familia.
                                <br/>
                                El principio de la aceptación
                                <br/>
                                "Por tanto, acéptense mutuamente, así como Cristo los aceptó a ustedes para gloria de
                                Dios."<br/>
                                Romanos 15:7 (NVI)
                                <br/>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>

                            <br/>

                            <div class="btn-group bottom-0">
                                <a class="mr-4 btn btn-icon"
                                   href="series/familia-2020/02-tan-distintos-tan-valiosos.pdf" target="_blank">
                                    <i class="far fa-file-pdf mr-1"></i>
                                    <b>Notas</b>
                                </a>
                                <br/>
                                <a href="https://youtu.be/GUKO6K3Gqf4" class="btn btn-icon" target="_blank">

                                    <i class="fab fa-youtube fa-fw mr-1"></i>
                                    <i>Video</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--                                        </div>-->
                </div>
                <!--                fin charla 2-->

                <!--                charla 3-->
                <?php if ($ahora > date('2020-06-21 06:00')) { ?>
                <div class="col-md-4 mb-2 mx-auto   ">
                    <!--                                        <div class="card h-100">-->
                    <div class="card card-a h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="/series/familia-2020/00-Familia.jpg" class="card-img-top "
                                 data-toggle="modal" data-target="#modal-02"
                                 alt="<?php echo $lemaSinEspacios ?>">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light u-box-shadow-lg">
                            <h5 class="card-title">EL REGALO MÁS GRANDE</h5>
                            <div class="middle-0">
                                <i class="fas fa-quote-left mr-5"></i>
                                <br/>
                                Una ayuda del cielo para tu familia.
                                <br/>
                                El principio de la bendición
                                <br/>
                                "Padre mío ¡Bendíceme también a mí!"
                                Génesis 27:38 (NVI)
                                <br/>
                                <i class="fas fa-quote-right ml-5"></i>
                            </div>

                            <br/>

                            <div class="btn-group bottom-0">
                                <a class="mr-4 btn btn-icon"
                                   href="series/familia-2020/03-el-reagalo-mas-grande.pdf" target="_blank">
                                    <i class="far fa-file-pdf mr-1"></i>
                                    <b>Notas</b>
                                </a>
                                <br/>
                                <?php
                                if ($notas_link !== null) {
                                    ?>
                                    <a href="<?php echo $notas_link ?>" class="btn btn-icon" target="_blank">
                                        <i class="fab fa-youtube fa-fw mr-1"></i>
                                        <i>Video</i>
                                    </a>
                                <?php } ?>
                                <!--                                <button class="btn btn-secondary btn-icon">-->
                                <!--                                    <span class="mr-1"><i class="far fa-user"></i></span>-->
                                <!--                                    Follow-->
                                <!--                                </button>-->
                                <!--                                <button class="btn btn-primary">-->
                                <!--                                    <i class="far fa-envelope"></i>-->
                                <!--                                </button>-->
                            </div>
                        </div>
                    </div>
                    <!--                                        </div>-->
                </div>
                <?php } ?>
                <!--                fin charla 3-->

            </div>

        </div>
    </section>

</main>
<footer class="footer">
    <div class="card-body">
        <h4 class="text-darker card-text text-center">Ver series anteriores </h4>
        <div class="col-sm-2 mx-auto text-center">
            <a href="notas-oraciones-audaces.php" class="btn btn-xl btn-primary"> Oraciones Audaces</a>
        </div>
    </div>

</footer>

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
                <img src="series/familia-2020/01-Maravillas-Cotidianas.jpg" class="img-fluid">
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
            <div class="modal-body">
                <img src="series/familia-2020/02-tan-distintos-tan-valiosos.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<?php
include('js-base-uikit.php');
?>

<script src="js/alameda.js"></script>

</body>

</html>

