<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 2/12/13
 * Time: 19:13
 */
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/controller/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>clients</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <script src="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/js/jquery-1.9.1.js"></script>
        <script src="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/js/bootstrap.min.js"></script>
        <link href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/css/estiloGeneral.css" rel="stylesheet" media="screen">
        <script src="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/js/validaciones.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/index.php">EProject</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Proveidors</a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/controller/business/controller_proveidor.php?action=veure">Veure</a></li>
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/view/proveidors_afegir.php">Afegir</a></li>
                                </ul>

                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Productes</a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/controller/business/controller_producte.php?action=veure">Veure</a></li>
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/view/productes_afegir.php">Afegir</a></li>
                                </ul>

                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Comandes</a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/view/comandes_veure.php">Veure</a></li>
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/view/comandes_afegir.php">Afegir</a></li>
                                </ul>

                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Detall de comandes</a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a>Veure</a></li>
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/view/detallComandes_afegir.php">Afegir</a></li>
                                </ul>

                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clients</a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/controller/business/controller_client.php?action=veure">Veure</a></li>
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/view/clients_afegir.php">Afegir</a></li>
                                </ul>

                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div class="text-right visible-desktop">
                        <?php if (isset($_SESSION["usuari"])) { ?>
                            <div class="btn-group text-left">
                                <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> <?php echo $_SESSION["usuari"]->getNom() ?></a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-pencil"></i> Canviar contrasenya</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/controller/business/controller_login.php?logout=true"><i class="i"></i> Logout</a></li>
                                </ul>
                            </div>
                        <?php } else { ?>
                            <a href="http://<?php echo $_SERVER['HTTP_HOST'] . "/ProjecteM7" ?>/view/login.php" class="btn btn-primary"><i class="icon-user icon-white"></i> Accedeix</a>
                        <?php } ?>
                    </div>
                    <div class="text-left hidden-desktop">
                        <?php if (isset($_SESSION["usuari"])) { ?>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> <?php echo $_SESSION["usuari"]->getNom() ?></a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-pencil"></i> Canviar contrasenya</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/controller/business/controller_login.php?logout=true"><i class="i"></i> Logout</a></li>
                                </ul>
                            </div>
                        <?php } else { ?>
                            <a href="http://<?php echo $_SERVER['HTTP_HOST']."/ProjecteM7" ?>/view/login.php" class="btn btn-primary"><i class="icon-user icon-white"></i> Accedeix</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
