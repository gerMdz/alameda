<?php

use gerVendor\HandlerNotas;
use gerVendor\Links;

include_once('gerVendor/Links.php');
$notas = new Links();
$referencias = new HandlerNotas();

$data = $referencias->getReferencias('2020-08-09 09:30');


?>
<section class="bg-white ">
    <div class="container-fluid mt-lg-1 mt-sm-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-md-1 mx-auto "></div>
                <div class="col-md-10 mx-auto ">
                    <div class="row justify-content-center ">

                        <div class="col-md-7 pr-0 ">
                            <div class="col-sm-12 mr-0 left-n5">
                                <div class="card shadow-none">
                                    <div class="card-img">
                                        <img src="/series/escape-a-la-libertad/<?php echo $data['image']; ?>"
                                             alt="Iglesia de La Alameda"
                                             class="card-img"
                                        >
                                    </div>
                                    <!--                                <div class="card-img-overlay">-->
                                    <div class="card-footer bg-white justify-content-between ">
                                        <!--                                     style="top: 80%; position: relative"-->

                                        <a class="card-link">

                                            <small><?php echo $data['fecha']; ?></small><br/>
                                            <span class="text-alameda"><?php echo $data['title']; ?></span><br/>
                                            <small><?php echo $data['autor']; ?></small>

                                        </a>
                                        <a href="<?php echo $data['link'] ?>" class="btn-round btn-alameda  mr-2 ">
                                            <!--                                       style="z-index: 100" >-->

                                            Ver último mensaje
                                            <!--                                        <b class="text-blue">Ver último mensaje</b>-->
                                        </a>
                                        <!--                                    </div>-->


                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">

                            <div class="row ">

                                <div class="col-sm-12 container-img ">
                                    <div class="card mb-0 contenedor ">
                                        <img src="/images/institucional/contacto2.jpg" class="card-img "
                                             alt="Iglesia de la Alameda"/>


                                        <a class="btn-round btn-alameda-reverso btn-centered aire-2 e90"
                                           href="/contacto.php">


                                            ¿Nuevo en la Alameda?
                                            <!--                                            <br class="d-block d-md-none"/>-->
                                            <!--                                            Queremos conocerte-->


                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-12 container-img bottom-n10">
                                    <div class="card contenedor">

                                        <img src="/images/institucional/gp.jpg" class="card-img "
                                             alt="Iglesia de la Alameda"/>


                                        <a class="btn-round btn-alameda-reverso btn-centered aire-2 e90"
                                           href="/oportunidades/grupos-pequeños.php">
                                            Unite a un Grupo Pequeño

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 mx-auto "></div>
            </div>
        </div>
    </div>
</section>
