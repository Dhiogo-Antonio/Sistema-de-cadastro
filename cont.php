<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $rua = $_POST['rua'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $bairro = $_POST['bairro'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $cep = $_POST['cep'] ?? '';

    // Exemplo de exibição dos dados (somente para testes)
    echo "<h1>Dados Recebidos:</h1>";
    echo "Email: $email <br>";
    echo "Telefone: $telefone <br>";
    echo "Rua: $rua <br>";
    echo "Número: $numero <br>";
    echo "Bairro: $bairro <br>";
    echo "Cidade: $cidade <br>";
    echo "CEP: $cep <br>";
    echo "<li><a href= index.html>voltar</a></li>";


    // Aqui você pode salvar os dados em um banco de dados, enviar por email etc.
}
?>
