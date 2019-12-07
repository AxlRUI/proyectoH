<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['Usuario'])) {
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

    <section class="contenido">
      <iframe src="source/html/cartilla.html" width="100%" height="100%" name="main_frame"></iframe>
    </section>
    <script type="text/javascript">
      $(document).ready(function(){
        M.AutoInit();
      });
    </script>
  </body>
</html>
