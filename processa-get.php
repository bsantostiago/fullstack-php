<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <h1>Processamento GET</h1>
    <hr>

<?php
/* Array Superglobal: $_GET[] */

// Capturando cada um dos dados
$nome = $_GET["nome"];
$email = $_GET["email"];

/* Se $_GET["interesses"] existir (ou seja, tem pelo menos
um interesse selecionado), a variável receberá o(s) interesses(s). Senão, a variável receberá null (vazio, sem valor) */
$interesses = $_GET["interesses"] ?? null; 

$informativos = $_GET["informativos"];
$mensagem = $_GET["mensagem"];
?>

<h2>Lista de dados obtidos</h2>
<ul>
    <li>Nome: <?=$nome?> </li>
    <li>E-mail: <?=$email?> </li>
    
    <?php 
    /* Se interesses NÃO ESTÁ VAZIO */
    if( !empty($interesses) ){ ?>
    <li>Interesses: 
        <?=implode(", ", $interesses)?> 
    </li>
    <?php } ?>

    <li>Informativos: <?=$informativos?> </li>
    <li>Mensagem: <?=$mensagem?> </li>
</ul>


</body>
</html>