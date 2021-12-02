<?php session_start();
    include("db_connection.php");

$titulo_projeto = $_POST["titulo_projeto"];
$descricao_projeto = $_POST["descricao_projeto"];
$integrante = $_POST["integrante"];
$imagem = $_FILES['imagem_prototipo'];
$novo_nome = "";

if(isset($_FILES['imagem_prototipo'])){

    $extensao = strtolower(substr($_FILES['imagem_prototipo']['name'], -5));//pega a extens達o do arquivo
    $novo_nome = md5(time()) . $extensao;//define o nome do arquivo
    $diretorio = "imagem_prototipos/";//define o diretorio para onde enviaremos o arquivo


    move_uploaded_file($_FILES['imagem_prototipo']['tmp_name'], $diretorio.$novo_nome);//efetua o upload
} 




$inserir_projeto = "INSERT INTO projeto (titulo_projeto, descricao_projeto, imagem_prototipo) VALUES 
('$titulo_projeto', '$descricao_projeto', '$novo_nome')";                   

if ($conexao->query($inserir_projeto) === TRUE) {
    echo "Novo projeto adicionado";

    
} else {
    echo "Error: " . $inserir_projeto . "<br>" . $conexao->error;
}

$conexao->close();

include("db_connection.php");

$busca_id = mysqli_query($conexao,"SELECT * FROM projeto WHERE titulo_projeto='$titulo_projeto' AND descricao_projeto='$descricao_projeto '");



while($row = mysqli_fetch_assoc($busca_id)){
    echo $row['id']."<br>";
    $id_recuperado = $row['id'];

}

$conexao->close();




for ($i = 0; $i < $integrante ; $i++) {  


    $nome = $_POST["nome_integrante"][$i];
    $email = $_POST["email_integrante"][$i];
    $cpf = $_POST["cpf_integrante"][$i];
    $celular = $_POST["cel_integrante"][$i];
    $local = $_POST["local_integrante"][$i];
    $certificado = $_POST["certificado_integrante"][$i];
    $camiseta = $_POST["camiseta_integrante"][$i];
    $tamanho = $_POST["tamanho"][$i];

    //  echo $nome;
    // echo $email;
    // echo $cpf;
    // echo $celular;
    // echo $local;
    // echo $celular;
    // echo $certificado;
    // echo $camiseta;
    // echo $tamanho;
    // echo $i;
    include("db_connection.php");
    
    $inserir_integrante = "INSERT INTO integrante_projeto (nome_integrante, email_integrante, cpf_integrante, celular_integrante, local_estudo, certificado, camiseta, tamanho, projeto_id) VALUES 
    ('$nome', '$email', '$cpf', '$celular', '$local','$certificado', '$camiseta', '$tamanho', '$id_recuperado')";  
    
    if ($conexao->query($inserir_integrante) === TRUE) {
        //echo "integrante adicionado com sucesso";
        
        $_SESSION['mgn'] = "<div class='alert' role='alert' style='background:rgba(228, 112, 40, 0.5);font-size: 20px; font-weight: bold;'>Projeto cadastrado com sucesso!</div>";
        header("Location: inscricao.php");
        
    } else {
        echo "Error: " . $inserir_integrante . "<br>" . $conexao->error;
    }
    
    $conexao->close();
    

}
?>
