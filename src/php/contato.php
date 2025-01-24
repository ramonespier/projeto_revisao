<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $descricao = $_POST['descricao'];

    $handle = fopen("contato.txt", "a+");
    fwrite($handle, $nome . " - " . $email . " - " . $assunto . " - " . $descricao . "\n");
    fclose($handle);

    header("location: sobre.php")


?>