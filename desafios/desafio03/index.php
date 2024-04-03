<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERSOR DE MOEDAS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Seu conversor de moedas</h1>
        <?php
        $cotação=4.97;

        $real=$_GET["din"]?? 0; 

        $dolar= $real/ $cotação;
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD") ;
        ?>
        <button onclick="javascript:history.go(-1)">
    &#x1F504; Gerar novamente</button>
    </main>
</body>

</html>