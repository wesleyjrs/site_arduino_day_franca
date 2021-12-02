<?php 
session_start();

?>
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
    .login-container {
      margin-top: 5%;
      margin-bottom: 5%;
    }

    .login-logo {
      position: relative;
      margin-left: -41.5%;
    }

    .login-logo img {
      position: absolute;
      width: 20%;
      margin-top: 19%;
      background: #282726;
      border-radius: 4.5rem;
      padding: 5%;
    }

    .login-form-1 {
      padding: 9%;
      background: #00878f;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-1 h3 {
      text-align: center;
      margin-bottom: 12%;
      color: #fff;
    }

    .login-form-2 {
      padding: 9%;
      background: #e47128;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-2 h3 {
      text-align: center;
      margin-bottom: 12%;
      color: #fff;
    }

    .login-form-3 {
      padding: 9%;
      background: #e5ad24;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-3 h3 {
      text-align: center;
      margin-bottom: 12%;
      color: #fff;
    }

    .btnSubmit {
      font-weight: 600;
      width: 50%;
      color: #282726;
      background-color: #fff;
      border: none;
      border-radius: 1.5rem;
      padding: 2%;
    }

    .btnForgetPwd {
      color: #fff;
      font-weight: 600;
      text-decoration: none;
    }

    .btnForgetPwd:hover {
      text-decoration: none;
      color: #fff;
    }
  </style>
  <script>
    function esconde_mgn(){
      document.getElementById('mgn_erro').style.display = "none";
    }
  </script>

  <title>Inscrição | Arduino Day 2019</title>

</head>

<body onclick="esconde_mgn();">

 
  <!-- inicio Cabecalho -->
  <?php include_once('nav_menu.php'); ?>
  <!--/fim Cabecalho -->

  <section style="margin-top:200px;margin-bottom:130px;">
    <div class="container-fluid login-container">
    <div id="mgn_erro" style="position: relative;width: 30%;text-align: center;margin: 0 auto;">
            <?php
              if(isset($_SESSION['mgn'])){
                echo $_SESSION['mgn'];
                unset($_SESSION['mgn']);
            ?>
            <?php
              }
            ?>
        </div>
      <div class="row">
        <div class="col-md-4">
          <div class="container login-form-1">
            <h3>Visitante</h3><br>
            
            <div class="form-group">
                <div style="margin: 0 auto;width: 165px;">
                  <a href="cadastro_visitante.php"><button type="button" class="btn btn-dark btn-md">Ir para o cadastro  »</button></a>
                </div>
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="container login-form-2">
            <h3>Apresentar Projeto</h3><br>
            
            <div class="form-group">
              <div style="margin: 0 auto;width: 165px;">
                  <a href="cadastro_projeto.php"><button type="button" class="btn btn-dark btn-md">Ir para o cadastro  »</button></a>           
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container login-form-3">
            <h3>Copa Arduino</h3><br>
            
            <div class="form-group">
              <div style="margin: 0 auto;width: 165px;">
                  <a href="cadastro_copa_arduino.php"><button type="button" class="btn btn-dark btn-md">Ir para o cadastro  »</button></a>                  
              </div>
            </div>
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