<?php
include_once('gerVendor/Links.php');
$notas = new Links();
?>
<section class="bg-white ">
    <div class="container-fluid mt-lg-1 mt-sm-5">
        <div class="row">
            <div class="col-md-10 mx-auto ">
                <div class="row ">
                    <div class="col-md-8 align-items-center">
                        <div class="col-sm-12 mx-auto vh-100">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">


                                    <iframe
                                        src="https://www.youtube.com/embed/<?php echo $notas->getIndex(); ?>"
                                        class="embed-responsive-item p-0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <!--                                <div class="card-img-overlay">-->
                                <div class="card-footer bg-white justify-content-between"
                                     style="top: 80%; position: relative">
                                    <a href="javascript:" class="card-link">
                                        <small><?php echo $notas->getFecha(); ?></small><br/>
                                        <b><?php echo $notas->getTitle(); ?></b><br/>
                                        <small><?php echo $notas->getAutor(); ?></small>

                                    </a>
                                    <a href="<?php echo $notas->getNota() ?>" class="card-link mr-2"
                                       style="z-index: 100">
                                        Ver la celebración
                                    </a>
                                    <!--                                    </div>-->


                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-lg-1 mt-sm-5 align-items-center">

                        <div class="row align-items-center">

                            <div class="col-sm-12 container-img mt-0 mb-2">

                                <img src="/images/institucional/conocerte.jpg" class="img-fluid card-img vw-100  p-1"
                                     alt="Iglesia de la Alameda"/>


                                <a class="btn btn-round bg-white centered" href="/contacto.php">
                                    <h6>
                                        <b class="text-blue">
                                            ¿Nuevo en La Alameda? <br class="d-block d-md-none"/>
                                            Queremos conocerte
                                        </b>
                                    </h6>
                                </a>
                            </div>

                            <div class="col-sm-12 container-img mt-2 mb-lg-0 mb-sm-5">

                                <img src="/images/gp_escalado.png" class="img-fluid card-img vw-100 border p-5"
                                     alt="Iglesia de la Alameda"/>


                                <a class="btn btn-round bg-white centered" href="/oportunidades/grupos-pequeños.php">
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
</section>
