<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (resolvido)</title>
</head>
<body>
    <h1>Exercício 01 (resolvido)</h1>
    <hr>

<?php
// Configurando o timezone para nossa região
date_default_timezone_set('America/Sao_Paulo');

// $data = "14/10/2021"; // data estática (string)
$data = date("d/m/Y");// data dinâmica (obtida do servidor)
$hora = date("h:i");
define("NOME", "Tiago");
$curso = "Gastronomia";
$cargaHoraria = 500;
$limiteFaltas = $cargaHoraria / 4; // $cargaHoraria * 0.25

/* apresentando o nome da pessoa, o nome do curso, a carga horária do curso e o limite de faltas. */
echo "<p>O aluno ".NOME." está fazendo o curso de $curso com carga horária de $cargaHoraria horas, sendo o limite de faltas de $limiteFaltas horas.</p>"; 
?>

<p>
O aluno <?=NOME?> está fazendo o curso de <?=$curso?> com carga horária de <?=$cargaHoraria?> horas, sendo o limite de faltas de <?=$limiteFaltas?> horas.</p>

<p>Data: <?=$data?></p>
<p>Hora: <?=$hora?></p>



</body>
</html>