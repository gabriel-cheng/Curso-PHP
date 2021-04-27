<div class="titulo">Switch</div>

<ul>
    <li>
        <?php
        $categoria = 'SUV';
        $preco = 0.0;
        $carro = '';

        if($categoria === 'Luxo')
        {
            $carro = 'Mercedes';
            $preco = 250000;
        } else if ($categoria === 'SUV')
        {
            $carro = 'Renegade';
            $preco = 80000;
        } elseif ($categoria === 'Sedan')
        {
            $carro = 'Etios';
            $preco = 55000;
        } else
        {
            $carro = 'Mobi';
            $preco = 33000;
        }

        $precoFormatado = number_format($preco, 2, ',', '.');
        echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
        ?>
    </li>
</ul>
<ul>
    <li>
        <?php
            $categoria = 'Luxo';
            switch (strToLower($categoria))
            {
                case 'luxo':
                {
                    $carro = 'Mercedes';
                    $preco = 2500000;
                    break;
                }
                case 'suv':
                {
                    $carro = 'Renegade';
                    $preco = 80000;
                    break;
                }
                case 'Sedan':
                {
                    $carro = 'Etios';
                    $preco = 55000;
                    break;
                }
                default: //Else
                {
                    $carro = 'Mobi';
                    $preco = 33000;
                    break;
                }
            }

            $precoFormatado = number_format($preco, 2, ',', '.');
            echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";

            ?>
    </li>
</ul>
<ul>
    <li>
        <?php
            echo 'Basicamente, "switch" é outra forma de utilizar "if / else"';
        ?>
    </li>
</ul>