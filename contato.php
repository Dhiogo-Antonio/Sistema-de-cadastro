<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    
    input:hover{
      background-color: #28a9e6; 
    }

    *{
    padding: 0px;
    margin: 0px;
    flex-wrap: wrap;
}

body{
    background: linear-gradient(#01d9ff, black);
    padding: 32vh;
}



input{
    padding: 10px;
    margin: 15px;
    border-radius: 15px;
}

.rm{
    font-size: 15px;
}

.cpf{
    font-size: 15px;
}

.button{
    background-color: #01d9ff;
    box-shadow: 5px 5px black;
}

.button2{
    background-color: #01d9ff;
    box-shadow: 5px 5px white;
    
}

h1{
    text-align: center;
    padding: 8px;
    color: azure;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 45px;
}



.cadastro{
    display: inline;
    justify-content: space-around;
    align-items: center;
}

.contato{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 60px;
}

.informacoes{
    font-size: 25px;
    color: aliceblue; 
}
   
</style>
<body>
     <form action="cont.php" method="POST">
    <h1>Contato:</h1>

<div class="contato">
           
                <label for="email" class="informacoes">E-mail:</label>
                <input type="text" name="email"><br><br>
                <label for="telefone" class="informacoes">Telefone:</label>
                <input type="tel" name="telefone"><br><br>
                <label for="rua" class="informacoes">Rua:</label>
                <input type="text" name="rua" id="rua" required><br><br>

                <label for="numero" class="informacoes">Número:</label>
                <input type="text" name="numero" id="numero" required><br><br>

                <label for="bairro" class="informacoes">Bairro:</label>
                <input type="text" name="bairro" id="bairro" required><br><br>

                <label for="cidade" class="informacoes">Cidade:</label>
                <input type="text" name="cidade" id="cidade" required><br><br>

                <label for="cep" class="informacoes">CEP:</label>
                <input type="text" name="cep" id="cep" pattern="\d{5}-?\d{3}"
                placeholder="00000-000" required><br><br>

                

                 <a href="index.html">
        <input type="button" value="Voltar" class="button2"></a>
        
        <input type="submit" value="Enviar Inscrição" class="button2">
            </form>
        </div>
</body>
</html>