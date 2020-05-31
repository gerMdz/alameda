
<?php

$lema = 'Una Familia Dirigida por la Fe';
$lemaSinEspacios = 'FamiliaDirigidaFe';

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
                    <img class="d-flex mx-auto img-fluid" src="../imagenes/series/familia-fe/familia-fe-ws.jpeg" alt="<?php echo $lemaSinEspacios; ?>">
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
                        <h1 class="pt-2 greatlakes fine4 text-center text-5" >
                            Una Familia Dirigida por la Fe
                        </h1>
                    </div>
                    <div class="col-lg-8">
                        <div class="story-content">


                            <i class="fas fa-users fa-3x rounded-0 img-responsive"></i>

                            <p class="mt-0 ml-5 pl-5 text-invitacion ">
                                Dios tiene una familia para vos. Puede ser de cinco, de tres o de solo dos personas,
                                pero siempres será un lugar especial donde Dios quiere hacer sus milagros.



                            </p>
                            <i class="fas fa-road fa-3x rounded-0 img-responsive"></i>
                            <p class="mt-0 ml-5 pl-5 base-rojo text-invitacion">
                                Pero todo depende de alinear tu familia presente o futura con Sus planes.
                                ¿Qué es lo que mueve a tu familia? ¿Quién o qué la dirige?


                            </p>

                            <i class="fas fa-heartbeat fa-3x rounded-0 img-responsive"></i>

                            <p class="mt-0 ml-5 pl-5 base-rojo text-invitacion ">

                                Una familia dirigida por la fe es una familia que decide a quien sirve, para que existe y cual es
                                el poder que lleva dentro.
                            </p>




                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid d-flex mx-auto mt-5" src="../imagenes/series/familia-fe/familia-fe-front01.png" alt="
                        <?php
                        echo $lemaSinEspacios
                        ?>
">
                        <p class="mt-0 ml-5 pl-5 base-rojo ">
                            <br/>
                            ¡Descubrilo!
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
                                <strong class="greatlakes" style="font-size: 1.5em ">
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
<!--                            <div class="card-content">-->
<!--                                <h5 class="card-title text-left px-2">-->
<!--                                    <small><b> Idea Venenosa N° 1:<br/>-->
<!--                                            Dios es una fantasía. Es solo el amigo imaginario de gente ingenua.-->
<!--                                            El cristianismo no es algo real, no es racdional, es solo creencias.</b>-->
<!--                                        <br/>-->
<!--                                        <i> ¿Estás seguro?</i>-->
<!--                                    </small>-->
<!---->
<!--                                </h5>-->
<!---->
<!--                            </div>-->
                            <!-- card content -->
                            <div class="card-image">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EuZZExw77Zg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                </div>

                            </div><!-- card image -->




                        </div>
                    </div>
                    <div class="col-sm-4 mt-1  px-5 base-rojo mx-auto">
                        <div class="card">
<!--                            <div class="card-content">-->
<!--                                <h5 class="card-title text-left px-2">-->
<!--                                    <small><b> Idea Venenosa N° 1:<br/>-->
<!--                                            Dios es una fantasía. Es solo el amigo imaginario de gente ingenua.-->
<!--                                            El cristianismo no es algo real, no es racdional, es solo creencias.</b>-->
<!--                                        <br/>-->
<!--                                        <i> ¿Estás seguro?</i>-->
<!--                                    </small>-->
<!---->
<!--                                </h5>-->
<!---->
<!--                            </div>-->
                            <!-- card content -->
                            <div class="card-image">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EUduPNmcy4M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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

    <section class="relative bg-verde_claro_less" id="miCompromiso">
        <!--			<div class="prefondo prefondo-total"></div>-->

        <div class="container">
            <div class="row">
                <div class="panel panel-title bg-white col-sm-12">
                    <h1 class="text-uppercase text-center text-realce-verde ">
                        Una <b class="text-shadow">Familia </b> dirigida por la <b class="text-shadow">Fe</b>
                    </h1>
                </div>
                <div class="col-lg-12 ">
                    <div class="col-sm-*">
                        <h5 class="bg-white p-4 " >
                            <span class="text-left pull-left col-sm-5"> 1- <b>Oración:</b> Establecer mi casa como territorio de Dios
                                </span>
<!--                            <strong class="text-realce-verde text-center col-sm-2 "> así que usaré este día </strong>-->
<!---->
<!--                            <span class="text-right pull-right col-sm-5">-->
<!--                                    para conocer y amar a Dios-->
<!--                                </span>-->
                        </h5>
                    </div>

                    <div class="col-sm-*">
                        <h5 class="bg-white p-4 " >
                            2- <b>Palabra: </b>  Edificar mi hogar con la Palabra de Dios
<!--                            <strong class="text-realce-verde  "> así que usaré este día </strong>-->
<!--                            para mostrar amor a otros creyentes-->
                        </h5>
                    </div>

                    <div class="col-sm-*">
                        <h5 class="bg-white p-4 " >
                            3- <b>Generosidad: </b>  Determinar como prioridad la agenda de Dios

<!--                            <strong class="text-realce-verde  "> así que usaré este día </strong>-->
<!---->
<!--                            para tomar decisiones que maduren mi carácter-->
                        </h5>
                    </div>

                    <div class="col-sm-12 col-lg-12 text-right pull-right">
                        <label id="nym"><button class="btn-generico verde circular">Yo</button> </label>
                        <span id="sinfirma">
                                    <input id="nombre"  class="input-group-sm " placeholder="Puedes poner aquí tu nombre y apellido">
                                    <button class="btn-generico verde circular" id="compromiso">Me comprometo</button>
                                </span>
                    </div>
                    <br/>


                </div>
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
        var nombre = localStorage.getItem("alamedaFDPFNombre");
        if (nombre != null){
            aceptado();
        }
    });

    $(function () {
        $('#compromiso').click(function(){
            var nombre = $('#nombre').val();

            if (nombre == null || nombre ==''){
                $('#nombre').attr('placeholder', 'Aquí debés colocar tu nombre y apellido');
                return false;
            }
            var hoy = new Date();
            var dd =hoy.getDate();
            var mm = hoy.getMonth()+1; //January is 0!
            var yyyy = hoy.getFullYear();

            if(dd<10) {
                dd = '0'+dd
            }

            if(mm<10) {
                mm = '0'+mm
            }

            hoy = dd + '/' + mm + '/' + yyyy;
            // var myJson = {
            //     'Nombre': nombre,
            //     'Fecha' : hoy
            // };
            localStorage.alamedaFDPFNombre =  JSON.stringify(nombre);
            localStorage.alamedaFDPFFecha =  JSON.stringify(hoy);


            aceptado()

        });


    });
    function aceptado(){

        var nombre = JSON.parse(localStorage.alamedaFDPFNombre);
        var fecha = JSON.parse(localStorage.alamedaFDPFFecha);

        $('#nym').addClass('fontTahu fa-2x');
        $('#nym').html(nombre + ' ,' + fecha + '<br/> Mi compromiso' );
        $('#sinfirma').hide();



    }

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
