<?php

    function exibirNome($nome){
        echo "Meu nome é $nome";
    }

    exibirNome("Adriele");

    echo "<hr>";

    function media($nome, $nota1, $nota2, $nota3, $nota4){
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        if ($media >=7){
            echo "$nome foi aprovado";
        } else {
            echo "$nome foi reprovado";
        }
    }

    media("Julio", 1, 7, 8, 10);

?>