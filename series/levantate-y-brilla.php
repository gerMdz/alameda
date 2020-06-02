
<?php

$lema = 'Levantate y Brilla';
$lemaSinEspacios = 'Levantate-y-Brilla';

$meta =  '
    <meta name="description" content="Iglesia Alameda,' . $lema .'">
    <meta name="author" content="Iglesia Alameda Mendoza">
    <meta property="og:title" content="Iglesia Alameda Serie ' . $lema .'" />
    <meta property="og:type" content="website" />

    <meta property="og:url" content="https://iglesialameda.com/series/levantate-y-brilla.php" />
    <meta property="og:image" content="https://iglesialameda.com/imagenes/og/og-base.png">

    <title>' . $lema .' - Iglesia Alameda </title>
    <link href="../css/swiper.min.css" rel="stylesheet">
    <link href="css/series.css?v=1" rel="stylesheet">
    
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

    <section class="section bg-levantate-brilla text-white p-5 mt-2" id="invitacion">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="banner-left col-lg-6">
                    <img class="d-flex mx-auto img-fluid" src="../imagenes/series/levantate-y-brilla/LEVANTATE-Y-BRILLA.LOGO.png" alt="<?php echo $lemaSinEspacios; ?>">
                </div>
                <div class="col-lg-6">
                    <div class=" text-leftr">
                        <!--							<h6 class="text-uppercase"> </h6>-->
                        <h1 class="text-fine">Domingos <br/>
                            <!--                                <span class="text-realce"> 7 de Octubre</span><br>-->
                            11 hs. y 19 hs. <br/>
                            <span class="text-white"><b> Auditorio Alameda </b> </span></h1>
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
                        <h1 class="pt-2 big_noodle_titling fine4 text-center text-5" >
                            Levantate y Brilla
                        </h1>
                    </div>
                    <div class="col-lg-8">
                        <div class="story-content">
                            <i class="fab fa-mixcloud fa-3x rounded-0 img-responsive"></i>
                            <p class="mt-0 ml-5 pl-5 text-invitacion ">
                                ¿Soñas con tener una vida más satisfactoria?<br/>
                                ¿Deseas tener un mejor trabajo, un matrimonio sólido, un hogar feliz?<br/>
                                ¿Deseas tener mejores relaciones con tu familia y amigos?<br/>
                                ¿Arde en tu corazón una llama por alcanzar más y dejar un legado para futuras generaciones?
                            </p>
                            <i class="fas fa-clone fa-3x rounded-0 img-responsive"></i>
                            <p class="mt-0 ml-5 pl-5 base-rojo text-invitacion">
                                Si sos como algunas personas, posiblemente pusiste metas y sueños en una lista llamada
                                "Cosas para hacer mañana". <br/>
                                Te pasa que no poder ir por lo más importante de tu vida,
                                porque tu presente está cargado por las demandas de lo rutinario, de las malas noticias
                                y las prioridades de otras personas. <br/>
                                En vez de vivir lo mejor de tu vida, estás vivinedo apenas una mala copia de lo que es
                                todo tu potencial.
                            </p>

                            <i class="fas fa-exclamation fa-3x rounded-0 img-responsive"></i>
                            <p class="mt-0 ml-5 pl-5 base-rojo text-invitacion ">
                                Para vos es esta experiencia: <i>"Levantate y Brilla"</i>
                            </p>
                            <i class="fas fa-hourglass-half fa-3x rounded-0 img-responsive"></i>
                            <p class="mt-0 ml-5 pl-5 base-rojo text-invitacion ">
                                ¡No podés esperar que el mundo mejore para vivir mejor tu vida!<br/>
                                Lamentablemente <i> "algún día"</i> nunca llega. <br/>
                                Hoy es el único día que tenemos. No podemos cambiar el pasado, pero podermos cambiar el presente
                                e inaugurar otro futuro.
                            </p>
                            <i class="fas fa-road fa-3x rounded-0 img-responsive"></i>
                            <p class="mt-0 ml-5 pl-5 base-rojo text-invitacion ">
                                Durante <b>"Levantate y Brilla"</b> aprenderás pasos simples e inspiradores que te ayudarán
                                a mejorar tu vida y experimentar la victoria, la alegría y la satisfacción todos los días.
                            </p>




                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-fluid d-flex mx-auto mt-5" src="../imagenes/series/levantate-y-brilla/LEVANTATE-Y-BRILLA-9.png" alt="<?php echo $lemaSinEspacios ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid d-flex mx-auto mt-5" src="../imagenes/series/levantate-y-brilla/PROMO-LEVANTATE-Y-BRILLA-10.jpg" alt="<?php echo $lemaSinEspacios ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid d-flex mx-auto mt-5" src="../imagenes/series/levantate-y-brilla/PROMO-LEVANTATE-Y-BRILLA-11.jpg" alt="<?php echo $lemaSinEspacios ?>">
                                </div>
                            </div>
                        </div>
