<!DOCTYPE html>
<html lang="pt-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Raiz quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
    $numero = $_GET['numero'] ?? 0;
?>
<body>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">numero</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <p>Analisando o <strong>Numero <?=$numero?></strong>, temos:</p>
        <?php 
            $raiz = sqrt($numero);
            $cubica = pow($numero, 1.0/3.0);
            echo "A sua raiz quadrada é " . number_format($raiz, 3, ',','.') . "<br>";
            echo "A sua raiz cubica é " . number_format($cubica, 3, ',','.');
        ?>
    </section>
</body>
</html>