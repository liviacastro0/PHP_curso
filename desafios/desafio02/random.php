<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randorização de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>gerando números aleatórios</h1>
        <?php
        $min=0;
        $max=100;
        
          $num=rand($min, $max);
        echo"gerando um número automático entre $min e $max...\n";
        echo"o número gerado foi $num";
        ?>

        <button onclick="javascript:document.location.reload()">
    &#x1F504; Gerar novamente</button>
    </main>
</body>
</html>