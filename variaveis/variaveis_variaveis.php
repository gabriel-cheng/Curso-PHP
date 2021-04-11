<div class="titulo">Variáveis variáveis</div>

<ul>
    <li>
        <?php
            $a = 'valorA';
            $$a = 'valorAA';

            echo "$a ${$a}"; //É a mesma coisa da segunda
        ?>
    </li>
        <ul>
            <li>
                <?php
                    print "$a {$$a}"; //É a mesma coisa da primeira
                ?>
            </li>
        </ul>
    <li>
        <?php
            echo 'A ideia é que a segunda variável é criada à partir do valor da primeira';
        ?>
    </li>
</ul>