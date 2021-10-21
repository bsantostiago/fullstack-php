<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Processamento POST</h1>
    <hr>

<?php 
if( empty($_POST["nome"]) || empty($_POST["email"]) ){ 
?>
    <p style="color:red">
    Você deve preencher os campos obrigatórios!
    </p>

<?php
} else {
    /* Usando filter_var */
    // $nome = filter_var($_POST["nome"], FILTER_SANITIZE_STRING);
    // $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    /* Usando filter_input */
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $interesses = $_POST["interesses"] ?? null; 
    $informativos = $_POST["informativos"];
    $mensagem = $_POST["mensagem"];
?>

<h2>Lista de dados obtidos</h2>
<ul>
    <li>Nome: <?=$nome?> </li>

    <?php if( filter_var($email, FILTER_VALIDATE_EMAIL) ){ ?>
    <li>E-mail: <?=$email?> </li>
    <?php } else { ?>
    <li>E-mail: endereço de e-mail informado é inválido</li>
    <?php } ?>
    
    <?php if( !empty($interesses) ){ ?>
    <li>Interesses: 
        <?=implode(", ", $interesses)?> 
    </li>
    <?php } ?>

    <li>Informativos: <?=$informativos?> </li>
    <li>Mensagem: <?=$mensagem?> </li>
</ul>
<?php
} // fim if/else dos empty (validação de campos obrigatórios)
?>

</body>
</html>