<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $nasc = $_GET['nasc']?? '2002';
        $ano = $_GET['ano']?? $atual;
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano voce nasceu ?</label>
            <input type="number" name="nasc" id="nasc" max="<?=($atual)?>" value="<?=$nasc?>">
            <label for="soma">Quer saber sua idade em que ano ? (atualmente estamos em 2023)</label>
            <input type="number" name="ano" id="ano">
            <input type="submit" value="Qual sera minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasc;
            echo "Quem nasceu em $nasc vai ter <strong> $idade anos</strong> em $ano.";
        ?>
    </section>
</body>
</html>