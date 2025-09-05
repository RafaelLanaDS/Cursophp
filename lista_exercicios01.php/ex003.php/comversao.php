<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            // cotação copiada do Google
            $contação = 5.45;

            // Quantos tem na carteira
            $real = $_REQUEST["din"] ??0;

            // Equivalencia em Dólor;
            $dolor = $real / $contação;

            //Mostrar resultado 
            // echo "Seus R\$ . number_format($real, 2, "," ,".")" . "equivalem a U$\$" . number_format($dolor, 2, ",", ".");

            // Formatação de moedas com internacionalização!
            //Biblioteca intl (Internallization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus" .  numfmt_format_currency($padrão, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrão, $dolor, "USD"); 
        ?>
        <button onclick="javascript:history.go(-1)">Volta</button>
    </main>
</body>
</html>



