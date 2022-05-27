<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet"  href="<?php echo RUTA; ?>css/estilos.css">

    <title>ComDia</title>
  </head>
  <body>


<header>


    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <img src="img/ComDia.png" width="50" height="50" alt="">

        <a class="navbar-brand" href="<?php echo RUTA; ?>" style="color: #fff; font-size: 20px;">ComDia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>

        <!--Inicia Menu-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#" style="color: #fff; font-size: 19px;" >Registrate</a>
                </li>
            </ul>

            <form name="busqueda" class="buscar form-inline my-2 my-lg-0" action="<?php echo  RUTA;?>buscar.php" method="GET">

                <input name="busqueda" class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

        </div>
        </divs>   
    </nav>

</header>

