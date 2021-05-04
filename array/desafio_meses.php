<div class="titulo">Desafio Meses</div>

<?php
    echo '<strong>Meu método</strong><p>';
    $select = '2';
    $meses = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );
    
    print_r($meses);
    echo '<p>';
    switch($select)
    {
        case '1':
        {
            echo 'Janeiro';
            break;
        }
        case '2':
        {
            echo 'Fevereiro';
            break;
        }
        case '3':
        {
            echo 'Março';
            break;
        }
        case '4':
        {
            echo 'Abril';
            break;
        }
        case '5':
        {
            echo 'Maio';
            break;
        }
        case '6':
        {
            echo 'Junho';
            break;
        }
        case '7':
        {
            echo 'Julho';
            break;
        }
        case '8':
        {
            echo 'Agosto';
            break;
        }
        case '9':
        {
            echo 'Setembro';
            break;
        }
        case '10':
        {
            echo 'Outubro';
            break;
        }
        case '11':
        {
            echo 'Novembro';
            break;
        }
        case '12':
        {
            echo 'Dezembro';
            break;
        }
        }
        echo '<br>------------------------------------------------------------------------',
        '---------------------------------------------------';
        
        echo '<strong>Método correto</strong><p>';

        $meses = array(
            1 => "Janeiro",
            "Fevereiro",
            "Março",
            "Abril",
            "Maio",
            "Junho",
            "Julho",
            "Agosto",
            "Setembro",
            "Outubro",
            "Novembro",
            "Dezembro"
        );

        print_r($meses)
        ?>