<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays no PHP</h1>
    <hr>

    <h2>Arrays com índice numérico</h2>
<?php
    // Sintaxe com colchetes
    $bandas = ["Rush", "Savatage", "Iron Maiden"];
    
    // Sintaxe usando função array()
    $cursos = array("HTML5", "PHP", "Design Digital", "JS");
    
    // Sintaxe indicando cada índice manualmente
    $comidaDeButeco[0] = "Bolinho de Bacalhau";
    $comidaDeButeco[1] = "Pastel";
    $comidaDeButeco[2] = "Esfiha de carne";

    // Constante de arrays
    define("UNIDADES_SENAC", ["Penha", "Tatuapé", "Itaquera"]);
    const FRUTAS = ["Morango", "Abacaxi"];
?>
    <ul>
        <li>Banda que mais gosto: <?=$bandas[0]?></li>
        <li>Assunto estudado: <?=$cursos[1]?></li>
        <li>Gostaria de lanchar: <?=$comidaDeButeco[0]?></li>
        <li>Unidade do Senac: <?=UNIDADES_SENAC[0]?> </li>
        <li>Fruta: <?=FRUTAS[1]?> </li>
    </ul>
    <h3>Analisando a estrutura de arrays</h3>
    <!-- tags <pre> e <code>
    Elementos úteis para estruturação de texto
    baseado em código -->    
    <pre><?=print_r($bandas)?></pre>
    <pre><?=var_dump($bandas)?></pre>

    <!-- <code> &lt;h1&gt; &lt;h1&gt; </code> -->

    <h2>Arrays associativos</h2>

<?php
$curso = [
    "nome" => "Desenvolvedor Fullstack",
    "unidade" => "Penha",
    "cargaHoraria" => 388
];

$livro = array(
    "titulo" => "Game Of Thrones",
    "ano" => 2001,
    "autor" => "George R.R. Martin"
);
?>
    <p>Curso: <?=$curso["nome"]?> </p>
    <p>Livro: <?=$livro["titulo"]?> </p>

<h2>Matrizes (array dentro de array)</h2>
<?php

$planoDeEstudos = [
    ["React", "React Native", "Vue"],
    ["Photoshop", "Illustrator"],
    ["MySQL", "MongoDB", "IndexedDB", "Firebase"]
];
?>
    <!-- Mini-exercício 
    Crie uma lista ordenada e mostre nela:
    -Front-End: React
    -Design: Illustrator
    -Banco de dados: IndexedDB -->
    <ol>
        <li>Front-End: <?=$planoDeEstudos[0][0]?></li>
        <li>Design: <?=$planoDeEstudos[1][1]?></li>
        <li>Banco de dados: <?=$planoDeEstudos[2][2]?></li>
    </ol>

    <pre> <?=var_dump($planoDeEstudos)?> </pre>

</body>
</html>