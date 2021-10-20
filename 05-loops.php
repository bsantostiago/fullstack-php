<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loops no PHP</title>
</head>
<body>
    <h1>Loops no PHP</h1>
    <hr>

    <h2>while</h2>
<?php
$i = 1;
while( $i <= 5 ){
?>
    <p> <?=$i?> </p>
<?php
    $i++;
}
?>

    <hr>

    <h2>do/while</h2>

<section>
    <h3>Loop que funciona pelo menos 1x</h3>
<?php
$j = 1;
do {
?>
    <div>
        <p> Valor de J é: <?=$j?> </p>
    </div>
<?php
    $j++;
} while( $j <= 10 );
?>
</section>

    <hr>

    <h2>for</h2>

<!-- Exercício (faça aqui mesmo!)

1) Crie um array contendo o nome dos 12 meses do ano

2) Usando um loop for, monte uma lista ordenada de 12 itens e mostre em cada item o nome de cada mês do ano.
-->

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>

<ol>
<?php for( $i = 0; $i < count($meses); $i++ ) { ?>

    <li> <?=$meses[$i]?> </li>

    <?php } ?>
</ol>

    <hr>

    <h2>foreach</h2>

<ol>
    <!-- foreach (para cada elemento) -->
<?php foreach($meses as $mes){ ?>
    <li> <?=$mes?> </li>
<?php } ?>
</ol>    

<?php
$alunos = [
    [
        "nome" => "Chaves",
        "idade" => 8
    ],
    [
        "nome" => "Kiko",
        "idade" => 9
    ],
    [
        "nome" => "Chiquinha",
        "idade" => 10
    ]
];
    foreach( $alunos as $aluno ){
?>
    <p> Nome: <?=$aluno["nome"]?> </p>
    <p> Idade: <?=$aluno["idade"]?> </p>

<?php } ?>




</body>
</html>