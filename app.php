<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
  }
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title></title>
    <script type="text/javascript" src="source/anime-master/lib/anime.min.js"></script>
    <script type="text/javascript" src="source/js/conexion.js"></script>
    <script type="text/javascript" src="source/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="source/js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title">
    <link rel="stylesheet" href="source/materialize/css/materialize.min.css" media="screen" title="no title">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <!--div class="debug">
      <a href="source/html/welcome.html" target="main_frame">Main</a>
      <a href="source/html/test.html" target="main_frame">Test JSON</a>
      <a href="source/html/charts.html" target="main_frame">Charts</a>
      <a href="source/html/maps.html" target="main_frame">Maps</a>
      <a href="source/html/registro.html" target="main_frame">Registro</a>
    </div-->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper blancoBck">
          <a href="#" class="brand-logo logo"><img src="source/logobello.png" alt="" /></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="source/html/welcome.html" target="main_frame">Inicio</a></li>
            <li><a href="source/html/informacion.html" target="main_frame">Información</a></li>
            <li><a href="source/html/campaign.html" target="main_frame">Campaña</a></li>
            <li><a href="source/html/registro.html" target="main_frame">Registro</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <section class="contenido">
      <iframe src="source/html/welcome.html" width="100%" height="100%" name="main_frame"></iframe>
    </section>
    <script type="text/javascript">

    </script>
  </body>
</html>