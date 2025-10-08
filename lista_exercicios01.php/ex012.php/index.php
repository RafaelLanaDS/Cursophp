<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="">Qual é o total de segundos</label>
            <input type="number" name="" id="">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php 
            echo "Analisando o valor que voce digitou <strong>{} segundos</strong> equivalem a um total de:";
            echo "<ul><li>Semanas</li><li>Dias</li><li>Horas</li><li>Minutos</li><li>Segundos</li></ul>"
        ?>
    </section>
</body>
</html>