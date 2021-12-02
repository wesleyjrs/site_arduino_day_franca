<?php
session_start();
            include('../db_connection.php');
            $email = $_POST['email_login'];
            $senha = $_POST['senha_login']; //base64_encode($_POST['senha_login']);

            $sql = mysqli_query($conexao, "SELECT * FROM admin WHERE admin_email = '$email' AND admin_senha = '$senha';") or die(mysqli_error($conexao));
            $row = mysqli_num_rows($sql);

            while($dado = $sql->fetch_array()){
                $nome = $dado["admin_nome"];
            }


            if($row > 0){
         
                $_SESSION['emailAdmin'] = $_POST['email_login'];
                $_SESSION['nome_admin'] = $nome;

                header("Location:index_admin.php");
                

            }else{
                session_start();
                $_SESSION['mgn'] = "<div class='alert alert-danger' role='alert' >Login ou senha inválidos</div>";
                header("Location: index.php");

            }
?>