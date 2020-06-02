<?php

$lema = 'Ideas Venenosas';
$lemaSinEspacios = 'IdeasVenenosas';

$meta =  '
    <meta name="description" content="Iglesia Alameda,' . $lema .'">
    <meta name="author" content="Iglesia Alameda Mendoza">
    <meta property="og:title" content="Iglesia Alameda Serie ' . $lema .'" />
    <meta property="og:type" content="website" />

    <meta property="og:url" content="https://iglesialameda.com/series/ideas-venenosas.php" />
    <meta property="og:image" content="https://iglesialameda.com/imagenes/og/og-base.png">

    <title>' . $lema .' - Iglesia Alameda </title>
    <link href="../css/swiper.min.css" rel="stylesheet">
    <link href="css/series.css" rel="stylesheet">
    <style>
     .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
    .swiper-button-prev, .swiper-container-rtl .swiper-button-nex{
    fill: #6cbb23 !important;
    }
        </style>
        


';
include '../internos/head_series.php';

?>

<body>
<div class="container">
    <!-- Start Header Area -->

    <?php include '../internos/nav.php'; ?>

    <section class="section bg-white p-5 mt-2" id="invitacion">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="banner-left col-lg-6">
                    <img class="d-flex mx-auto img-fluid" src="../imagenes/series/ideasVenenosas/Ideas-venenosas_01.png" alt="
                    <?php
                    echo $lemaSinEspacios
                    ?>
                    ">
                </div>
                <div class="col-lg-6">
                    <div class=" text-leftr">
                        <!--							<h6 class="text-uppercase"> </h6>-->
                        <h1 class="text-fine">Domingos <br/>
                            <!--                                <span class="text-realce"> 7 de Octubre</span><br>-->
                            11 hs. y 19 hs. <br/>
                            <span class="text-realce-viaje"> Auditorio Alameda </span></h1>
                        <a href="#" class="btn-generico viaje circular ">
                            San Martin 2020 de la Ciudad de Mendoza</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class="section bg-viaje_claro p-5 mdl-color-text--black" id="section-viaje">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center ">
                <div class="row align-items-center bg-white ">
                    <div class="col-lg-12">
                    <h1 class="pt-2 tuesnight fine4 text-center text-5" >
                        Ideas Venenosas
                    </h1>
                    </div>
                    <div class="col-lg-8">
                        <div class="story-content">


                            <i class="fas fa-users fa-3x rounded-0 img-responsive"></i>

                            <p class="mt-0 ml-5 pl-5 text-invitacion ">
                                ¿Qué si toda nuesta población estuviera consumiendo silenciosamente
                                agua envenenada con químicos?
                            </p>
                            <i class="fas fa-skull-crossbones fa-3x rounded-0 img-responsive"></i>
                            <p class="mt-0 ml-5 pl-5 base-rojo text-invitacion">
                                 O más peligroso: ¿Qué si toda nuestra generación estuviera
                                consumiendo inadvertidamente cada día ideas motíferas?

                            </p>

                            <i class="fas fa-file-medical fa-3x rounded-0 img-responsive"></i>

                            <p class="mt-0 ml-5 pl-5 base-rojo text-invitacion ">

                                Cada domingo revelaremos cada una de ellas y sobre todo nos apropiaremos del antídoto
                                correcto para una vida saludable y libre
                            </p>




                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid d-flex mx-auto mt-5" src="../imagenes/series/ideasVenenosas/BOTELLA-SOLA.up.png" alt="
                        <?php
                        echo $lemaSinEspacios
                        ?>
">
                        <p class="mt-0 ml-5 pl-5 base-rojo ">
                            <br/>
                            ¡Estás Invitado!
                            <br/>

                        </p>


                        <ul class="navbar-nav nav-flex-icons">

                            <li class="nav-item">
                                <a class="nav-link text-realce-azul" rel="tooltip" title="Seguinos en la fanpage" data-placement="bottom" href="https://www.facebook.com/IglesiaAlameda" target="_blank" data-original-title="Seguinos en la fanpage">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                    facebook.com/IglesiaAlameda/
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-realce-azul" rel="tooltip" title="Seguinos en Instagram" data-placement="bottom" href="https://www.instagram.com/iglesialameda" target="_blank" data-original-title="Seguinos en Instagram">
                                    <i class="fab fa-instagram fa-2x"></i>
                                    instagram.com/iglesialameda/
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

