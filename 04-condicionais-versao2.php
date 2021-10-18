<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP (VERSÃO 2)</title>
</head>
<body>
    <h1>Condicionais no PHP (VERSÃO 2)</h1>
    <hr>

    <h2>Simples</h2>
<?php
    $numero = 5;
    if( $numero > 1 ){ // inicio do if $numero
?>
    <p>A variável <?=$numero?> é maior que 1</p>
<?php    
    } // final do if $numero
?>

    <h2>Composta</h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 50; // o que temos no momento
$qtdCritica = 14; // mínimo necessário

    if( $qtdEmEstoque < $qtdCritica ){
?>
    <p>É necessário comprar!</p>
<?php } else { ?>
    <p>Não é necessário comprar</p>
<?php    
    }
?>


    <h2>Encadeada</h2>
<?php
/* Opções do cardápio 
1   -> Pastel
2   -> Pizza
3   -> X-Salada
qualquer outra coisa -> Opção inválida, falar com atendente */

$opcao = 1;

/* ==    comparação somente de valor
1 == '1'    true 
1 == 1      true 

===     comparação de valor E tipo de dado
1 === '1'   false
1 === 1     true */

if( $opcao == 1 ){
    echo "<p>Pastel</p>";
} elseif( $opcao == 2 ){
    echo "<p>Pizza</p>";
} elseif( $opcao == 3 ){
    echo "<p>X-Salada</p>";
} else {
    echo "<p>Opção inválida, falar com atendente</p>";
}
?>

    <h2>Switch/Case</h2>
<?php
switch($opcao){
    case 1: echo "<p>Pastel</p>"; break;
    case 2: echo "<p>Pizza</p>"; break;
    case 3: echo "<p>X-Salada</p>"; break;
    default: 
        echo "<p>Opção inválida, falar com atendente</p>";
    break;
}
?>

</body>
</html>