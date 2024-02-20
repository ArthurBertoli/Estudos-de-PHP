<?php

    $nome = "Stanley Copus";
    $novoNome = strtoupper($nome);
    echo $novoNome;
    echo "<br>";
    $novoNome2 = strtolower($nome);
    echo "<br>";
    echo "<hr>";

    $mensagem = "Opa eai suav";
    echo substr($mensagem, 4, 4);
    echo "<br>";
    echo "<hr>";

    $objeto = "mouse";
    $novoObjeto = str_pad($objeto, 7, "*", STR_PAD_LEFT);
    echo $novoObjeto;
    echo "<br>";
    echo "<hr>";

    $string = str_repeat("sucesso", 5); //repete sucesso 5x 
    echo $string;
    echo "<br>";
    echo "<hr>";

    $mensagem2 = "opa ";
    echo strlen($mensagem2); //mostra o tamanho
    echo "<br>";
    echo "<hr>";

    $texto = "A  selecao argentina era campea da copa do mundo de 2022";
    $novoTexto = str_replace("argentina", "brasileira", $texto); //substitui a palavra argentina por brasileira; 
    echo strpos($texto, "copa");//mostra a posição da palavra copa
?>