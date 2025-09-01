<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
        <?php 
        echo "<h1>Trabalhando com Números aleatorios</h1>";
        echo "Gerando um número aleatório entre 0 a 100...<br>";
        $n = random_int(0, 100);
        echo "o numero gerado foi $n";
        ?>
        <button onclick="javascript:document:location.reload()">De novo</button>
    
    </main>
</body>
</html>