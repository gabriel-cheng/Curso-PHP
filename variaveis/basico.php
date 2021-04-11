<div class="titulo">Básico de Variáveis</div>

<ul>
    <li>
        <?php
            echo 'Toda variável começa com " $ "';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo 'Exemplo: $num = 13;';
                $num = 13;
            ?>
        </li>
        <li>
            <?php
                echo $num = 13;
            ?>
        </li>
        <li>
            <?php
                var_dump($num);
            ?>
        </li>
    </ul>
    <p>
    <li>
        <?php
            echo 'Toda vez que for citar uma variável, precisar usar o " $ "';
        ?>
    </li>
    <li>
        <?php
            echo 'Variáveis são case-sensitive';
        ?>
    </li>
    <li>
        <?php
            $a = 10;
            $b = 20;
            $soma = $a + $b;
            echo 'Soma de variáveis: ', $soma;
        ?>
    </li>
    <li>
        <?php
            echo 'Está setada (0/1)? ', isset($soma);
        ?>
    </li>
    <li>
        <?php
            echo 'Também é possível declarar variável com valor string, ex:'  
        ?>
    </li>
    <ul>
        <li>
            <?php
                $txt = 'Gabriel';
                echo 'Olá, meu nome é ' . $txt;
            ?>
        </li>
        <ul>
            <li>
                <?php
                    echo '$txt = "gabriel"';
                ?>
            </li>
            <li>
                <?php
                    echo 'echo "Olá, meu nome é " . $txt;';
                ?>
            </li>
        </ul>
    </ul>
    <li>
        <?php
            echo 'Variáveis pré-definidas: Clique no botão para acessar o site! <br>';
        ?>
        <a href="https://www.php.net/manual/pt_BR/reserved.variables.php" target="_blank">
            <button>Visitar Site</button>
        </a>
    </li>
</ul>