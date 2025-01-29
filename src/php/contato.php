<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $descricao = $_POST['descricao'];

    $handle = fopen("contato.txt", "a+");
    fwrite($handle, $nome . ": " . $email . "\n" . $nome . ": " . $descricao . "\n");
    fclose($handle);

    header("location: sobre.php")
?>