<?php
    include("db_connection.php");

$nome = $_POST["nome_visitante"];
$email = $_POST["email_visitante"];
$cpf = $_POST["cpf_visitante"];
$celular = $_POST["cel_visitante"];
$instituicao = $_POST["instituicao"];
$certificado = $_POST["certificado"];
$camiseta = $_POST["camiseta"];
$tamanho = $_POST["tamanho"];

$sql = "INSERT INTO visitante (nome_visitante, cpf_visitante, email_visitante, telefone_visitante, local_estudo, certificado, camiseta, tamanho) VALUES 
('$nome', '$cpf', '$email', '$celular', '$instituicao','$certificado', '$camiseta', '$tamanho')";  

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
    session_start();
        $_SESSION['mgn'] = "<div class='alert' role='alert' style='background:rgba(	0, 135,	143, 0.5);font-size: 20px; font-weight: bold;'>Visitante cadastrado com sucesso!</div>";
        header("Location: inscricao.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
