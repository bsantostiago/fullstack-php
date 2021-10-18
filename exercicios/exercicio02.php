<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 Array</title>

    <style>
        /* odd (ímpar) */
        ul li:nth-child(odd){ color: red; } 

        /* even (par) */
        ul li:nth-child(even){ color: blue; }
    </style>

</head>
<body>
    <h1>Exercício 02 Array (resolvido)</h1>
    <hr>

<?php
    // array numérico
    $dados1 = ["tiago.bsantos", "123abc", 37, "tiago@gmail.com", "masculino", "São Paulo", "SP"];

    // array associativo
    $dados2 = [
        "usuario" => "tiago.bsantos",
        "senha" => "123abc",
        "idade" => 37,
        "email" => "tiago@gmail.com",
        "sexo" => "masculino",
        "cidade" => "São Paulo",
        "estado" => "SP"
    ];
?>

    <ul>
        <li> <?=$dados1[0]?> </li>
        <li> <?=$dados1[3]?> </li>
        <li> <?=$dados1[2]?> </li>
        <li> <?=$dados1[4]?> </li>
    </ul>

    <ul>
        <li> <?=$dados2["usuario"]?> </li>
        <li> <?=$dados2["email"]?> </li>
        <li> <?=$dados2["idade"]?> </li>
        <li> <?=$dados2["sexo"]?> </li>
    </ul>

    

</body>
</html>