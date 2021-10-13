<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>

    <style>

        <?php $cor = "purple"; ?>

        p { color: <?=$cor?> }

    </style>

</head>
<body>
    <h1 style="background:<?=$cor?>">Usando variáveis e constantes</h1>
    <hr>

    <?php
        // Variáveis
        $curso = "Desenvolvedor Fullstack"; // string
        $ano = 2021; // int ou integer
        $preco = 1278.65; // float ou real


        echo "<h2>Saídas usando echo e sintaxe completa do PHP</h2>";
        echo $curso;
        echo "<br>";
        echo $ano;

        echo "<p>$curso</p>";
        echo "<p>$ano</p>";

        // aspa simples não interpreta código dinâmico
        echo '<p>$curso</p>'; 

        // Concatenação (operador ponto)
        echo '<p>'.$curso.'</p>';
    ?>

    <h2>Saídas usando versão simplificada/abreviada do PHP</h2>
    <p>  <?php /*echo $curso;*/ ?> </p>
    <p> <?=$curso?> </p>

    <?php
        // SAÍDA COMPLETA VIA PHP
        echo "<p>O curso de $curso, foi lançado em $ano com o preço de $preco.</p>";
    ?>

    <!-- SAÍDA ABREVIADA/SIMPLIFICADA -->
    <p>O curso de <?=$curso?>, foi lançado em <?=$ano?> com 
    preço de <?=$preco?> </p>

    <?php
    /* Constantes */

    // Sintaxe tradicional
    define("MEU_NOME", "Tiago Bezerra dos Santos");

    // Sintaxe moderna
    const ESCOLA = "Senac São Paulo";
    ?>

    <p> Autor do site: <?=MEU_NOME?> </p>
    <p> Escola: <?=ESCOLA?> - Curso: <?=$curso?></p>


</body>
</html>