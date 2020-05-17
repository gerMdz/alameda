<?php
$lema = 'Notas de la Serie Oraciones Audaces';
$lemaSinEspacios = 'Oraciones-Audaces';
$ahora = date('Y-m-d H:i');
$version = date('YmdHi');
$domingo = strtotime('today');
//$msj2 = true;

/**
 * @example pregunta si la cuarentena terminó
 */
$finQ = false;
include_once ('gerVendor/gerFunctions.php');
include_once ('links.php');
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include ('meta-base.php');
    include ('style-base.php')
    ?>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->

    <!-- Argon CSS -->


    <!-- Docs CSS -->
    <link href="css/small-business.css?v=<?php echo $version ?>" rel="stylesheet">
    <style>
        .card-title{
            font-family: druk_italic;
        }
    </style>


</head>

<body>
  <!-- Navigation -->
  <?php
  include ('nav.php')
  ?>


  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0 overflow-auto" src="series/oraciones-audaces/oraciones-audaces-cover.jpg" alt="<?php echo $lemaSinEspacios?>">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5  ">
          <h1 class="font-weight-light">
              <hr class="pt-2" />
              <sup><i>Serie</i></sup>
              <blockquote class="ml-5 pl-5float-right druk_italic text-uppercase">Oraciones Audaces!</blockquote> </h1>
        <p>
            En tiempos de adversidad los hombres han encontrado un arma para lo imposible:
            <b>Una oración</b>.<br/>
            Pero no cualquier oración. <b>Oraciones con la fe y coraje para cambiar las cosas.</b><br/>
            Descubrí estas poderosas <b>oraciones de personas</b> de la Biblia y tomalas en tu vida para enfrentar las presentes adversidades que enfrentas.
        </p>
          <hr class="pb-2" />

      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-indigo my-5 py-2 text-center">
      <div class="card-body">
            <h2>
            <a href="https://youtube.com/user/IglesiaAlameda" class="btn btn-sm btn-danger pl-5 col-sm-3 text-left"> <i class="fab fa-youtube text-white"> </i> YouTube  </a>

                <span class="text-darker card-text text-center "><strong>    Seguinos por tu red social favorita</strong> </span>

            <a href="https://www.facebook.com/IglesiaAlameda" class="btn btn-sm btn-info pr-5 col-sm-3 text-right">Facebook <i class="fab fa-facebook-square text-white"> </i></a>
            </h2>

      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!--            Inicio Card Nota-->
        <div class="col-md-4 mb-5 mx-auto">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Ante lo Inesperado</h2>
                    <img src="series/oraciones-audaces/01-Ante-lo-inesperado.jpg" class="img-fluid" />
                </div>
                <div class="card-footer text-center">
                    <a href="series/oraciones-audaces/01-Ante-lo-inesperado.pdf" class="btn btn-sm btn-outline-info" target="_blank">
                        Descarga la hoja de notas <br/>desde aquí.
                    </a><br/>

                    <a href="https://youtu.be/_x5G01c5eYc" class="btn btn-sm btn-outline-danger" target="_blank">
                        Ver el Mensaje.
                    </a>
                </div>
            </div>
        </div>
        <!--            Fin Card Nota-->

        <!--            Inicio Card Nota-->
        <div class="col-md-4 mb-5 mx-auto">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Indomita</h2>
                    <img src="series/oraciones-audaces/02-Indomita.jpg" class="img-fluid" />

                </div>
                <div class="card-footer text-center">
                    <a href="series/oraciones-audaces/02-Indomita.pdf" class="btn btn-sm btn-outline-info" target="_blank">
                        Descarga la hoja de notas <br/>desde aquí.
                    </a><br/>
                    <a href="https://youtu.be/eHA1duGHIhI" class="btn btn-sm btn-outline-danger" target="_blank">
                        Ver el Mensaje
                    </a>

                </div>
            </div>
        </div>
        <!--            Fin Card Nota-->

        <!--            Inicio Card Nota-->
        <div class="col-md-4 mb-5 mx-auto">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Rescate en las llamas</h2>
                    <img src="series/oraciones-audaces/03-Rescate-en-las-llamas.jpg" class="img-fluid" />

                </div>
                <div class="card-footer text-center">
                    <a href="series/oraciones-audaces/03-Rescate-en-las-llamas.pdf" class="btn btn-sm btn-outline-info" target="_blank">
                        Descarga la hoja de notas <br/>desde aquí.
                    </a>
                    <br/>
                    <a href="https://youtu.be/QS86sn1Z354" class="btn btn-sm btn-outline-danger" target="_blank">
                        Ver el Mensaje
                    </a>

                </div>
            </div>
        </div>
        <!--            Fin Card Nota-->

        <!--            Inicio Card Nota-->
        <div class="col-md-4 mb-5 mx-auto">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Dios Cámbiame!</h2>
                    <img src="series/oraciones-audaces/04-Dios-Cambiame.jpg" class="img-fluid" />

                </div>
                <div class="card-footer text-center">
                    <a href="series/oraciones-audaces/04-Dios-Cambiame.pdf" class="btn btn-sm btn-outline-info" target="_blank">
                        Descarga la hoja de notas <br/>desde aquí.
                    </a><br/>
                        <a href="https://youtu.be/ew2IlrMhwhI" class="btn btn-sm btn-outline-danger" target="_blank">
                            Ver el Mensaje
                        </a>
                </div>
            </div>
        </div>
        <!--            Fin Card Nota-->

        <!--            Inicio Card Nota-->
        <div class="col-md-4 mb-5 mx-auto">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Reinvidicada!</h2>
                    <img src="series/oraciones-audaces/05-Reinvindicada.jpg" class="img-fluid" />

                </div>
                <div class="card-footer text-center">
                    <a href="series/oraciones-audaces/05-Reinvindicada.pdf" class="btn btn-sm btn-outline-info" target="_blank">
                        Descarga la hoja de notas <br/>desde aquí.
                    </a><br/>
                    <?php
                    if ($notas_link !== null) {
                        ?>
                        <a href="<?php echo $notas_link ?>" class="btn btn-sm btn-outline-danger" target="_blank">
                            Ver el Mensaje
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--            Fin Card Nota-->



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="footer">
          <div class="card-body">
              <h4 class="text-darker card-text text-center">Ver series anteriores </h4>
              <div class="col-sm-2 mx-auto text-center">
                <a href="notas-no-temere.php" class="btn btn-xl btn-alameda"> No temeré</a>
              </div>
          </div>

  </footer>
  <?php
  include "footer.php";
  ?>

  <!-- Bootstrap core JavaScript -->
  <?php
  include ('js-base.php');
  ?>

</body>

</html>
