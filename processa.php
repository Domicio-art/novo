<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$horario = $_POST['horario'];

$sql = "insert into usuarios (nome,email,telefone,sexo,servico,data,horario) values ('$nome','$email','$telefone','$sexo','$servico','$data','$horario')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
       
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href= "_css/estilo.css">
        
    </head>
    <body>
        <div class="container">
           
            <section>
                <h1>Confirmação de Cadastro</h1>
                <hr><br><br>
                
                <?php
                
                if ($linhas ==1){
                    print "Cadastro efetuado com sucesso!";
                }else{
                    print "Cadastro não efetuado. <br> Já existe um usuário com este email!";
                }
                ?>
               
            </section>
        
        </div>
        
    </body>
</html>