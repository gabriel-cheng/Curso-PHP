<div class="titulo">Operadores Lógicos</div>

<ul>
    <li>
        <?php
            print "<p>V ou F</p>";
            var_dump(true);
            echo '<br>';
            var_dump(!true); // not/false
        ?>
    </li>
</ul>
<p class="line">
<ul>
    <li>
        <?php
            print '<p class="strong">Tabela verdade porta AND</p>';
            var_dump(!true);
        ?>
    </li>
    <br>
    <ul>
        <li>
            <?php
                echo 'O "&&" é utilizado para fazer uma operação lógica (AND/E).';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true && true), '<br>';
                //echo var_dump(true and true), '<br>'; //Outra forma de escrever '&&'
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true && false), '<br>';
                //echo var_dump(true and false), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(false && true), '<br>';
                //echo var_dump(false and true), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(false && false);
                //echo var_dump(false and false), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true && 3 > 2 && 6 <= 6); //também se pode fazer assim
                //echo var_dump(true and 3 > 2 and 6 <= 6), '<br>';
                ?>
        </li>
        <ul>
            <li class="strong">
                <?php
                    echo 'Será "true" se todas forem true';
                ?>
            </li>
        </ul>
    </ul>
</ul>
<p class="line">
<ul>
    <li>
        <?php
            print '<p class="strong">Tabela verdade porta OR</p>';
        ?>
    </li>
</ul>
<ul>
    <ul>
        <li>
            <?php
                echo 'O "||" duplo pipe é utilizado para fazer uma operação lógica (OU/OU).';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true || true), '<br>';
                //echo var_dump(true or true), '<br>'; //Outra forma de escrever '&&'
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true || false), '<br>';
                //echo var_dump(true or false), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(false || true), '<br>';
                //echo var_dump(false or true), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(false || false);
                //echo var_dump(false or false), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true || 3 > 2 && 6 <= 6); //também se pode fazer assim
                //echo var_dump(true or 3 > 2 or 6 <= 6), '<br>';
            ?>
        </li>
        <ul>
            <li class="strong">
                <?php
                    echo 'Será "true" se nenhum for todas false';
                ?>
            </li>
        </ul>
    </ul>
</ul>
<p class="line">
<ul>
    <li>
        <?php
            print '<p class="strong">Tabela verdade porta XOR</p>';
        ?>
    </li>
</ul>
<ul>
    <ul>
        <li>
            <?php
                echo 'O "||" duplo pipe é utilizado para fazer uma operação lógica (OU exclusivo).';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true xor true), '<br>';
                //echo var_dump(true != true), '<br>'; //Outra forma de escrever '&&'
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true xor false), '<br>';
                //echo var_dump(true != false), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(false xor true), '<br>';
                //echo var_dump(false != true), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(false xor false);
                //echo var_dump(false != false), '<br>';
            ?>
        </li>
        <li>
            <?php
                echo var_dump(true xor 3 > 2 && 6 <= 6); //também se pode fazer assim
                //echo var_dump(true != 3 > 2 != 6 <= 6), '<br>';
            ?>
        </li>
        <ul>
            <li class="strong">
                <?php
                    echo 'Será "true" se forem diferentes uma da outra';
                ?>
            </li>
        </ul>
    </ul>
</ul>


