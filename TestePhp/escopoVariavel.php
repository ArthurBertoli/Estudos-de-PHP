<?php

    $nome = "Diley";

    function exibeNome() {
        global $nome;
        echo $nome;
    }

    exibeNome();
    echo "<hr>";

?>