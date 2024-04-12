<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Comunicação Cliente-Servidor</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
        }
        input[type="text"], select {
            font-size: 1.2em;
            padding: 5px;
        }
        input[type="submit"] {
            font-size: 1.2em;
            background-color: #006699;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        #resultado {
            font-size: 1.2em;
            padding: 10px;
            border: 1px solid #ccc;
            margin-top: 20px;
            text-align: left;
        }
        form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #ccc;
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
    <h1>Dados dos Alunos</h1>
    <form method="post" action="server.php">
        <label for="nome">Nome:</label>
        <br>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="idade">Idade:</label>
        <br>
        <input type="text" id="idade" name="idade" required>
        <br><br>
        <label for="cidade">Cidade:</label>
        <br>
        <select id="cidade" name="cidade" required>
            <option value="">Selecione...</option>
            <option value="São Pedro da União">São Pedro da União</option>
            <option value="Guaxupé">Guaxupé</option>
            <option value="Monte Belo">Monte Belo</option>
            <option value="Muzambinho">Muzambinho</option>
        </select>
        <br><br>
        <label for="mensagem">Mensagem:</label>
        <br>
        <textarea id="mensagem" name="mensagem" rows="5" cols="30" required></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    // Exibe o resultado, se houver
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Define as opções da requisição HTTP
        $opcoes = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => http_build_query($_POST)
            )
        );
        // Cria um contexto HTTP e faz a requisição ao servidor
        $contexto = stream_context_create($opcoes);
        $resultado = file_get_contents('http://localhost/server.php', false, $contexto);
        // Exibe o resultado recebido do servidor
        echo "<div id='resultado'>$resultado</div>";
    }
    ?>
</body>
</html>