<!--                        <img class="img-fluid d-flex mx-auto mt-5" src="../imagenes/series/levantate-y-brilla/LEVANTATE-Y-BRILLA.LOGO.png"-->
<!--                             alt="--><?php //echo $lemaSinEspacios ?><!--">-->
                        <p class="mt-0 ml-5 pl-5 base-rojo ">
                            <br/>
                            Toma una gran desición: <b><i>"¡Levantate y Brilla!"</i></b>
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
                            <li class="nav-item">
                                <a class="nav-link text-realce-azul" rel="tooltip" title="Teléfono" data-placement="bottom"
                                   href="tel: 2614251182" data-original-title="Teléfono">
                                    <i class="fas fa-phone fa-2x"></i>
                                    261 425 1182
                                </a>
                            </li>
                            <li class="nav-item">

                                <a class="nav-link text-realce-azul" rel="tooltip" title="Whatsapp" data-placement="bottom"
                                   href="https://api.whatsapp.com/send?phone=5492615178081& " data-original-title="whatsapp">
                                    <i class="fab fa-whatsapp fa-2x "></i>
                                    54 9 261 5178081
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-realce-azul" rel="tooltip" title="mail" data-placement="bottom"
                                   href="mailto:contacto@iglesiaalameda.com " data-original-title="whatsapp">
                                    <i class="fas fa-envelope fa-2x "></i>
                                    contacto@iglesiaalameda.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="features1 bg-white p-5" id="features1-8">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 text-element text-center">
                    <h1 class="mbr-section-title mbr-fonts-style align-center display-5 big_noodle_titling">Levántate y Brilla</h1>
                </div>

