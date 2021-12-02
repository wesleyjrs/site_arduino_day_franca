<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">



  <!-- Estilo customizado -->
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <style>
    
.banner1{
    background: linear-gradient(140deg, #fff 45%, rgba(228, 112, 40, 0.6) 45%);
    border-radius: 20px;
    margin:10px 50px 20px 50px;
    padding:1px;
}
h3{
    color:#000;
}

.banner2{
    background: linear-gradient(140deg, rgba(229, 171, 36, 0.6) 45%,#fff 45%);
    border-radius: 20px;
    margin:10px 50px 20px 50px;
    padding:1px;
}
.banner3{
    background: linear-gradient(140deg, #fff 45%, rgba(0, 136, 143, 0.6) 45%);
    border-radius: 20px;
    margin:10px 50px 20px 50px;
    padding:1px;
}

.banner4{
    background: linear-gradient(140deg, rgba(140, 120, 101, 0.6) 45%,#fff 45%);
    border-radius: 20px;
    margin:10px 50px 20px 50px;
    padding:1px;
}

.img_banner_servicos{
    border-radius: 25px;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}



</style>

 

  <title>Copa Arduino | Arduino Day 2019</title>

</head>

<body>

    <!-- inicio Cabecalho -->
    <?php include_once('nav_menu.php'); ?>
  <!--/fim Cabecalho -->

 <section style="margin-top:120px;margin-bottom:120px;">
   <h2 style="color:#000;text-align:center;text-decoration:underline;">Competições da copa</h2>
    <div class="jumbotron banner1" style="margin-top:20px;">
        <div class="container-fluid">
            <div class="row" style="padding:20px;">
                <div class="col-md-6 zoom" style="align:center">
                    <a href="nossos_drones.php">
                        <img src="imagens/robo.jpg" alt="" class="img-fluid img_banner_servicos">
                    </a>
                    <!-- img_banner_servicos zoom img-fluid -->
                </div>
                <div class="col-md-6 esp_txt" >
                    <!-- <h1 class="display-3">Imagens Aéreas</h1> -->
                    <h3 class="titulo_banner_servico">Robô seguidor de linha</h3>
                    <p class="text_banner_servicos justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullanec ex arcu. Nulla facilisi.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla nec ex arcu. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla nec ex arcu. Nulla facilisi. Mauris sed eleifend purus, in luctus nibh. Donec lectus
                        magna, lacinia sed lacinia id, pretium quis est. Vestibulum molestie congue mollis.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="jumbotron banner2" style="margin-top:50px;">
        <div class="container-fluid">
            <div class="row" style="padding:20px;">
                
                <div class="col-md-6 esp_txt">
                    <!-- <h1 class="display-3">Imagens Aéreas</h1> -->
                    <h3 class="titulo_banner_servico">Sumô com robôs</h3>
                    <p class="text_banner_servicos justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullanec ex arcu. Nulla facilisi.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla nec ex arcu. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla nec ex arcu. Nulla facilisi. Mauris sed eleifend purus, in luctus nibh. Donec lectus
                        magna, lacinia sed lacinia id, pretium quis est. Vestibulum molestie congue mollis.
                    </p>
                </div>
                <div class="col-md-6" style="align:center">
                    <a href="nossos_drones.php">
                        <img src="imagens/sumo.jpg" alt="" class="img-fluid img_banner_servicos">
                    </a>
                    <!-- img_banner_servicos zoom img-fluid -->
                </div>
            </div>
        </div>
    </div>
    
 </section>



 <?php include_once('rodape.php'); ?>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>