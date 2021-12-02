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

  <section id="home" class="d-flex">
    <!--home -->
    <div class="container-fluid align-self-center">
      <!--container -->
      <div class="row">
        <!--row -->
        <div class="col-md-12 capa" style="margin-top:24px;">

          <div id="carousel-site" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <!--Inner -->

              <div class="carousel-item active" style="width:100%">
                <img class="img-fluid" src="imagens/carrocel 1.png" alt="">
              </div>

              <div class="carousel-item">
                <img class="img-fluid" src="imagens/carrocel 2.png" alt="">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="imagens/carrocel 3.png" alt="">
              </div>

              <div class="carousel-item" style="width:100%">
                <img class="img-fluid" src="imagens/carrocel 4.png" alt="">
              </div>

            </div>
            <!--/Inner -->

            <!-- Controles -->
            <a href="#carousel-site" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>

            <a href="#carousel-site" class="carousel-control-next" data-slide="next">
                <i class="fas fa-angle-right fa-3x"></i>
              </a>

          </div>

        </div>
      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </section>
  <!--/home -->

  <section id="servicos" class="caixa">
    <div class="container-fluid">
      <div class="row" style="background:#e47128;padding: 30px;">
        <div class="col-md-6">
          <div class="row" style="width: 90%;height: 100%;margin-left: 5%;">
            <img src="imagens/copa.jpg" class="img-fluid" class="rounded-10">
          </div>

        </div>
        <div class="col-md-6">

          <h2>Copa Arduino</h2>

          <br>
          <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet
            non. Aliquam sed nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin.
            Sed scelerisque, urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. Lorem
            ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet non.
            Aliquam sed nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin. Sed scelerisque,
            urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. Lorem ipsum dolor sit
            amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet non. Aliquam sed
            nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin. Sed scelerisque,
            urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. </p>
          <a href="#"><button type="button" class="btn btn-dark">Saiba mais  »</button></a>




        </div>
      </div>
    </div>
  </section>

  <section id="servicos" class="caixa">
    <div class="container-fluid">
      <div class="row" style="background:#e5ad24;padding: 30px;">
        <div class="col-md-6">

          <h2>Palestras</h2>

          <br>
          <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet
            non. Aliquam sed nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin.
            Sed scelerisque, urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. Lorem
            ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet non.
            Aliquam sed nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin. Sed scelerisque,
            urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. Lorem ipsum dolor sit
            amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet non. Aliquam sed
            nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin. Sed scelerisque,
            urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. </p>
          <a href="#"><button type="button" class="btn btn-dark">Saiba mais  »</button></a>
        </div>

        <div class="col-md-6">
          <div class="row" style="width: 90%;height: 100%;margin-left: 5%;">
            <img src="imagens/palestra.jpg" class="img-fluid" class="rounded-10">
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="servicos" class="caixa">
    <div class="container-fluid">
      <div class="row" style="background:#00878f;padding: 30px;">
        <div class="col-md-6">
          <div class="row" style="width: 90%;height: 100%;margin-left: 5%;">
            <img src="imagens/oficinas.jpg" class="img-fluid" class="rounded-10">
          </div>

        </div>
        <div class="col-md-6">

          <h2>Oficinas</h2>

          <br>
          <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet
            non. Aliquam sed nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin.
            Sed scelerisque, urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. Lorem
            ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet non.
            Aliquam sed nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin. Sed scelerisque,
            urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. Lorem ipsum dolor sit
            amet, consectetur adipiscing elit. Morbi imperdiet blandit ex, vitae facilisis enim laoreet non. Aliquam sed
            nibh ultricies, viverra urna in, pulvinar nunc. Ut commodo diam sed venenatis sollicitudin. Sed scelerisque,
            urna eu finibus viverra, mauris lorem aliquam dolor, eu volutpat turpis arcu sed nibh. </p>
          <a href="#"><button type="button" class="btn btn-dark">Saiba mais  »</button></a>



        </div>
      </div>
    </div>
  </section>

  <!-- *********************************************************** -->

  <section class="bg--image" style="background: linear-gradient(to top, rgba(16, 34, 50, 0.8) 100%, rgba(16, 34, 50, 0.8) 100%), url('imagens/ardu.jpg')  no-repeat center;height:350px; background-size: cover">
    <div class="container pt60-sm pb60-sm">
      <div class="row flex--center flex--middle md-up-vh100">
        <div class="col-md-12">
          <div class="width100 content-explore" style="text-aling: center;color:#fff;margin-top:50px;">
            <h2>O que é o ArduinoDay?</h2>
            <p style="width:740px;width: 740px; margin: 0 auto;text-align: justify;">
            Arduino é uma placa fabricada na Itália utilizada como plataforma de prototipagem eletrônica que 
            torna a robótica mais acessível a todos. Todos os anos as comunidades de makers e entusiastas ao 
            redor do mundo se juntam num evento de um dia dedicado a troca e compartilhamento de idéias e projetos 
            utilizando o Arduino, este evento ficou conhecido mundialmente como - ArduinoDay. E neste dia 16 de março
             realizaremos o evento aqui em franca na UNIFRAN um  dia voltado para o compartilhamento de idéias, 
             campeonatos, palestras e oficinas a nossa comunidade maker da cidade.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ************************************************************* -->
  <section>
    <div class="container" style="margin-bottom:100px;">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
      <h2>Patrocinadores</h2>
      <section class="customer-logos slider">
        <div class="slide"><img src="imagens/p1.png"></div>
        <div class="slide"><img src="imagens/polo_ti.png"></div>
        <div class="slide"><img src="imagens/eletro_castro.png"></div>
        <div class="slide"><img src="imagens/unifran.png"></div>
        <div class="slide"><img src="imagens/t&s.png"></div>
        <div class="slide"><img src="imagens/p1.png"></div>
        <div class="slide"><img src="imagens/polo_ti.png"></div>
        <div class="slide"><img src="imagens/eletro_castro.png"></div>
        <div class="slide"><img src="imagens/unifran.png"></div>
        <div class="slide"><img src="imagens/t&s.png"></div>    
      </section>

    </div>
  </section>



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
            <h5 class="tit_patrocinador">SEJA UM PATROCINADOR !</h5>
            <p>Para se tornar um patrocinador é so entrar<br> em contato com os organizadores do evento<br>
             através dos contatos:(16)99226-0167 e<br> (16)998245-0458.

              <br>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section style="width: 100%;height: 500px;margin: 0 auto;margin-bottom: 100px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10567.454373176455!2d-47.406916453566176!3d-20.5406705735996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b0a62fbe403ab5%3A0xb5ffbdfb546bfaf8!2sUniversidade+Unifran!5e0!3m2!1spt-BR!2sbr!4v1549389156339"
   width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    
  </section>


<?php include_once('rodape.php'); ?>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
</body>

</html>