<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_GET['seg']??0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="">Qual é o total de segundos</label>
            <input type="number" name="seg" id="seg" min="0" step="1" require>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php
            
            $sobra = $total;
            //semanas
            $semanas = (int)($sobra/604800);
            $sobra = $sobra % 604800;

            //total dias 
            $dia = (int)($sobra/86040);
            $sobra = $sobra % 86400;

            //total horas 
            $horas = (int)($sobra/3600);
            $sobra = $sobra % 3600;

            //minutos
            $minutos = (int)($sobra/60);
            $sobra = $sobra % 60;

            $segundo = $sobra;

            echo "Analisando o valor que voce digitou " . number_format($total, 2,',','.') . " equivalem a um total de:";
            echo "<ul><li>$semanas Semanas</li><li>$dia Dias</li><li>$horas Horas</li><li>$minutos Minutos</li><li>$segundo Segundos</li></ul>";
        ?>
    </section>
</body>
</html>