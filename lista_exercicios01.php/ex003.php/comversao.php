<?php 
    // cotação copiada do Google
    $contação = 5.45;

    // Quantos tem na carteira
    $real = 1000;

    // Equivalencia em Dólor;
    $dolor = $real / $contação;

    //Mostrar resultado 
    // echo "Seus R\$ . number_format($real, 2, "," ,".")" . "equivalem a U$\$" . number_format($dolor, 2, ",", ".");

    // Formatação de moedas com internacionalização!
    //Biblioteca intl (Internallization PHP)

    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus" .  numfmt_format_currency($padrão, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrão, $dolor, "USD"); 

?>