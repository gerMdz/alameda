<?php
include_once('gerVendor/Links.php');
$notas = new Links();
?>
<section class="bg-white ">
    <div class="container-fluid mt-lg-1 mt-sm-5">
        <div class="row">
            <div class="col-md-10 mx-auto ">
                <div class="row ">
<!--                    <div class="col-sm-1"></div>-->
                    <div class="col-md-7 pr-0 ">
                        <div class="col-sm-12 mr-0 left-n5" >
                            <div class="card shadow-none">
                                <div class="card-img">
                                    <img src="/series/escape-a-la-libertad/entrenamiento-tapa.jpg" alt="Iglesia de La Alameda"
                                         class="card-img"
                                    >
                                </div>
                                <!--                                <div class="card-img-overlay">-->
                                <div class="card-footer bg-white justify-content-between ">
<!--                                     style="top: 80%; position: relative"-->

                                    <a href="javascript:" class="card-link">
                                        <small><?php echo $notas->getFecha(); ?></small><br/>
                                        <b><?php echo $notas->getTitle(); ?></b><br/>
                                        <small><?php echo $notas->getAutor(); ?></small>

                                    </a>
                                    <a href="<?php echo $notas->getNota() ?>" class="btn btn-round  bg-white mr-2 "
                                       style="z-index: 100">
                                        <b class="text-blue">Ver la celebración</b>
                                    </a>
                                    <!--                                    </div>-->


                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">

                        <div class="row ">

                            <div class="col-sm-12 container-img ">
                                <div class="card mb-0 ">
                                    <img src="/images/institucional/contacto2.jpg" class="card-img "
                                         alt="Iglesia de la Alameda"/>


                                    <a class="btn btn-round bg-white btn-centered" href="/contacto.php">
                                        <h6>
                                            <b class="text-blue">
                                                ¿Nuevo en La Alameda?
                                                <!--                                            <br class="d-block d-md-none"/>-->
                                                <!--                                            Queremos conocerte-->
                                            </b>
                                        </h6>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-12 container-img bottom-n10" >
                                <div class="card">

                                    <img src="/images/institucional/gp.jpg" class="card-img "
                                         alt="Iglesia de la Alameda"/>


                                    <a class="btn btn-round bg-white btn-centered"
                                       href="/oportunidades/grupos-pequeños.php">
                                        <h6>
                                            <b class="text-blue">
                                                Se parte de un<br class="d-block d-md-none"/>
                                                Grupo Pequeño
                                            </b>
                                        </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
