<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = ($_POST['nome']);
        $idade = ($_POST['idade']);
        $endereco = ($_POST['endereco']);
        $email = ($_POST['email']);
        $telefone = ($_POST['telefone']);
        $mensagem = ($_POST['mensagem']);

        echo "<h2>Dados Cadastrados:</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Idade:</strong> $idade anos</p>";
        echo "<p><strong>Endereço:</strong> $endereco</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Telefone:</strong> $telefone</p>";
        echo "<p><strong>Mensagem:</strong> $mensagem</p>";
        echo "<br><a href='index.php'>Voltar</a>";
    } else {
        echo "Acesso inválido.";
    }
    ?>
</body>

</html>