<!--                <div class="col-md-10 col-lg-6 image-element ml-0">-->
<!--                    <div class="img-fluid" >-->
<!--                        <img src="../imagenes/series/levantate-y-brilla/PROMO-LEVANTATE-Y-BRILLA-10.jpg" alt="" title="">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-md-6 col-lg-4 text-element">



                    <p class="mbr-text mbr-fonts-style mbr-lighter align-center display-7">
                        Cuenta con un material de estudio y desarrollo personal que podrás retirar en cada celebración. <br/>
                        Herramientas para descubrir tus sueños, tus metas, el llamado de tu vida, y luego compartirlo en un grupo de amigos
                        </p>

                </div>
                <div class="col-md-6 col-lg-4 text-element">
                    <div class="img-fluid image-element pb-1 pull-left">
                        <img src="../imagenes/series/levantate-y-brilla/PROMO-LEVANTATE-Y-BRILLA-11.jpg">
                    </div>
                    <div class="img-fluid image-element pt-1 pull-right">
                        <img src="../imagenes/series/levantate-y-brilla/phone.png">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-element">



                    <p class="mbr-text mbr-fonts-style mbr-lighter align-center display-7">
                        También te enviaremos, todos los días, palabras de inspiración para tu vida a tu celular.
                        Si querés recibirlos por WhatsApp, simplemente suscribite con tu nombre y apellido al

                        <a class="nav-link text-realce-azul" rel="tooltip" title="Whatsapp" data-placement="bottom"
                           href="https://api.whatsapp.com/send?phone=5492615178081& " data-original-title="whatsapp">
                            <i class="fab fa-whatsapp fa-2x "></i>
                            261 5178081
                        </a>
                        </p>

                </div>
            </div>
        </div>
    </section>

    <section class="section bg-levantate-brilla text-white p-3" id="section-azul">
            <div class="container">
                <div class="row align-items-center justify-content-center  ">
                        <div class="col-lg-2 col-md-2 text-center pull-left my-auto mb-auto">
                            <img src="../imagenes/series/levantate-y-brilla/semana_inst.png" class="img-fluid">
                        </div>
                        <div class="post-preview col-lg-8 col-md-8 pull-right  border-top">
                            <div class="ribbon">
                                <span> Videos</span>

                            </div>
                            <h4 class="post-subtitle">
                                <a href="https://www.instagram.com/tv/B3Lo-SyJdvF/?utm_source=ig_web_copy_link"
                                   target="_blank" class="text-white-75" >
                                    <i class="fab fa-instagram text-white-75"></i>
                                    instagram.com/<div class="d-lg-none"></div>iglesialameda/
                                </a><br/>
                                <a href="https://youtu.be/MkdGqGGyyqQ"
                                   target="_blank" class="text-white-75" >
                                    <i class="fab fa-youtube text-white-75"></i>
                                    youtube.com/user/IglesiaAlameda<div class="d-lg-none"></div>
                                </a>
                                <br/>
                                <small>
                                    Video para usar con hoja de actividades personales de la semana 1
                                </small>
                            </h4>
                            <h4 class="post-subtitle">
                                <a href="https://www.instagram.com/tv/B3mr7uwJOJ_/?utm_source=ig_web_copy_link"
                                   target="_blank" class="text-white-75" >
                                    <i class="fab fa-instagram text-white-75"></i>
                                    instagram.com/<div class="d-lg-none"></div>iglesialameda/
                                </a><br/>
                                <a href="https://youtu.be/K_FCXelHYcs"
                                   target="_blank" class="text-white-75" >
                                    <i class="fab fa-youtube text-white-75"></i>
                                    youtube.com/user/IglesiaAlameda<div class="d-lg-none"></div>
                                </a>
                                <br/>
                                <small>
                                    Video para usar con hoja de actividades personales de la semana 2
                                </small>


                            </h4>
                            <h4 class="post-subtitle">
                                <a href="https://www.instagram.com/tv/B35yfZcp7uf/?utm_source=ig_web_options_share_sheet"
                                   target="_blank" class="text-white-75" >
                                    <i class="fab fa-instagram text-white-75"></i>
                                    instagram.com/<div class="d-lg-none"></div>iglesialameda/
                                </a><br/>
                                <a href="https://youtu.be/udpoe_uKEFg"
                                   target="_blank" class="text-white-75" >
                                    <i class="fab fa-youtube text-white-75"></i>
                                    youtube.com/user/IglesiaAlameda<div class="d-lg-none"></div>
                                </a>
                                <br/>
                                <small>
                                    Video para usar con hoja de actividades personales de la semana 3
                                </small>


                            </h4>
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
<!--    <section class="section bg-gradient-white m-3 mdl-color-text--black " id="section-rojo">-->
<!---->
<!--        <div class="container ">-->
<!--            <div class="row fullscreen align-items-center justify-content-center ">-->
<!--                <div class="row align-items-center bg-white pt-5">-->
<!--                    <div class="col-sm-3 center">-->
<!--                        <img class="img-fluid d-flex m-1 shadow-blue mx-auto" src="../imagenes/logoYoutubeBrown.png" alt="--><?php //echo $lemaSinEspacios; ?><!--">-->
<!--                    </div>-->
<!--                    <div class="col-sm-9">-->
<!--                        <h3 class="bg-white p-2 text-center">-->
<!--                            <i>-->
<!--                                Estas son las conversaciones de nuestra serie-->
<!--                                <br/>-->
<!--                                <strong class="greatlakes" style="font-size: 1.5em ">-->
<!--                                    <a href="https://youtube.com/user/IglesiaAlameda" target="_blank"-->
<!--                                       class="">-->
<!--                                        <i>--><?php //echo $lema; ?><!--</i>-->
<!--                                    </a>-->
<!--                                </strong>-->
<!---->
<!---->
<!--                            </i>-->
<!--                        </h3>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-4 mt-1  px-5 base-rojo mx-auto">-->
<!--                        <div class="card">-->
<!--<!--                            <div class="card-content">-->
<!--<!--                                <h5 class="card-title text-left px-2">-->
<!--<!--                                    <small><b> Idea Venenosa N° 1:<br/>-->
<!--<!--                                            Dios es una fantasía. Es solo el amigo imaginario de gente ingenua.-->
<!--<!--                                            El cristianismo no es algo real, no es racdional, es solo creencias.</b>-->
<!--<!--                                        <br/>-->
<!--<!--                                        <i> ¿Estás seguro?</i>-->
<!--<!--                                    </small>-->
<!--<!---->
<!--<!--                                </h5>-->
<!--<!---->
<!--<!--                            </div>-->
<!--                            <!-- card content-->-->
<!--                            <div class="card-image">-->
<!--                                <div class="embed-responsive embed-responsive-16by9">-->
<!---->
<!--                                    <iframe class="embed-responsive-item" src="https://instagram.faep3-1.fna.fbcdn.net/v/t50.16885-16/10000000_2448294548829000_3485976139738427144_n.mp4?_nc_ht=instagram.faep3-1.fna.fbcdn.net&_nc_cat=100&oe=5D994E80&oh=503914e215ee70a9e243b482e57d197d" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!---->
<!--                                </div>-->
<!---->
<!--                            </div><!-- card image-->-->
<!---->
<!---->
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                    <div class="col-sm-12 mb-2 story-content">-->
<!---->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </section>-->

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
