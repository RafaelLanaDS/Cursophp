<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //capiturando os dados do formulario retroalimentado
        $div = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;

    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">dividendo</label>
            <input type="number" name="dividendo" value="<?=$div?>" >
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            //calculos
            $quociente = intdiv($div, $divisor); // intdiv pega o valor inteiro do calculo
            $resto = $div % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$div?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
    </main>
</body>
</html>