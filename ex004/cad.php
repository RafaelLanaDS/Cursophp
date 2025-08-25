<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado do processo</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["name"] ?? "sem nome"; // variavel super global
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "Seu nome é $nome, e seu sobre nome é $sobrenome ??"
        
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>