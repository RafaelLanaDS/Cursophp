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
        $prec = $_GET['preco']??0;
        $reaj = $_GET['porcentual']??0;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$prec?>">
            <label for="porcentual">Qual valor percentual de Reajustes <strong> <span id="p">?</span>%</strong></label>

            <input type="range" name="porcentual" id="porcentual" min="0" max="100" step="1" oninput="mudavalor()" value="<?=$reaj?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $aumento = $prec * $reaj / 100;
        $novo = $prec + $aumento
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo " O produto que custava R$ $prec com R$$reaj, de aumento vai passar a custar a R$$novo a partir de agora"
        ?>
    </section>
    <script>
        mudavalor()
        function mudavalor(){
            p.innerText = porcentual.value;
        }
    </script>
</body>
</html>