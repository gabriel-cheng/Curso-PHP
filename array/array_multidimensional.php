<div class="titulo">Arrays Multidimensionais</div>

<?php
    $dados = [
        [
            "nome" => "Gabriel",
            "idade" => 23,
            "curso" => "ADS"
        ],
        [
            "nome" => "Marcos",
            "idade" => 43,
            "curso" => "nenhum"
        ]
        ];

    print_r($dados);
    echo '<p>';
    
    $dados[] = [
        "Nome" => "Jax",
        "Sobrenome" => "Teller",
        "Série" => "Sons of Anarchy"
    ];
    
    print_r($dados);
    
    echo '<p>';

    $dados[0]["idade"] = 26; //Alterando valor de uma chave específica
    print_r($dados);
?>