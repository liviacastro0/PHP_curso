<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultados</h1></header>
    <main>
        <?php 
         $num = $_GET["num"] ?? "sem numero";
        $ant = $num - 1;
        $suc = $num + 1;
        echo" O antecessor de $num é $ant \n";
        echo"O sucessor de $num é $suc \n";
        ?>
    </main>
</body>
</html>