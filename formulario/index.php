<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formStyle.css">
    <title>Formulário de Cadastro</title>
    
</head>
<body>

<div class="container">
    <h2>Cadastro de Usuário</h2>
    <form action="processa.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Idade:</label>
        <input type="text" name="idade" required>

        <label>Endereço:</label>
        <input type="text" name="endereco" required>

        <label>E-mail:</label>
        <input type="email" name="email" required>

        <label>Telefone:</label>
        <input type="text" name="telefone" required>

        <label>Mensagem:</label>
        <textarea name="mensagem"></textarea required>

        <button type="submit">Cadastrar</button>
    </form>
</div>

</body>
</html>