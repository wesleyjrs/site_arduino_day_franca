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

    <script>
     function mostraDiv(){
            var camiseta = document.querySelector('input[name="camiseta"]:checked').value;   
            if(camiseta == "sim"){
                document.getElementById('div_camiseta').style.display = "block";
            }else{
                document.getElementById('div_camiseta').style.display = "none";                
            }
        }
    </script>

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
            margin-bottom: 5%;
            color: #fff;
        }

        .login-form-2 {
            padding: 9%;
            background: #e47128;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }

        .login-form-2 h3 {
            text-align: center;
            margin-bottom: 5%;
            color: #fff;
        }

        .login-form-3 {
            padding: 9%;
            background: #e5ad24;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }

        .login-form-3 h3 {
            text-align: center;
            margin-bottom: 5%;
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

    <title>Home | Arduino Day 2019</title>

</head>

<body>

    
    <!-- inicio Cabecalho -->
    <?php include_once('nav_menu.php'); ?>
    <!--/fim Cabecalho -->

    <section style="margin-top:200px;margin-bottom:130px;">
        <div class="container-fluid login-container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="container login-form-1">
                        <h3>Visitante</h3><br>

                        <form action="inserir_visitante.php" method="post" style="color:#fff;font-size:17px;">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="nome_visitante">Nome completo</label>
                                    <input type="text" class="form-control" id="nome_visitante" name="nome_visitante" placeholder="Digite seu nome completo"
                                        required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="email_visitante">Email</label>
                                    <input type="email" class="form-control" id="email_visitante" name="email_visitante" placeholder="Digite seu email" required>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cpf_visitante">CPF</label>
                                    <input type="text" class="form-control" id="cpf_visitante" name="cpf_visitante" placeholder="000.000.000-00">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cel_visitante">Celular</label>
                                    <input type="text" class="form-control" id="cel_visitante" name="cel_visitante" placeholder="(00)00000-0000">
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-6">

                                    <h5>Instituição de estudo</h5>
                                    <fieldset class="form-group"></fieldset>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="instituicao" id="unifran" value="unifran">
                                        <label class="form-check-label" for="unifran">Unifran</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="instituicao" id="unifacef" value="unifacef">
                                        <label class="form-check-label" for="unifacef">Unifacef</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="instituicao" id="fatec" value="fatec">
                                        <label class="form-check-label" for="fatec">Fatec</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="instituicao" id="industrial" value="industrial">
                                        <label class="form-check-label" for="industrial">Industrial</label>
                                    </div>
                                    <div class="form-check">
                                        <!-- colocar campo de texto para gigitar o outros -->
                                        <input class="form-check-input" type="radio" name="instituicao" id="outro" value="outro" checked>
                                        <label class="form-check-label" for="outro">Outros</label>
                                    </div>
                                    </fieldset><br>

                                    <h5>Necessita de certificado?</h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="certificado" id="sim" value="sim">
                                        <label class="form-check-label" for="sim">
                                            Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="certificado" id="nao" value="nao" checked>
                                        <label class="form-check-label" for="nao">
                                            Não
                                        </label>
                                    </div>
                                </div>



                                <div class="form-group col-md-6">
                                    

                                    <div class="form-group" style="border: 1px solid #fff;padding:10px;text-align:center;"> 
                                        <h5>Camiseta do evento</h5>
                                        
                                        <img src="imagens/camiseta.jpg" alt=""><br>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camiseta" value="sim" id="sim" onclick="mostraDiv();">
                                                <label class="form-check-label" for="sim">Sim, eu quero!</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-check-input" type="radio" name="camiseta" value="nao" id="nao" onclick="mostraDiv();" checked>
                                                <label class="form-check-label" for="nao">Não quero!</label>
                                            </div><br>
                                        </div>
                                        <div id="div_camiseta" style="display:none;">
                                            Quantidade: 01 | Preço: R$ 30,00<br>
                                            <div class="form-group">
                                            <label for="tam_camiseta">Tamanho</label>
                                            <select name="tamanho" id="tam_camiseta" style="width:30%;margin:0 auto;">
                                            <option></option>                                                
                                            <option value="p">P</option>
                                            <option value="m">M</option>
                                            <option value="g">G</option>
                                            <option value="gg">GG</option>
                                            </select>
                                        </div>
                                      </div>
                                        
                                    </div>

                                </div>
                            </div>



                            <div class="form-group">
                                <div style="margin: 0 auto;width: 96px;margin-top:50px;">
                                    <input type="submit" class="btn btn-light btn-md" value="Cadastrar" />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="col-md-4">
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