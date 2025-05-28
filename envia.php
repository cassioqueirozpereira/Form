<?php 
    $nome = addslashes($_POST["nome_box"]);
    $email = addslashes($_POST["email_box"]);
    $telefone = addslashes($_POST["telefone_box"]);
    $mensagem = addslashes($_POST["text_box"]);

    $destino = "cassioqueirozpereira@gmail.com";
    $assunto = "Coleta de dados - meu currículo";
    
    $informacoes = "Nome: " . $nome . "\n Email: " . $email . "\n Telefone: " . $telefone . "\n Mensagem: " . $mensagem;
    
    $cabeca = "From: cassionoway@gmail.com" . "\n Reply-to: " . $email . "\n X=Mailer:PHP/" . phpversion();

    if (mail($destino, $assunto, $informacoes, $cabeca)) {
        echo("E-mail enviado com sucesso!");
    }
    else {
        echo("Houve um erro ao enviar o E-mail!");
    }
    
?>