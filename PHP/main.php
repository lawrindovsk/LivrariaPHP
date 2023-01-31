<?php
    <?php


    require_once("Livro.php");
    require_once("Cliente.php");


    $enderecAllan = new Endereco(
        "Rua da programação",
        "69",
        "Cidadola",
        "Centro",
        "São Bernardo do Campo",
        "São Paulo",
        "SP",
        "Brasil",
        "40028922"
    );

    $clientGy = new Cliente("12345678910","gyovanna", "1234", "11979669066",$enderecGy,"24/01/2005");

    $livro = new Livros("Teste de Livro", 15);

    echo $livro->estante("Teste de Livro", 15);



?>
?>