<div class="titulo">Operações com Arrays</div>

<?php
    $dados1 = [
        "nome" => "Gabriel",
        "idade" => "23"
    ];
    
    $dados2 = [
        "cidade" => "Araçatuba",
        "bairro" => "Etheocle Turrini",
        "faculdade" => "Fatec de Araçatuba"
    ];

    $juntos = $dados1 + $dados2;
    $body = 'Olá';
    
    print_r($juntos);
    echo '<br>É um Array (1-S/0-Ñ): ' . is_array($dados2);
    echo '<br>É um Array (1-S/0-Ñ): ' . is_array($body);
    echo '<br>Quantos elementos tem no Array: ' . count($dados2);

    $dadosVariaveis = [
        "Nome" => "Gabriel",
        "Sobrenome" => "Carvalho",
        "Idade" => "23",
        "Curso" => "ADS"
    ];
    
    $dadosVariaveis2 = [
        "Rua" => "Ilmer Borghi",
        "Número" => "81",
        "Referência" => "Nenhuma"
    ];
    echo '<p><strong>-------------------------------------------------------------------</strong>';
    echo '<p><strong>Array de forma aleatória<br></strong>';
    
    $indice = array_rand($juntos);

    echo "$indice = $juntos[$indice]";
    echo '<p><strong>-------------------------------------------------------------------</strong>';
    echo '<p><strong>Interpolando valores<br></strong>';

    echo "{$juntos['bairro']}<br>"; //Precisa interpolar com algo que está definido dentro de um Array

    unset($juntos["bairro"]);
    print_r($juntos);

    echo '<p><strong>-------------------------------------------------------------------</strong>';
    echo '<p><strong>Ordenação<br></strong>';
    $valor1 = [1, 3, 5, 7, 9];
    $valor2 = [0, 2, 4, 6, 8, 10];
    $concatena = $valor1 + $valor2; //Gera um array priorizando o $valor1 e completa com os valores restantes de $valor2

    $concateDois = array_merge($valor1, $valor2); //Concatena o conteúdo dos Arrays $valor1 e $valor2
    print_r($concateDois);
    echo '<br>';
    print_r($concatena);
    
    echo '<br>';

    sort($concateDois); //Ordena os valores do Array (alfabética ou numérica)
    print_r($concateDois);

    echo '<p><strong>-------------------------------------------------------------------</strong>';
    //A preferência é o lado esquerdo, ex:
    echo '<p><strong>Exemplo de preferência</strong>';
    
    $teste1 = [
        "nome" => "Lucas"
    ];
    
    $teste2 = [
        "nome" => "Gabriel"
    ];
    
    echo '<br>$teste1 = ["nome" => "Lucas"];';
    
    echo '<br>$teste2 = ["nome" => "Gabriel"];<br>';
    
    $junteste = $teste1 + $teste2;
    echo '<br>$junteste = $teste1 + $teste2<br>';
    
    echo '<br>Irá imprimir somente o nome Lucas!<br>';
    print_r($junteste);
    echo '<p><strong>-------------------------------------------------------------------</strong>';
?>
<p>
<form action="#" method="POST">
        <select>
            <option>-Endereços-</option>
            <option>Gabriel</option>
            <option>dados completos</option>
        </select>
        <input type="text" name="dado" placeholder="Informe um endereço">
        <button class="btn">Mostrar dados</button>
</form>
<?php
    $post = $_POST['dado'];
    if($post == "Gabriel")
    {
        print_r($dadosVariaveis);
    }
    elseif($post == "dados completos")
    {
        print_r($dadosVariaveis + $dadosVariaveis2);
    }
    else
    {
        echo "Informe um endereço de pesquisa válido!";
    }
?>