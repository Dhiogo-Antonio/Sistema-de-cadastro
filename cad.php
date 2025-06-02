<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['Nome'] ?? '';
    $idade = $_POST['Idade'] ?? '';
    $telefone = $_POST['Telefone'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    $rm = $_POST['rm'] ?? '';
    $cpf = $_POST['cpf'] ?? '';

    echo "<h2>Dados Recebidos:</h2>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Idade: " . htmlspecialchars($idade) . "<br>";
    echo "Telefone: " . htmlspecialchars($telefone) . "<br>";
    echo "Tipo: " . htmlspecialchars($tipo) . "<br>";

    // Verifica qual campo deve ser exibido de acordo com o tipo
    if ($tipo === "Aluno") {
        if (!empty($rm)) {
            echo "RM do Aluno: " . htmlspecialchars($rm) . "<br>";
        } else {
            echo "<span style='color:red;'>Erro: RM do Aluno não foi preenchido.</span><br>";
        }
    } elseif ($tipo === "Pai" || $tipo === "Responsável") {
        if (!empty($cpf)) {
            echo "CPF do Responsável: " . htmlspecialchars($cpf) . "<br>";
        } else {
            echo "<span style='color:red;'>Erro: CPF do Responsável não foi preenchido.</span><br>";
        }
    } else {
        echo "<span style='color:red;'>Tipo de solicitante inválido.</span><br>";
    }
} else {
    echo "Cadastro feito com sucesso! . <br> . <br>";
}

echo '<button onclick="window.location.href=\'index.html\'">Ir para a página inicial</button>';
?>
