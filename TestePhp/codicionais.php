<?php

    $numero = 10;

    if($numero == 10){
        echo "oi";
    }else {
        echo "salve";
    }

    echo "<br>";
    echo "<hr>";

    $cor = "vermelho";

    switch ($cor):
        case "vermelho":
            echo 'oi';
            break;
        
        case "verde";
            echo 'opa';
            break;

        default:
            echo "ding";
            break;

    endswitch;

    $cont = 1;
    while($cont <=10 ){
        $cont++;
    }
    echo "<br>";
    echo "<hr>";

    do {
        $cont++;
    } while($cont <= 10);

    echo "<br>";
    echo "<hr>";

    for($cont = 0; $cont < 10; $cont++){
        
    }





?>