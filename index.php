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
                <h1>Agendamento de Clientes</h1>
                <hr><br><br>
                <form method="post" action="processa.php">
                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <br><br>
                    
                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    Email<br>
                    <input type="email" name="email" class="campo" maxlength="50" required><br>
                    Telefone<br>
                    <input type="text" name="telefone" class="campo" maxlength="15" required><br>
                    Sexo<br>
                <select name="sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>

                </select><br><br>

                    Serviço<br>
                <select name="servico">
                    <option value="cabelo">Cabelo</option>
                    <option value="unha">Unha</option>
                    <option value="sobrancelha">Sobrancelha</option>

                </select><br><br>
                     Data<br>
                    <input type= "date"name="data" class="campo" maxlength="10" required><br>
                    Horário<br>
                    <input type="time" name="horario" class="campo" maxlength="5" required><br>
        
                    
                </form>
             </section>             
        
        </div>
        
    </body>
</html>