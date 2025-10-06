<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias Aritimeticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['1v']??0;
        $valor2 = $_GET['2v']??0;

        $pesso1 = $_GET['1p']??0;
        $pesso2 = $_GET['2p']??0;
    ?>
    
    <main>
        <h2>Medias Aritimeticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="1v">1º Valor</label>
            <input type="number" name="1v" id="1v">

            <label for="1p">1º Pesso</label>
            <input type="number" name="1p" id="1p">

            <label for="2v">2º Valor</label>
            <input type="number" name="2v" id="2v">

            <label for="2p">1º Pesso</label>
            <input type="number" name="2p" id="2p">

            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Calculo das medidas</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <?php 
            $media_simples = ($valor1 + $valor2) / 2;

            $media = ($pesso1 * $valor1) + ($pesso2 * $valor2);
            $soma_pessos = $pesso1 + $pesso2;
            $media_ponderada = $media / $soma_pessos;

            echo "A <strong>Média arirmética simples</strong> entre os valores é igual a " . number_format($media_simples, 2, '.',',') . '<br>';

            echo "A <strong>Média arirmética ponderada</strong> com pesos $pesso1 e $pesso2 é igual a " . number_format($media_ponderada, 2, '.',',');

           // echo "media = $media, soma pessos = $soma_pessos, media ponderada = // $media_ponderada "
        ?>
    </section>
</body>
</html>