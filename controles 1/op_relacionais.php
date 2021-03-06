<div class="titulo">Operadores Relacionais</div>

<ul>
    <li>
        <?php
            echo '1 == 1' . var_dump(1 == 1);
        ?>
    </li>
    <li>
        <?php
            echo '1 > 1' . var_dump(1 > 1);
        ?>
    </li>
    <li>
        <?php
            echo '1 >= 1' . var_dump(1 >= 1);
        ?>
    </li>
    <li>
        <?php
            echo '1 <> 1' . var_dump(1 <> 1); //Sinal de diferente (SQL)
        ?>
    </li>
    <li>
        <?php
            echo '1 != 1' . var_dump(1 != 1); //Sinal de diferente (Outras linguagens (mais comum))
        ?>
    </li>
    <li>
        <?php
            echo '1 >= 1' . var_dump(1 >= 1);
        ?>
    </li>
    <br>
    <li>
        <?php
            echo 'Tipos de comparação:';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo 'Comparações comuns e estritas';
            ?>
        </li>
        <ul>
            <li>
                <?php
                    echo 'Comum: compara somente os valores.';
                ?>
            </li>
            <li>
                <?php
                    echo 'Estrita: compara os valores e tipos.';
                ?>
            </li>
        </ul>
    </ul>
    <ul>
        <li>
            <?php
                echo 'Compara o valor: 1 == \'1\'' . var_dump(1 == '1'); //Comparação comum
            ?>
        </li>
        <li>
            <?php
                echo 'Compara o tipo: 1 === \'1\'' . var_dump(1 === '1'); //Comparação estrita
            ?>
        </li>
    </ul>
    <br>
    <li>
        <?php
            echo 'Diferenças';
        ?>
    </li>
    <ul>
        </li>
        <li>
            <?php
                echo 'Compara o valor: 1 != \'1\'' . var_dump(1 != '1'); //Comparação comum
            ?>
        </li>
        <li>
            <?php
                echo 'Compara o tipo: 1 !== \'1\'' . var_dump(1 !== '1'); //Comparação estrita
            ?>
        </li>
    </ul>
</ul>
<p class="p">
<style>
    p{
        border-bottom: 1px solid #000;
        margin-top: -27px
    }
</style>
<ul>
    <li>
        <?php
            echo 'Relacionais com condições';
        ?>
    </li>
    <ul>
        <li>
            <?php
                $idade = 67;
                if($idade < 18)
                {
                    echo "Você é de menor! Sua idade é $idade anos"; //Interpolação (diferença de aspas duplas e simples)
                }
                else if ($idade <= 65)
                {
                    echo "Você é adulto! Sua idade é $idade anos";
                }
                else
                {
                    echo "Você é de terceira idade! Sua idade é $idade anos";
                }
            ?>
        </li>
    </ul>
    <br>
    <li>
        <?php
            echo 'Spaceship';
        ?>
    </li>
    <ul>
        <li>
            <?php
                var_dump(5 <=> 3); //Operador Spaceship, valor da esqueda maior que o da direita
            ?>
        </li>
        <li>
            <?php
                var_dump(5 <=> 5); //Números iguais
            ?>
        </li>
        <li>
            <?php
                var_dump(5 <=> 7); //Valor da direita maior que o da esquerda
            ?>
        </li>
    </ul>
</ul>
<p class="p">