<?php

    $carros = array("Mercedes", "Bmw", "Viper", "Corvette");
    $carros[] = "Mustang";
    print_r($carros);
    echo "<br>";
    echo "<hr>";

    //Count
    echo count($carros);
    echo "<br>";
    echo "<hr>";

    //Foreach
    foreach($carros as $valor) {
        echo $valor ."<br>";
    }
    echo "<hr>";

    //Arrays associativos
    $pessoa = array("nome"=> "rodrigo", "idade"=> 23, "altura"=> 1.75);
    $pessoa["cidade"] = "Itabuna";

    foreach($pessoa as $indice => $valor) {
        echo $indice.": ".$valor."<br>";
    }
    echo "<br>";
    echo "<hr>";

    //Arrays multidimensionais
    $times = array("cariocas"=> array("campeao"=>"vasco", "vice"=>"botafogo", "terceiro"=>"flamengo"), "paulistas"=> array("são paulo", "palmeiras", "santos"));
    echo $times["paulistas"][1];
    echo "<br>";

    foreach($times["cariocas"] as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    }





;?>