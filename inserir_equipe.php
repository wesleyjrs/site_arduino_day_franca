<?php
    include("db_connection.php");

$nome_equipe = $_POST["nome_equipe"];
$logo_equipe = $_FILES['logo_equipe'];
$competicao = $_POST["tipo_competicao"];
$integrante = $_POST["integrante"];
$novo_nome = "";

if(isset($_FILES['logo_equipe'])){

    $extensao = strtolower(substr($_FILES['logo_equipe']['name'], -5));//pega a extens達o do arquivo
    $novo_nome = md5(time()) . $extensao;//define o nome do arquivo
    $diretorio = "logo_equipe/";//define o diretorio para onde enviaremos o arquivo


    move_uploaded_file($_FILES['logo_equipe']['tmp_name'], $diretorio.$novo_nome);//efetua o upload
} 


$inserir_equipe = "INSERT INTO equipe (nome_equipe, logo_equipe, competicao) VALUES 
('$nome_equipe', '$novo_nome', '$competicao')";  

if ($conexao->query($inserir_equipe) === TRUE) {
    echo "Nova equipe adicionada";

    
} else {
    echo "Error: " . $inserir_equipe . "<br>" . $conexao->error;
}

$conexao->close();

include("db_connection.php");

$busca_id = mysqli_query($conexao,"SELECT * FROM equipe WHERE nome_equipe='$nome_equipe' AND logo_equipe='$novo_nome'");



while($row = mysqli_fetch_assoc($busca_id)){
    echo $row['id']."<br>";
    $id_recuperado = $row['id'];

}





for ($i = 0; $i < $integrante ; $i++) {  


    $nome = $_POST["nome_competidor"][$i];
    $email = $_POST["email_competidor"][$i];
    $cpf = $_POST["cpf_competidor"][$i];
    $celular = $_POST["cel_competidor"][$i];
    $local = $_POST["local_competidor"][$i];
    $certificado = $_POST["certificado_competidor"][$i];
    $camiseta = $_POST["camiseta_competidor"][$i];
    $tamanho = $_POST["tamanho"][$i];

     //echo $nome;
    // echo $email;
    // echo $cpf;
    // echo $celular;
    // echo $i;

    include("db_connection.php");

    $inserir_competidor = "INSERT INTO competidor_equipe (nome_competidor, email_competidor, cpf_competidor, celular_competidor, local_estudo, certificado, camiseta, tamanho, equipe_id) VALUES 
    ('$nome', '$email', '$cpf', '$celular', '$local','$certificado', '$camiseta', '$tamanho', '$id_recuperado')";  
    
    if ($conexao->query($inserir_competidor) === TRUE) {
        //echo "integrante adicionado com sucesso";
        session_start();
        $_SESSION['mgn'] = "<div class='alert' role='alert' style='background:rgba(229, 171, 36, 0.5);font-size: 20px; font-weight: bold;'>Equipe cadastrada com sucesso!</div>";
        header("Location: inscricao.php");
        
    } else {
        echo "Error: " . $inserir_competidor . "<br>" . $conexao->error;
    }
    
    $conexao->close();
    

}
?>
