<?php session_start();

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
  <script>
            function some_mgn(){
                document.getElementById("mgn_erro").style.display = "none";
            }
        </script>
  <style>
  body {
  margin: 0;
  padding: 0;
}
.cor_input{
    color:#fff;
    
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #00878f;
  background-color: rgba(0, 0, 0,0.7);
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}</style>
  <!-- logo -->

  <title>Home Admin | Arduino Day 2019</title>

</head>

<body onclick="some_mgn()">

<div id="login">


        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
        
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login_admin.php" method="post">
                            <h3 class="text-center cor_input">ARDUINO DAY</h3>
                            <div style="padding:20px;">
                                <div class="form-group">
                                <label for="email_login" class="cor_input">Email</label><br>
                                <input type="text" name="email_login" id="email_login" class="form-control" placeholder="Digite seu email..." onclick="some_mgn()">
                                </div>
                                <div class="form-group">
                                    <label for="senha_login" class="cor_input">Senha</label><br>
                                    <input type="password" name="senha_login" id="senha_login" class="form-control" placeholder="Digite sua senha...">
                                </div>
                                <div class="form-group" style="text-align:center;">
                                    <input type="submit" name="submit" class="btn btn-light btn-md" value="Entrar" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mgn_erro" style="width:40%;margin:0 auto;text-align:center;margin-top:20px;">
                        <?php
                            if(isset($_SESSION['mgn'])){
                                echo $_SESSION['mgn'];
                                unset($_SESSION['mgn']);
                                ?>
                                <?php
                            }
                        ?>
                    </div>

 

</body>

</html>