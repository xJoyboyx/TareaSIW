<?php
    include('conexion.php');
    include('funciones.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zoomanager
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .cs-page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .cs-page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .cs-page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .cs-page-loading.active > .cs-page-loading-inner {
        opacity: 1;
      }
      .cs-page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #737491;
      }
      .cs-page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #766df4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.cs-page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
<body>
    <!-- Page loading spinner-->
    <div class="cs-page-loading active">
      <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="cs-page-wrapper">
    <!-- Header -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark navbar-box-shadow">
        <div class="container px-0 px-xl-3">
        
            <div class="d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="btn btn-primary d-none d-sm-inline-block ml-3" href="#">Sign up</a>
            </div>
            <div class="collapse navbar-collapse order-lg-2" id="navbarCollapse1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="./index.php">Inicio</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Acciones</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./altas.php">Alta</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Edición</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./elimina.php">Baja</a></li>
                        <li><a class="dropdown-item" href="./edita.php">Editar</a></li>
            
                    </ul>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Consultar </a></li>
                </ul>
                </li>
            
            </ul>
            </div>
        </div>
    </header>  

    <div class="container">
        <div class="title pt-5">
            <h1>Elimina por id de incidente</h1>
            <br><br>
            <!--Table-->
            <form method='POST' action='elimina.php' name='formulario'>
                <!-- Number input -->
                <div class="form-group">
                <label for="number-input">Id </label>
                <div class="row">
                    <div class="col-sm">
                        <input class="form-control" type="number" name="id" placeholder="20">
                    </div>
                    <div class="col-sm"> 
                        <button type="button" class="btn btn-danger btn-icon">
                    <i class="fe-trash"></i>

                    </button></div>
                    </div>
                </div>
            </form>
            <!--Table-->
            <div class='table-responsive'>
                <table class='table table-dark'>
                    <?php DisplayTable("SELECT * FROM incidente_animal ORDER BY created_at DESC;",4, array("Título","Descripción","ID_ANIMAL","Última actualización"),false,false)?>
                </table>
            </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/parallax-js/dist/parallax.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
</body>
</html>