<!--    <section class="section bg-cromo p-5 mdl-color-text--black" id="section-azul">-->
<!--        <div class="container">-->
<!--            <div class="row fullscreen align-items-center justify-content-center ">-->
<!--                <div class="row align-items-center bg-white ">-->
<!--                    <div class="col-lg-5">-->
<!--                        <!--                        <img class="img-fluid d-flex m-1 shadow-blue" src="../imagenes/series/bondad/bondad_03.png" alt="Bondad">-->
<!--                        <img class="img-fluid d-flex m-1 " src="../imagenes/series/bondad/LIBRO_BONDAD.png" alt="Bondad">-->
<!--                    </div>-->
<!--                    <div class="col-lg-7">-->
<!--                        <div class="story-content">-->
<!---->
<!--                            <br/>-->
<!---->
<!--                            <h4 class="quote mt-0 ml-1 pl-1 base-rojo warnock">-->
<!---->
<!--                                <i>Preparate para vivir esta serie con todo:</i><br/>-->
<!--                                <i class="far fa-check-circle"></i>-->
<!--                                Agendá y no te pierdas el Domingo de Lanzamiento-->
<!--                                <br/>-->
<!--                                <i class="far fa-check-circle"></i> Obtené ejemplar del libro: "Respirando Bondad Cada día"<br/>-->
<!--                                <i class="far fa-check-circle"></i> Asegurate un grupo pequeño para participar de un estudio exclusivo.-->
<!---->
<!---->
<!---->
<!--                                <!--                                    <a class=" text-realce-azul" rel="tooltip" title="Seguinos en Instagram" data-placement="bottom" href="https://www.instagram.com/iglesialameda" target="_blank" data-original-title="Seguinos en Instagram">-->
<!--                                <!--                                        <i class="fab fa-instagram "></i>-->
<!--                                <!--                                        Instragram /iglesialameda/-->
<!--                                <!--                                    </a>-->
<!--                                <!--                                    </b>  y a través del hashtag <b>#JesusEnLaCiudad</b><br/>-->
<!--                                <!--                                ¡Cada día un desafío diferente!<br/>-->
<!---->
<!---->
<!---->
<!--                            </h4>-->
<!---->
<!--                            <p class="mt-0 ml-5 pl-5 base-rojo ">-->
<!---->
<!--                                Hagamoslo juntos:  <i>¡respirando bondad cada día!</i>-->
<!---->
<!--                            </p>-->
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!--        <section class="section bg-azul_claro  mdl-color-text--black page-section base-rojo section-azul " id="section-book">-->
    <!--            <div class="container ">-->
    <!--                <div class="row fullscreen align-items-center justify-content-center ">-->
    <!--                    <div class="row align-items-center bg-white ">-->
    <!--                        -->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->

    <!-- Sección Youtube -->
    <section class="section bg-gradient-white m-3 mdl-color-text--black " id="section-rojo">

        <div class="container ">
            <div class="row fullscreen align-items-center justify-content-center ">
                <div class="row align-items-center bg-white pt-5">
                    <div class="col-sm-3 center">
                        <img class="img-fluid d-flex m-1 shadow-blue mx-auto" src="../imagenes/logoYoutubeBrown.png" alt="<?php echo $lemaSinEspacios; ?>">
                    </div>
                    <div class="col-sm-9">
                        <h3 class="bg-white p-2 text-center">
                            <i>
                                Estas son las conversaciones de nuestra serie
                                <br/>
                                <strong class="tuesnight" style="font-size: 1.5em ">
                                    <a href="https://youtube.com/user/IglesiaAlameda" target="_blank"
                                       class="">
                                        <i><?php echo $lema; ?></i>
                                    </a>
                                </strong>


                            </i>
                        </h3>
                    </div>

                    <div class="col-sm-4 mt-1  px-5 base-rojo mx-auto">
                        <div class="card">
                        <div class="card-content">
                            <h5 class="card-title text-left px-2">
                                <small><b> Idea Venenosa N° 1:<br/>
                                    Dios es una fantasía. Es solo el amigo imaginario de gente ingenua.
                                    El cristianismo no es algo real, no es racdional, es solo creencias.</b>
                                <br/>
                                    <i> ¿Estás seguro?</i>
                                </small>

                            </h5>

                        </div><!-- card content -->
                        <div class="card-image">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xBskZ2vMtoM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                        </div><!-- card image -->




                    </div>
                    </div>

                    <div class="col-sm-4 mt-1  px-5 base-rojo mx-auto">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title text-left px-2">
                                    <small><b> Idea Venenosa N° 2:<br/>
                                            Deja que la emociones y sentimientos gobiernen tu vida. Esto es lo mejor,
                                            te conducirá por el camino correcto, ...</b>
                                        <br/>
                                        <i> ¿Deberías seguir a tus sentimientos?</i>
                                    </small>

                                </h5>

                            </div><!-- card content -->
                            <div class="card-image">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NevHZ-sLdPw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                </div>

                            </div><!-- card image -->




                        </div>
                    </div>

                    <div class="col-sm-4 mt-1  px-5 base-rojo mx-auto">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title text-left px-2">
                                    <small><b> Idea Venenosa N° 3:<br/>
                                            Nadie tiene la verdad. Cada uno lo ve a su manera. Todas las religions so iguales. Las personas que dicen ...</b>
                                        <br/>
                                        <i> ¿Será verdad?</i>
                                    </small>

                                </h5>

                            </div><!-- card content -->
                            <div class="card-image">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ftrQ8p_b8GA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                                </div>

                            </div><!-- card image -->




                        </div>
                    </div>

                    <div class="col-sm-4 mt-1  px-5 base-rojo mx-auto">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title text-left px-2">
                                    <small><b> Idea Venenosa N° 4:<br/>
                                            Yo soy dueño de mi mismo, soy mi propia creación, puedo definir mi destino.
                                            ¡Soy libre! ¡Soy Dios!</b>
                                        <br/>
                                        <i> ¿Esto es Posible?</i>
                                    </small>
                                </h5>

                            </div><!-- card content -->
                            <div class="card-image">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0YsMjWfL27w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        

                                </div>

                            </div><!-- card image -->




                        </div>
                    </div>

                    <div class="col-sm-12 mb-2 story-content">


                    </div>
                </div>


            </div>

        </div>

    </section>


    <section class="section bg-transparent p-5 mdl-color-text--black" id="imagenes">
        <div class="container-fluid p-0 ">
            <a href="imagenes-ideas-venenosas.php"><i class="fas fa-arrows-alt"></i> <i>Ver a pantalla completa</i></a>
            <div class="swiper-container ">
                <div class="swiper-wrapper  ">
                    <div class="swiper-slide" style="background-image:url(../imagenes/series/ideasVenenosas/ideas-venenosas.antidoto1.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(../imagenes/series/ideasVenenosas/ideas-venenosas.antidoto2.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(../imagenes/series/ideasVenenosas/ideas-venenosas.antidoto3.jpg)"></div>
                </div>

                <!-- Add Pagination-->
                <div class="swiper-pagination"></div>

                <!-- Add Arrows-->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

    </section>








    <hr/>
    <?php
    include "../internos/footer.php";
    ?>
    <script type="text/javascript" src="../js/swiper.min.js"></script>
</div>

<?php
include "../internos/pieJs.php";
?>

<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        autoplay: {
            delay: 7500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script>

    $(function () {



        $('#contenido').on('inview', function(event, isInView) {
            if (isInView) {
                $('.counter').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');

                    $({ countNum: $this.text()}).animate({
                            countNum: countTo
                        },

                        {

                            duration: 1000,
                            easing:'linear',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });



                });
            } else {
                // element has gone out of viewport
            }
        });
    })


</script>



</body>
</html>
