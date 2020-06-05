<?php
/**
 * Created by PhpStorm.
 * User: gerardo
 * Date: 25/05/18
 * Time: 19:01
 */
?>
<style>
    .bg-verde {
        background-color: rgb(168, 228, 112)
    }
    .dropdown-menu{
        margin-left: -100px !important;
    }

</style>
<nav class="js-navbar-scroll navbar fixed-top navbar-expand-lg navbar-dark bg-dark mx-1">
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand" href="../index.php">
            <img src="../images/logo_n1.png" style="width: 30px;" alt="Logo Iglesia Alameda">
            <small>Iglesia de la Alameda</small>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->

            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                <li class="nav-item ml-auto mb-2 mb-lg-0">
                    <a class="nav-link" href="https://online.iglesiaalameda.com">
                        <small>
                            <i class="fas fa-globe"></i> Online
                        </small>
                    </a>
                </li>
                <li class="nav-item ml-auto mb-2 mb-lg-0">
                    <a class="nav-link" href="/oportunidades/grupos-pequeños.php">
                        <small>
                            <img class="img-fluid" src="../images/gpc-sin-texto.png" width="16" height="16">
                            Grupos Pequeños
                        </small>
                    </a>
                </li>
                <li class="nav-item ml-auto mb-2 mb-lg-0">
                    <a class="nav-link" href="../ofrenda.php">
                        <small>
                            <i class="fas fa-hand-holding"></i> Dar
                        </small>
                    </a>
                </li>
                <li class="nav-item ml-auto mb-2 mb-lg-0">
                    <a class="nav-link" href="../notas.php">
                        <small>
                            <i class="fas fa-pencil-alt"></i> Notas de Sermón
                        </small>
                    </a>
                </li>
                <li class="nav-item ml-auto mb-2 mb-lg-0">
                    <a class="nav-link" href="../oracion.php">
                        <small>
                            <i class="fas fa-praying-hands"></i> ¿Necesitas Oración?
                        </small>
                    </a>
                </li>
                <li class="nav-item ml-auto mb-2 mb-lg-0">
                    <a class="nav-link" href="../contacto.php">
                        <small>
                            <i class="fas fa-file-contract"></i> Tarjeta de Conexión
                        </small>
                    </a>
                </li>
                <li class="nav-item dropdown ml-auto mb-2 mb-lg-0">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-angle-down"></i> Más
                    </a>
                    <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="../alamedaaldia.php">
                            <small>
                                <i class="fas fa-location-arrow"></i> Oportunidades
                            </small>
                        </a>

                        <a class="dropdown-item" href="http://sitiosimple.com/libreria-alameda/">
                            <small>
                                <i class="fas fa-book-open"></i> Librería
                            </small>
                        </a>
                    </div>
                </li>
            </ul>

            <!--Right -->
            <ul class="navbar-nav nav-flex-icons ml-auto">

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Seguinos en la fanpage" data-placement="bottom"
                       href="https://www.facebook.com/IglesiaAlameda" target="_blank"
                       data-original-title="Seguinos en la fanpage">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Reviví los mensajes" data-placement="bottom"
                       href="https://youtube.com/user/IglesiaAlameda" target="_blank"
                       data-original-title="Reviví los mensajes">
                        <i class="fab fa-youtube-square fa-2x"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Seguinos en Instagram" data-placement="bottom"
                       href="https://www.instagram.com/iglesialameda" target="_blank"
                       data-original-title="Seguinos en Instagram">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>