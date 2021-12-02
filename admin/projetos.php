<?php
 include "../db_connection.php";

  
 $consulta_projeto = "SELECT * FROM projeto";


 $conProjeto = $conexao->query($consulta_projeto) or die($conexao->error);

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

  <title>Projetos | Arduino Day 2019</title>

</head>

<body>

  
    <!-- inicio Cabecalho -->
  <?php include_once('navbar.php'); ?>
  <!--/fim Cabecalho -->

  <div style="margin-top:130px;">
    <h2 style="color:#e47128;font-size:70px;" >Projetos</h2>
    <div style="overflow:auto; margin: 0 auto;width:80%;">
      <table class="table table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">código</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Imagem</th>
            <th scope="col">Integrantes</th>

          </tr>
        </thead>
        <tbody>
          <?php while($dado = $conProjeto->fetch_array() ){ ?>
          <tr>
            <th scope="col">
              <?php echo $dado["id"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["titulo_projeto"]; ?>
            </th>
            <th scope="col">
              <?php echo $dado["descricao_projeto"]; ?>
            </th>
            <th scope="col">
            <div class="card" style="width: 50%; height: 50%;">
                <img class="card-img-top img_card" src="../imagem_prototipos/<?php echo $dado["imagem_prototipo"]  ?>" alt="" >
            </div>
            </th>
            <th scope="col">
              <a href="<?php echo "integrantes_projeto.php?id=" . $dado['id'] ?>"><button type="button" class="btn btn-primary">Integrantes</button></a>
            </th>
           
          

          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>

 

</body>

</html>