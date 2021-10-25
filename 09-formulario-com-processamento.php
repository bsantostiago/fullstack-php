<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e PHP</title>
</head>
<body>
    <h1>Formulário HTML com processamento PHP junto</h1>
    <hr>

<?php
/* isset() -> verifica se algo está definido/setado/existe
Detectando se o botão enviar do form foi acionado */
if( isset($_POST["enviar"]) ){

    if( !empty( $_POST["nome"]) && 
        !empty($_POST["email"]) && !empty($_POST["mensagem"]) ){
        /* Capturando os dados do formulário */
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_STRING);
?>
        <h2>Dados recebidos:</h2>
        <p>Nome: <?=$nome?> </p>
        <p>E-mail: <?=$email?> </p>
        <p>Mensagem: <?=$mensagem?> </p>
<?php } else { ?>
        <p>Você deve preencher os campos!</p>
        <p><a href="09-formulario-com-processamento.php">Voltar</a></p>
<?php        
    } 
} else { 
    include "formulario.html"; 
}
?>
</body>
</html>