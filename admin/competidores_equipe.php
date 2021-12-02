<?php
 include "../db_connection.php";

 $id = filter_input(INPUT_GET, "id_competidores");
  
 $consulta_competidor = "SELECT * FROM competidor_equipe WHERE equipe_id='$id'";
 $conCompetidor = $conexao->query($consulta_competidor) or die($conexao->error);


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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">

  <link rel="icon" type="imagem/png" href="" />
  <!-- logo -->

  <title>Competidores | Arduino Day 2019</title>

</head>

<body>

  
    <!-- inicio Cabecalho -->
  <?php include_once('navbar.php'); ?>
  <!--/fim Cabecalho -->

  <div style="margin-top:130px;">
    <h2>Competidores da Equipe</h2>
    <div style="overflow:auto; margin: 0 auto;width:80%;">
      <table class="table table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">código</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Local estudo</th>
            <th scope="col">Certificado</th>
            <th scope="col">Camiseta</th>
            <th scope="col">Tamanho</th>
            <th scope="col">projeto</th>

          </tr>
        </thead>
        <tbody>
          <?php while($dado = $conCompetidor->fetch_array() ){ 
              ?>
          <tr>
            <th scope="col">
              <?php echo $dado["id_competidor"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["nome_competidor"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["email_competidor"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["cpf_competidor"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["celular_competidor"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["local_estudo"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["certificado"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["camiseta"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["tamanho"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["equipe_id"]; ?>
            </th>
          

          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>

 

</body>

</html>