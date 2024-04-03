<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos primitivos</h1>
    <?php
    //0x= hexadecimal
    //0b = binário 
    //0 = o= Octal
   // potencias são float ex.: 3e2, mas taambém podem ser int no caso de uma coerção
   //$num (integer) 3e2; que é o mesmo que 3 x 10^2
    //$num = 010;
    //echo"O valor da variável é $num";
    //$v = 300;
    //var_dump($v);
    // o tipo boleano mostra as informações como sendo true(qualquer número diferente de 0) ou false(0, ou qualquer denominação pra nulo)

    // para o tipo array, que é uma denominação composta temos o seguinte exemplo
    //$vet=[6, 2.5, "Maria", 3, false];
    //var_dump($vet)
    class Pessoa {
        private string $nome;
    }
    $p= new Pessoa;
    var_dump($p);//exemplo variável composta para objt
    ?>
</body>
</html>