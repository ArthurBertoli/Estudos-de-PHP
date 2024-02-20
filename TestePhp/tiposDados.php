<?php

    //STRING
    $nome = "ola";
    var_dump($nome);
    if(is_string($nome)){
        echo "É string";
    }else {
        echo "Não é";
    } 
    echo "<hr>";

    //INT
    $idade = 20;
    var_dump($idade);
    if(is_int($idade)){
        echo "É um int";
    }else {
        echo "Não é int";
    }

    //BOOLEAN
    $admin = false;
    var_dump($admin);
    if(is_bool($admin)){
        echo "É bool";
    }else {
        echo "Não é bool";
    }
    echo "<hr>";

    //ARRAY
    $carros = array("Gol", "Uno", "Camaro", "Mustang");
    var_dump($carros);

    //OBJETOS
    class Cliente{
        public $nome;
        public function atribuirNome($nome){
            $this->$nome =$nome;
        }
    }

    $cliente = new Cliente();
    $cliente->atribuirNome("Rodrigo");

    

?>