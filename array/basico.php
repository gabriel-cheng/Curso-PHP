<div class="titulo">Básico PHP</div>

<?php
    $lista = array(1, 2, 3.4, 'Gabriel');
    print_r($lista);
    echo '<p>';

    $nomes = array('Rose', 'Rafael', 'Sandro', 'Gabriel');

    echo "Olá, meu nome é {$nomes[3]}";
    echo "<br>Minha mãe é a  {$nomes[0]}";
    echo "<br>Meu irmão é o {$nomes[1]}";
    echo "<br>Meu padrasto é o {$nomes[2]}<p>";
    
    $texto = 'Este é um texto para teste de Array';
    echo $texto[0];
    echo '<br>' . mb_substr($texto, 10, 5); //mb_substr($texto 10, 5) vai contar 10 caracteres e pegar os 5 caracteres seguintes
    echo '<br>' . mb_substr($texto, 0, 35); 
    echo '<p>'; 

    //Testes
    $teste = '3';
    $numb = array('sim', 'não');
    
    if($teste == '1')
    {
        echo $numb[0];
    }
    elseif($teste == '0')
    {
        echo $numb[1];
    }
    else
    {
        echo 'Número não identificado.';
    }
    echo '<p>'
?>

<!--Tive que abrir outro bloco Php-->
<?php
    $teste = '1';
    $yn = array('Sim', 'Não');
    switch($teste)
    {
        case '1':
            {
                echo $yn[0];
                break;
                
            }
            case '0':
            {
                echo $yn[1];
                break;
                
            }
            default:
            {
                echo 'Número não identificado!';
                break;

            }
    }    
?>