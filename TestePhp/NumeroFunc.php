<?php

    $db  = 1234.56;
    $preco = number_format($db,2
    ,",",".");

    echo "O valor do produto é $preco";

    echo "<hr>";

    echo round(3.6); //arredondar 
    echo "<hr>";

    echo ceil (8.9); //arredonda sempre pra cima
    echo "<hr>";

    echo floor(3.1); //arredonda pra baixo
    echo "<hr>";

    echo rand(1,90); // gera numero entre 1 e 90;
?>