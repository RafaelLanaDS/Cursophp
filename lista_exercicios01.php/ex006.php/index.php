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
        $div = $_GET['dividendo'] ??0;
        $divisor = $_GET['divisor'] ??0;

    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">dividendo</label>
            <input type="number" name="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h1>Estrutura da divisão</h1>
        <tbody>
            <tr>
                <td>sao paulo</td>
                <td>554515425</td>
            </tr>
        </tbody>
    </section>
</body>
</html>