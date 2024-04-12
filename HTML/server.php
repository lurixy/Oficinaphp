<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados enviados pelo cliente
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];
    $mensagem = $_POST['mensagem'];
    
    // Processa os dados recebidos
    $resultado = "Nome: $nome\nIdade: $idade\nCidade: $cidade\nMensagem: $mensagem";
    
    // Retorna o resultado ao cliente
    header('Content-Type: text/plain');
    echo $resultado;
} else {
    // Retorna uma mensagem de erro para requisições inválidas
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    echo 'Método inválido';
}
?>
