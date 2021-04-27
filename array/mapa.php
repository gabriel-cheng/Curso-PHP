<div class="titulo">Mapa</div>

<?php
    $lista = array(
        "nome" => "Gabriel", //utilizar ' => ' define uma chave para o array
        "cor" => "Pardo",
        "sobrenome" => "Henrique",
    );

    print_r($lista);
    echo '<br>';
    
    $lista["cor"] = "Branco";
    print_r($lista);
    echo '<br>';
    
    $lista[false] = 'Json';    
    print_r($lista);
    echo '<br>';
    
    var_dump($lista[false] = 'Json');
    echo '<br>';
    
    $lista = array(
        "a",
        "b" => "Michael Jackson",
        "teste" => true,
    );
    print_r($lista);
    echo '<br>';    
    
    $lista["b"] = 'Joey Jordison';
    $lista[] = 'Anarquia';
    print_r($lista);
    echo '<br>';    
    
    print_r($lista[0]);

    ?>