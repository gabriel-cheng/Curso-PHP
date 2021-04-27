<div class="titulo">Desafio Índice</div>

<?php
    $lista = array(
        1,
        4 => 2,
        3 => 3,
        'a' => 4,
        5,
        'g' => 6,
        '06' => 7,
        8 => 8,
    );

    echo '<strong>O que eu acho: </strong><br>';
    echo 'Array( [0] = 1, [4] = 2, [3] = 3,
    [a] = 4, [1] = 5, [g] = 6, [06] = 7,
    [8] = 8 ) <p>';

    echo '<strong>----------------------------------------------------------------------------</strong><br>';

    echo '<strong>O correto é: </strong><br>';
    print_r($lista);
?>