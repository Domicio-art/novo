 <?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from usuarios where servico like '%$filtro%' order by data";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);
 

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
                <h1>Consultas</h1>
                <hr><br><br>
                
                <form method="get" action="">
                    Filtrar por Serviço: <input type="text" name="filtro" class="campo" required autofocus>
                    <input type="submit" value="pesquisar" class="btn">
                
                </form>
               
                
                <?php
                print "Resultado da pesquisa para o Serviço <strong>$filtro</strong>:<br><br>";
                print "$registros registros encontrados.";
                print "<br><br>";
               
                while($exibirRegistros = mysqli_fetch_array($consulta)){
                   

                    $codigo = $exibirRegistros[0]; 
                    $nome = $exibirRegistros[1];
                    $email = $exibirRegistros[2];
                    $telefone = $exibirRegistros[3];
                     $sexo = $exibirRegistros[4];
                     $servico = $exibirRegistros[5];
                     $data =  $exibirRegistros[6];
                     $horario = $exibirRegistros[7];
                     $data = date("d-m-Y", strtotime($data));
                     $horario = date("H:i", strtotime($horario));
                                       
                    
                    
                    print "<article>";
                    
                    print "$codigo<br>";
                    print "$nome<br>";
                    print "$email<br>";
                    print "Telefone: $telefone<br>";
                    print "Sexo: $sexo<br>";
                    print "Serviço: $servico<br>";
                    print "Dia: $data<br>";
                    print "Horário: $horario<br>";
                    
                    print "</article>";
                }
                
                mysqli_close($conexao);
               
                ?>
  
            </section>
            
        
        </div>
        
    </body>
</html>