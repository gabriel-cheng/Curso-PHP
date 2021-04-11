<div class="titulo">Desafio Variáveis</div>

<ul>
    <li>
        <?php
            echo 'Imprima a seguinte frase utilizando apenas a variável "$a":';
            echo 'Nossa! Eu consegui resolver o exercício.'
        ?>
    </li>
    <li>
        <?php
            $a = 'Nossa';
            $Nossa = 'Eu';
            $Eu = 'consegui';
            $consegui = 'resolver';
            $resolver = 'o exercício';

            echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a}.";
        ?>
    </li>
</ul>