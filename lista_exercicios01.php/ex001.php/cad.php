<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>resultado do processo</h1>
        <p>
            <?php 
            $numero = $_GET["numero"];
            echo  "O numero escolhido foi <strong> $numero </strong>" ;
            echo " <br>O seu antessesor é " . $numero - 1 ;
            echo "<br>Seu sucessor é " . $numero + 1 ;
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>