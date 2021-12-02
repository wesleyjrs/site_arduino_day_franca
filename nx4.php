<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Drone NX4 | Nexdrones</title>
     <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="estilo.css">
 <link rel="stylesheet" href="estilo_mobile.css">
<link rel="icon" type="imagem/png" href="imagens/icones/icon_drone1.png" />
 <script type="text/javascript"
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfYYEeexJpXuK5w-DXgWp5sEFp9xjPVgA" >
 </script>
     <script type="text/javascript" src="function.js"></script>
 </head>
 <body onload="initialize()">
     <?php include_once("navbar_principal.php");?>
       
         <!-- Inicio Portif贸lio -->
             <div class="pre_titulo">
                 <p>Drones</p>
             </div>
             <div class="titulo">
                 <p>NX4</p>
             </div>
             <div class="img_titulos">
                 <img src="imagens/icone_drone.png" alt="icone drone">
             </div>
             
         <!-- Fim Portif贸lio -->
         </div> <!-- ----------------------------------------------INICIO DRONNE 01----------------------------------------------------------- -->

     <div class="jumbotron banners">
         <div class="container-fluid">
             <div class="row" style="padding:20px;">
                 <div class="col-md-6 zoom" style="align:center">
                     <a href="#">
                         <img src="imagens/a.jpg" alt="" class="img-fluid img_banner_servicos">
                     </a>
                 </div>
                 <div class="col-md-6">
                     <h3 class="titulo_banner_servico">Nx4</h3>
                     <p class="text_banner_servicos text_justify">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullanec ex arcu. Nulla facilisi.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nulla nec ex arcu. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nulla nec ex arcu. Nulla facilisi. Mauris sed eleifend purus, in luctus nibh. 
                     </p>
                     <p><a class="btn btn-primary espaco zoom" href="modelos_nx4.php" role="button">Saiba mais »</a></p>
                 </div>
             </div>
         </div>
     </div>

     <!-- ---------------------------------------------FIM DRONE 01---------------------------------------------------------------- -->

     </div> <!-- ----------------------------------------------INICIO DRONNE 02----------------------------------------------------------- -->

     <div class="jumbotron banners">
         <div class="container-fluid">
             <div class="row" style="padding:20px;">
                
                 <div class="col-md-6">
                     <h3 class="titulo_banner_servico">Nx4 Light</h3>
                     <p class="text_banner_servicos text_justify">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullanec ex arcu. Nulla facilisi.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nulla nec ex arcu. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nulla nec ex arcu. Nulla facilisi. Mauris sed eleifend purus, in luctus nibh.
                     </p>
                     <p><a class="btn btn-primary espaco zoom" href="nossos_drones.php" role="button">Saiba mais »</a></p>
                 </div>
                 <div class="col-md-6 zoom" style="align:center">
                     <a href="#">
                         <img src="imagens/a.jpg" alt="" class="img-fluid img_banner_servicos">
                     </a>
                 </div>
             </div>
         </div>
     </div>

     <!-- ---------------------------------------------FIM DRONE 02---------------------------------------------------------------- -->

     </div> <!-- ----------------------------------------------INICIO DRONNE 03----------------------------------------------------------- -->

     <div class="jumbotron banners">
         <div class="container-fluid">
             <div class="row" style="padding:20px;">
                 <div class="col-md-6 zoom" style="align:center">
                     <a href="#">
                         <img src="imagens/hycopter.jpg" alt="" class="img-fluid img_banner_servicos">
                     </a>
                 </div>
                 <div class="col-md-6">
                     <h3 class="titulo_banner_servico">Nx4 Map</h3>
                     <p class="text_banner_servicos text_justify">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullanec ex arcu. Nulla facilisi.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nulla nec ex arcu. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nulla nec ex arcu. Nulla facilisi. Mauris sed eleifend purus, in luctus nibh. 
                     </p>
                     <p><a class="btn btn-primary espaco zoom" href="nossos_drones.php" role="button">Saiba mais »</a></p>
                 </div>
             </div>
         </div>
     </div>

     <!-- ---------------------------------------------FIM DRONE 03---------------------------------------------------------------- -->

         <?php 
         include_once("rodape.php");
         ?>

     <script src="lib/jquery/jquery.min.js"></script>
     <script src="lib/bootstrap/js/bootstrap.min.js"></script>

 </body>
</html>
