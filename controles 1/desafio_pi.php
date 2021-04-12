<div class="titulo">Desafio PI</div>

<!--Minha parte do desafio-->
<ul>
    <b>Minha parte</b>
    <li>
        <?php
            echo pi();
            $pi = 3.14;
            echo '<br>';

            if ($pi <=> pi())
            {
                echo "São iguais!";
            }
            else
            {
                echo "São diferentes!";
            }
        ?>
    </li>
</ul>
<p style="border-bottom: 1px solid #000; margin-top: 0px;">

<!--Resposta-->
<ul>
    <b>Resposta</b>
    <li>
        <?php
            echo pi();
            $pi = 3.14;
            $piErrado = 2.8;
            echo '<br>';

            if ($pi - pi() <= 0.01)
            {
                echo 'Praticamente iguais.';
            }
            if ($pi - $piErrado <= 0.01)
            {
                echo 'Praticamente iguais.';
            }
            else
            {
                echo 'Valor incorreto!';
            }
        ?>
    </li>
</ul>