<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04</title>
</head>
<body>
    <h1>Exercício 04 (corrigido)</h1>
    <hr>

<?php
    $linguagens = [
        [
            "linguagem" => "HTML",
            "descricao" => "HyperText Markup Language"
        ],
        [
            "linguagem" => "CSS",
            "descricao" => "Cascading Style Sheets"
        ],
        [
            "linguagem" => "JS",
            "descricao" => "JavaScript"
        ],
        [
            "linguagem" => "PHP",
            "descricao" => "Hypertext Preprocessor"
        ]
    ];
?>

    <table>
        <caption>Relação de Linguagens</caption>
        <thead>
            <tr>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($linguagens as $linguagem){ ?>
            <tr>
                <td> <?=$linguagem["linguagem"]?> </td>
                <td> <?=$linguagem["descricao"]?> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</body>
</html>