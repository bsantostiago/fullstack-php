<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e Require</title>
    <style>
        .destaque { color: red; }
    </style>
</head>
<body>
    <h1>Usando inclusões de recursos</h1>
    <hr>
    <h2> <?=ESCOLA?> </h2>
    <p> Estamos fazendo o curso de <?=$curso?> </p>

    <h3>Tecnologias que utilizamos</h3>
    <ul>
        <?php foreach($tecnologias as $tecnologia){ ?>
            <li> <?=$tecnologia?> </li>
        <?php } ?>
    </ul>

    <p>O aluno Tiago tem 18 anos e é 
    <?=verificaIdade(18)?>.</p>

    <article>
        <h2>Conteúdo externo</h2>
        <?php include "textos.php"; ?>
    </article>

</body>
</html>