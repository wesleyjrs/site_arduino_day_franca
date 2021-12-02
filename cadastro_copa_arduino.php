<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
     crossorigin="anonymous">
     
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
		
		
		function inserir_integrante(){
            
			var tabela = document.getElementById("tabela_integrantes");//pega a tabela pelo id
			var ultima = tabela.rows.length;
			var linha = document.createElement("tr");// linha da tabela
			linha.setAttribute("id","line"+ultima);

            var elemento = document.createElement("td");//coluna da tabela
			var texto = document.createTextNode(contador);//texto da coluna da tabela
			elemento.appendChild(texto);
			linha.appendChild(elemento);

			var celula0 = document.createElement("td");//coluna da tabela
			var texto0 = document.createTextNode(document.getElementById('nome_competidor').value);//texto da coluna da tabela
			celula0.appendChild(texto0);
			linha.appendChild(celula0);

			var celula1 = document.createElement("td");
			var texto1 =  document.createTextNode(document.getElementById('email_competidor').value);
			celula1.appendChild(texto1);
			linha.appendChild(celula1);

			var celula2 = document.createElement("td");
			var texto2 = document.createTextNode(document.getElementById('cpf_competidor').value);
			celula2.appendChild(texto2);
			linha.appendChild(celula2);

			var celula3 = document.createElement("td");
			var texto3 = document.createTextNode(document.getElementById('cel_competidor').value);
			celula3.appendChild(texto3);
			linha.appendChild(celula3);

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
            
			var teste = contador;
			var integrante = contador;
            alert(integrante);		
			var nome = document.getElementById('nome_competidor').value;
            document.getElementById('nome_competidor').value='';
            alert(nome);		
			var email = document.getElementById('email_competidor').value;
            document.getElementById('email_competidor').value='';

            alert(email);		           
			var cpf = document.getElementById('cpf_competidor').value;
            document.getElementById('cpf_competidor').value='';

            alert(cpf);		            
			var cel = document.getElementById('cel_competidor').value;
            document.getElementById('cel_competidor').value='';

            alert(cel);	
           
			var local = instituicao;
            alert(local);	
            var cert = certificado;
            alert(cert);	
            var camiseta_evento = camiseta;
            alert(camiseta_evento);
            var tamanho = document.getElementById('tam_camiseta').value;
            document.getElementById('tam_camiseta').value='';           

			
            contador = contador + 1;
			var campotexto = document.getElementById('inputs');//no formulario foi criado um div com id inputs



			var hiddens = '<input type="hidden" name="integrante" value="'+integrante+'"  />'
            +'<input type="hidden" name="nome_competidor[]" value="'+nome+'"  />'
            +'<input type="hidden" name="email_competidor[]" value="'+email+'" />'
            +'<input type="hidden" name="cpf_competidor[]" value="'+cpf+'" />'
            +'<input type="hidden" name="cel_competidor[]" value="'+cel+'" />'
            +'<input type="hidden" name="local_competidor[]" value="'+local+'" />'
            +'<input type="hidden" name="certificado_competidor[]" value="'+cert+'" />'
            +'<input type="hidden" name="camiseta_competidor[]" value="'+camiseta_evento+'" />'
            +'<input type="hidden" name="tamanho[]" value="'+tamanho+'" />';

			campotexto.innerHTML = campotexto.innerHTML+hiddens;//inserindo os hidens na div
			//var field = document.getElementById("field"); 
			//	field.appendChild(hiddens);
            alert(hiddens);

				return false;



		}

      
	</script>



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

	<title>Cadastro | Arduino Day 2019</title>

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
					<div class="container-fluid login-form-3">
						<h3>Copa Arduino</h3><br>

						<form action="inserir_equipe.php" method="POST" enctype="multipart/form-data" style="color:#fff;font-size:17px;">
							<div class="form-row">
								<div class="col-md-12 mb-3">
									<label for="nome_equipe">Nome da equipe</label>
									<input type="text" class="form-control" id="nome_equipe" name="nome_equipe" placeholder="Digite o nome da sua equipe" required>
								</div>
							</div>
							<div class="form-row">
							<div class="col-md-6">
								<div class="form-group">
											<h5>Qual competição?</h5>

											<div class="form-check">
												<input class="form-check-input" type="radio" name="tipo_competicao" id="segue_linha" value="segue_linha" checked>
												<label class="form-check-label" for="segue_linha">
                                                    Robô seguidor de linha
                                                </label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="tipo_competicao" id="sumo" value="sumo">
												<label class="form-check-label" for="sumo">
                                                    Robô sumô
                                                </label>
											</div><br>
										</div>
								</div>
								<div class="col-md-6">
									<label for="logo_equipe">Logo da equipe </label>
									<input type="file" class="form-control-file" id="logo_equipe" name="logo_equipe"><br>
								</div>
								
							</div>
							
							<div class="form-group" style="border:2px solid #fff;padding:10px;">

								<div class="form-row">
									<div class="col-md-12 mb-3">
										<label for="nome_competidor">Nome integrante</label>
										<input type="text" class="form-control" id="nome_competidor" onfocus="this.value='';" name="nome_competidor" placeholder="Digite seu nome completo"
										 >
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-3">
										<label for="email_competidor">Email</label>
										<input type="email" class="form-control" id="email_competidor" name="email_competidor" placeholder="Digite seu email">
									</div>
								</div>


								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="cpf_competidor">CPF</label>
										<input type="text" class="form-control" id="cpf_competidor" name="cpf_competidor" placeholder="000.000.000-00">
									</div>
									<div class="form-group col-md-6">
										<label for="cel_competidor">Celular</label>
										<input type="text" class="form-control" id="cel_competidor" name="cel_competidor" placeholder="(00)00000-0000">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
                                        

										<h5>Instituição de estudo</h5>
										<fieldset class="form-group">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="instituicao" value="unifran">
												<label class="form-check-label" for="unifran">Unifran</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="instituicao" value="unifacef">
												<label class="form-check-label" for="unifacef">Unifacef</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="instituicao" value="fatec">
												<label class="form-check-label" for="fatec">Fatec</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="instituicao" value="industrial">
												<label class="form-check-label" for="industrial">Industrial</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="instituicao" value="outro" checked>
												<label class="form-check-label" for="outro">Outros</label>
											</div>
										</fieldset>

										<div class="form-group">
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
                                                    <select name="tamanho" id="tam_camiseta" style="width:25%;margin:0 auto;">
                                                        <option value=""></option>
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
									<div style="margin: 0 auto;width: 170px;">
                                    <button type="button" class="btn btn-primary" onclick="inserir_integrante();" style="margin:0 auto;">Adicionar Integrante</button>
										
									</div>
                                </div>
                            </div> 

								<div id="tab" style="overflow:auto; margin: 0 auto;width:100%;">
									<table class="table table-sm table-dark table-bordered" name="tabela_integrantes" id="tabela_integrantes">
										<tbody id="tabela_integrantes">
											<tr class="topo">
												<th scope="col">Integrante</th>                                                
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