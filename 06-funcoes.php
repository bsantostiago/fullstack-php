<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Funções no PHP</h1>
    <hr>

<?php
    function calculaMedia( float $nota1, float $nota2 ):float {
        return ($nota1 + $nota2) / 2;
    }
?>
<p>Adriano: 7 e 8: <?=calculaMedia(7, 8)?>  </p>
<p>Alicio: 6.5 e 4: <?=calculaMedia(6.5, 4)?> </p>
<p>Sandra: 10 e 9: <?=calculaMedia(10, 9)?> </p>
<p>Yasmin: 8.87 e 6.66: <?=calculaMedia(8.87, 6.66)?> </p>

</body>
</html>