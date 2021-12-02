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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <link rel="icon" type="imagem/png" href="" />
  <!-- logo -->

  <title>Home | Arduino Day 2019</title>

  <script>
    $(document).ready(function () {
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>

 

</head>

<body>

  
    <!-- inicio Cabecalho -->
  <?php include_once('nav_menu.php'); ?>
  <!--/fim Cabecalho -->

  <div class="container">
    <style>
      .box {
        width: 500px;
      }

      .shape1 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #e47128;
        border-radius: 80px;
        float: left;
        margin-right: -50px;
      }

      .shape2 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #e47128;
        border-radius: 80px;
        margin-top: -30px;
        float: left;
      }

      .shape3 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #e47128;
        border-radius: 80px;
        margin-top: -30px;
        float: left;
        margin-left: -31px;
      }

      .shape4 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #e47128;
        border-radius: 80px;
        margin-top: -25px;
        float: left;
        margin-left: -32px;
      }

      .shape5 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #e47128;
        border-radius: 80px;
        float: left;
        margin-right: -48px;
        margin-left: -32px;
        margin-top: -30px;
      }

      .shape6 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #e47128;
        border-radius: 80px;
        float: left;
        margin-right: -20px;
        margin-top: -35px;
      }

      .shape7 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #e47128;
        border-radius: 80px;
        float: left;
        margin-right: -20px;
        margin-top: -57px;
      }

      .float {
        position: absolute;
        z-index: 2;
      }
    </style>
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6" style="margin-bottom: 100px;">
        <div class="box">
          <div class="shape1"></div>
          <div class="shape2"></div>
          <div class="shape3"></div>
          <div class="shape4"></div>
          <div class="shape5"></div>
          <div class="shape6"></div>
          <div class="shape7"></div>
          <div class="float" style="color:#fff;text-align:center;margin-left: 16%;margin-top: 8%;">
            <p>Site em manutenção!<br>
            Tete novamente mais tarde...
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php include_once('rodape.php'); ?>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
</body>

</html>