<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio salario minimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_578.00;
        $salario = $_GET['sal'] ??0;
    ?>
    <main>
        <h1>Infrome seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">salario (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>considerando o salario minimo de R$<?=number_format($minimo, 2, ",",".")?></p>
            <input type="submit" value="calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "Ganha $tot salarios minimos + R\$". number_format($dif, 2,',','.')
        ?>
    </section>

</body>
</html>