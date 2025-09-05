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
            // cotação vinda da API do Banco central
               
            $inicio = date("m-d-Y", strtotime("-7 days")); // o dia de hoje menos 7 dias 
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            // var_dump($dados);

            $cotação = $dados["value"][0]["cotacaoCompra"];

            // Quantos tem na carteira
            $real = $_REQUEST["din"] ??0;

            // Equivalencia em Dólor;
            $dolor = $real / $cotação;

            //Mostrar resultado 
            // echo "Seus R\$ . number_format($real, 2, "," ,".")" . "equivalem a U$\$" . number_format($dolor, 2, ",", ".");

            // Formatação de moedas com internacionalização!
            //Biblioteca intl (Internallization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " .  numfmt_format_currency($padrão, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrão, $dolor, "USD"); 
        ?>
        <button onclick="javascript:history.go(-1)">Volta</button>
    </main>
</body>
</html>



