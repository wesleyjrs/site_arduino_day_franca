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
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    

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

        <script type="text/javascript">

        function mostraDiv(){
            var camiseta = document.querySelector('input[name="camiseta"]:checked').value;   
            if(camiseta == "sim"){
                document.getElementById('div_camiseta').style.display = "block";
            }else{
                document.getElementById('div_camiseta').style.display = "none";                
            }
        }

        var contador = 1;
		
		
		function inserir(){
            
			var tabela = document.getElementById("tabela");//pega a tabela pelo id
			var ultima = tabela.rows.length;
			var linha = document.createElement("tr");// linha da tabela
			linha.setAttribute("id","line"+ultima);

            var elemento = document.createElement("td");//coluna da tabela
			var texto = document.createTextNode(contador);//texto da coluna da tabela
			elemento.appendChild(texto);
			linha.appendChild(elemento);

			var coluna0 = document.createElement("td");//coluna da tabela
			var texto0 = document.createTextNode(document.getElementById('nome_integrante').value);//texto da coluna da tabela
			coluna0.appendChild(texto0);
			linha.appendChild(coluna0);

			var coluna1 = document.createElement("td");
			var texto1 =  document.createTextNode(document.getElementById('email_integrante').value);
			coluna1.appendChild(texto1);
			linha.appendChild(coluna1);

			var coluna2 = document.createElement("td");
			var texto2 = document.createTextNode(document.getElementById('cpf_integrante').value);
			coluna2.appendChild(texto2);
			linha.appendChild(coluna2);

			var coluna3 = document.createElement("td");
			var texto3 = document.createTextNode(document.getElementById('cel_integrante').value);
			coluna3.appendChild(texto3);
			linha.appendChild(coluna3);

			var coluna4 = document.createElement("td");
            var instituicao = document.querySelector('input[name="instituicao"]:checked').value;
			var texto4 = document.createTextNode(instituicao);
			coluna4.appendChild(texto4);
			linha.appendChild(coluna4);

            var coluna5 = document.createElement("td");
            var certificado = document.querySelector('input[name="certificado"]:checked').value;            
			var texto5 = document.createTextNode(certificado);
			coluna5.appendChild(texto5);
			linha.appendChild(coluna5);

            var coluna6 = document.createElement("td");
            var camiseta = document.querySelector('input[name="camiseta"]:checked').value;           
			var texto6 = document.createTextNode(camiseta);
			coluna6.appendChild(texto6);
			linha.appendChild(coluna6);

            var coluna7 = document.createElement("td");
			var tamanho = document.createTextNode(document.getElementById('tam_camiseta').value);
			coluna7.appendChild(tamanho);
			linha.appendChild(coluna7);


            //document.getElementById('tab').style.display = "block";
			

			tabela.appendChild(linha);
            
            alert(contador);		
			var nome = document.getElementById('nome_integrante').value;
            document.getElementById('nome_integrante').value='';
            alert(nome);		
			var email = document.getElementById('email_integrante').value;
            document.getElementById('email_integrante').value='';

            alert(email);		           
			var cpf = document.getElementById('cpf_integrante').value;
            document.getElementById('cpf_integrante').value='';

            alert(cpf);		            
			var cel = document.getElementById('cel_integrante').value;
            document.getElementById('cel_integrante').value='';

            alert(cel);		            
			var local = instituicao;
            alert(local);	
            var cert = certificado;
            alert(cert);	
            var camiseta_evento = camiseta;
            alert(camiseta_evento);
            var tamanho = document.getElementById('tam_camiseta').value;
            document.getElementById('tam_camiseta').value='';

            alert(tamanho);		
			
            
			var campotexto = document.getElementById('inputs');//no formulario foi criado um div com id inputs



			var hiddens = '<input type="hidden" name="integrante" value="'+contador+'"  />'
            +'<input type="hidden" name="nome_integrante[]" value="'+nome+'"  />'
            +'<input type="hidden" name="email_integrante[]" value="'+email+'" />'
            +'<input type="hidden" name="cpf_integrante[]" value="'+cpf+'" />'
            +'<input type="hidden" name="cel_integrante[]" value="'+cel+'" />'
            +'<input type="hidden" name="local_integrante[]" value="'+local+'" />'
            +'<input type="hidden" name="certificado_integrante[]" value="'+cert+'" />'
            +'<input type="hidden" name="camiseta_integrante[]" value="'+camiseta+'" />'
            +'<input type="hidden" name="tamanho[]" value="'+tamanho+'" />';
			campotexto.innerHTML = campotexto.innerHTML+hiddens;//inserindo os hidens na div
			//var field = document.getElementById("field"); 
			//	field.appendChild(hiddens);
            alert(hiddens);
            contador = contador + 1;

				return false;



		}

      
	</script>

    <title>Home | Arduino Day 2019</title>

</head>

