<div class="titulo">Desafio Equação</div>

<ul>
    <li>
        <?php
            echo 'O valor da seguinte equação <br>';
            echo '([6*(3+2)]²/3*2 - ((1-5)*(2-7)²/2)²)³ / 10³ <br>';

            $soma1 = (6*(3+2))**2;
            $soma11 = 3*2;
            $soma2 = ((1-5)*(2-7)/2)**2;
            $soma3 = 10**3;
            echo '<p>' . 'é: ';
            echo ((($soma1/$soma11) - ($soma2))**3)/$soma3;
        ?>
    </li>
</ul>   