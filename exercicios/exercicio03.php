<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03 (resolvido)</h1>
    <hr>

<?php
$salario = 10000;
if( $salario < 500 ){   // aumenta 15%
    $salarioNovo = $salario * 1.15;
} elseif( $salario <= 1000 ){ // aumenta 10%
    $salarioNovo = $salario * 1.10;
} else { // aumenta 5%
    $salarioNovo = $salario * 1.05; 
}
?>
<p>Salário antigo: <?=$salario?> </p>
<p>Salário antigo: 
    <?=number_format($salario, 2, ",", ".")?> </p>

<p>Salário novo: <?=$salarioNovo?> </p>
<p>Salário novo: 
    <?=number_format($salarioNovo, 2, ",", ".")?> </p>
    
</body>
</html>