<body>

       <!-- inicio Cabecalho -->
       <?php include_once('nav_menu.php'); ?>
    <!--/fim Cabecalho -->

    <section style="margin-top:200px;margin-bottom:130px;">
        <div class="container-fluid login-container">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="container-fluid login-form-2">
                        <h3>Apresentar Projeto</h3><br>

                        <form action="inserir_projeto.php" method="post" enctype="multipart/form-data" style="color:#fff;font-size:17px;">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="titulo_projeto">Titulo do projeto</label>
                                    <input type="text" class="form-control" id="titulo_projeto" name="titulo_projeto" placeholder="Digite o titulo do seu projeto"
                                        required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="descricao_projeto">Descrição do projeto</label>
                                    <textarea class="form-control" id="descricao_projeto" name="descricao_projeto" placeholder="Descreva o seu projeto..." rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="imagem_prototipo">Imagem do protótipo </label>
                                    <input type="file" class="form-control-file" id="imagem_prototipo" name="imagem_prototipo"><br>
                                </div>
                            </div>
                            <div class="form-group" style="border:2px solid #fff;padding:10px;">
                                 
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="nome_integrante">Nome completo</label>
                                        <input type="text" class="form-control" id="nome_integrante" onfocus="this.value='';"  name="nome_integrante" placeholder="Digite seu nome completo"
                                            >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="email_integrante">Email</label>
                                        <input type="email" class="form-control" id="email_integrante" name="email_integrante" placeholder="Digite seu email" >
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="cpf_integrante">CPF</label>
                                        <input type="text" class="form-control" id="cpf_integrante" name="cpf_integrante" placeholder="000.000.000-00">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cel_integrante">Celular</label>
                                        <input type="text" class="form-control" id="cel_integrante" name="cel_integrante" placeholder="(00)00000-0000">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <h5>Instituição de estudo</h5>
                                        <fieldset class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="instituicao" id="instituicao" value="unifran">
                                            <label class="form-check-label" for="unifran">Unifran</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="instituicao"  value="unifacef">
                                            <label class="form-check-label" for="unifacef">Unifacef</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="instituicao"  value="fatec">
                                            <label class="form-check-label" for="fatec">Fatec</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="instituicao"  value="industrial">
                                            <label class="form-check-label" for="industrial">Industrial</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="instituicao"  value="outro" checked>
                                            <label class="form-check-label" for="outro">Outros</label>
                                        </div>
                                        </fieldset>

                                        <div class="form-group">
                                            <h5>Necessita de certificado?</h5>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"  name="certificado" id="sim" value="sim" >
                                                <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="certificado" id="nao" value="nao" checked>
                                                <label class="form-check-label" for="nao">
                                                            Não
                                                        </label>
                                            </div><br>
                                        </div>
                                    </div>



                                    <div class="form-group col-md-6">
                                        
                                        <div class="form-group" style="border: 1px solid #fff;padding:10px;text-align:center;"> 
                                        <h5>Camiseta do evento</h5>
                                        
                                        <img src="imagens/camiseta.jpg" alt=""><br>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camiseta" value="sim" onclick="mostraDiv();">
                                                <label class="form-check-label" for="sim">Sim, eu quero!</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camiseta" value="nao" onclick="mostraDiv();" checked>
                                                <label class="form-check-label" for="nao">Não quero!</label>
                                            </div><br>
                                        </div>
                                        <div id="div_camiseta" style="display:none;">
                                            Quantidade: 01 | Preço: R$ 30,00<br>
                                            <div class="form-group">
                                            <label for="tam_camiseta">Tamanho</label>
                                            <select class="f" name="tamanho" id="tam_camiseta" style="width:25%;margin:0 auto;">
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
                                <!-- inicio tabela integrantes -->
                                
                                
                            </div>
                            <div class="form-group">
                                            <div style="margin: 0 auto;width: 170px;margin-top:50px;">
                                            <button type="button" class="btn btn-primary" onclick="inserir();" style="margin:0 auto;">Adicionar Integrante</button>
                                                
                                            </div>
                                        </div>
                            
                                                    
                            </div> 

                            <div id="tab" style="overflow:auto; margin: 0 auto;width:100%;">
                                    <table  class="table table-sm table-dark table-bordered" name="tabela" id="tabela">
                                    <h3>Integrantes adicionados</h3><br>
                                        <tbody id="tabela">
                                            <tr class="topo">
                                                    <th scope="col">numero</th>                                                    
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Cpf</th>
                                                    <th scope="col">Celular</th>
                                                    <th scope="col">Instituição</th>
                                                    <th scope="col">Certificado</th>
                                                    <th scope="col">Camiseta</th>
                                                    <th scope="col">Tamanho</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            <div id="inputs">
                                    
                                </div>

                            <div class="form-group">
                                <div style="margin: 0 auto;width: 96px;margin-top:50px;">
                                    <input type="submit" class="btn btn-light btn-md" value="Cadastrar" />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="col-md-2">
                </div>
            </div>
        </div>
    </section>



    <footer style="height: 210px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="imagens/logo-logo.png" width="142" style="z-index:20;">

                </div>
                <div class="col-md-3">
                    <h4>Rede social</h4>
                    <ul class="navbar-nav">
                        <li><a href="https://www.facebook.com/events/512912279118147/" target="_blank"><img src="imagens/facebook-logo.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Contatos Organizadores</h4>
                    <ul class="navbar-nav">
                        <li><a href="">(16)00000-0000</a></li>
                        <li><a href="">(16)00000-0000</a></li>
                        <li><a href="">(16)00000-0000</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Local do evento</h4>
                    <ul class="navbar-nav" style="color:#fff;font-size: 14px;">
                        <li>Av: Dr. Ismael Alonso Y Alonso, 2400</li>
                        <li>São José, Franca - SP</li>
                        <li>14401-426</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

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