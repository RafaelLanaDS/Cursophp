<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $produto = $_GET['preco']??0;
        $proc = $_GET['porcento']??0;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" min="1" value="<?=$nasc?>">
            <label for="porcentual">Qual valor percentual de Reajuste(0%)</label>
            <input type="range" name="porcento" id="porcento" min="1" max="100">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo " O produto que custava R$ $produto com $proc, de aumento vai passar a custar a {atual} a partir de agora"
        ?>
    </section>
</body>
</html>