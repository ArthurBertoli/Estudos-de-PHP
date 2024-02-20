<?php

    $nomes = array("Felipe","Joao","Kepler","Maria","Maria Joana","Gamja");

    echo is_array($nomes); //é array
    var_dump(is_array($nomes));

    echo in_array("Joao", $nomes); //pesquisar no array

    $keys = array_keys($nomes);
    print_r($keys);

    echo "<hr>";

    $carros = array("Viper", "Uno escada", "Fusca", "Bmw");
    $motos = array("Harley", "Bis", "50cc", "cb1000");

    $veiculos = array_merge($carros, $motos); //juntar arrays
    print_r($veiculos);
    echo "<hr>";

    array_pop($carros);//remove o ultimo elemento
    array_shift($carros); //remove o primeiro elemento

    echo "<br> <hr>";

    $frutas = array("uva","maça","morango","melancia","mamao","manga");
    array_unshift($frutas,"laranha", "acerola"); //insere no inicio do array
    array_push($frutas, "abacate", "melao"); //insere no final do array 
    echo "<br>";
    echo "<hr>";

    $premios = array("campeão","vice","terceiro");
    $values = array("vasco","flamengo","fluminense");
    $times = array_combine($premios, $values); //mesca os arrays
    echo "<br>";
    echo "<hr>";

    $soma = array(5, 6, 10, 7, 9);
    echo array_sum($soma); //soma os valores do array 
    echo "<br>";
    echo "<hr>";

    $data = "20/12/2023";
    $novaData = explode('/', $data);
    print_r($novaData);
    echo "<br>";
    echo "<hr>";

    $frase = "meu nome nao e joao";
    $array = explode(" ", $frase);

    $nomes2= array("Rodrigo", "Carlos", "Neusa", "Talita");
    $string = implode(",", $nomes2);
    echo "<br>";
    echo "<hr>";







?>