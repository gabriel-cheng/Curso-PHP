<div class="titulo">Desafio string</div>

<ul>
    <li>
        <?php
            print 'Avaliando os métodos da documentação da string, qual o método que a posição
            do texto "abc" na string "!AbcaBcabc" retorne 1?'
        ?>
    </li>
    <ul>
        <li>
            <?php
                print strpos('!AbcaBcabc', 'abc'); //Formato que conta com letra maiúscula.
            ?>
        </li>
        <li>
            <?php
                print stripos('!AbcaBcabc', 'abc'); //Formato que não conta com letra maiúscula.
            ?>
        </li>
    </ul>
</ul>