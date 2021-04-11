<div class="titulo">Atribuições</div>

<ul>
    <li>
        <?php
            $num = 10;
            echo $num . '<br>';
        ?>
    </li>
    <ul>
        <li>
            <?php
                $num = $num - 1;
                echo $num;
            ?>
        </li>
        <li>
            <?php
                echo 'A posição da variável em relação ao comando de printar tem influência no seu valor'
            ?>
        </li>
    </ul>
    <p>
    <li>
        <?php
            echo 'Uma variável pode ser decrementada utilizando os seguintes exemplos: ';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo '$var = 10;';
            ?>
        </li>
        <li>
            <?php
                echo '$var--;';
            ?>
        </li>
        <li>
            <?php
                echo 'echo $var;';
            ?>
        </li>
        <ul>
            <li>
                <?php
                    echo '9';
                ?>
            </li>
        </ul>
    </ul>
    <p>
    <li>
        <?php
            echo 'Uma variável pode ser incrementada utilizando os seguintes exemplos: ';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo '$var = 10;';
            ?>
        </li>
        <li>
            <?php
                echo '$var++;';
            ?>
        </li>
        <li>
            <?php
                echo 'echo $var;';
            ?>
        </li>
        <ul>
            <li>
                <?php
                    echo '11';
                ?>
            </li>
        </ul>
    </ul>
</ul>