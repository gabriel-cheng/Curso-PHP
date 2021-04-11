<div class="titulo">Contantes</div>

<ul>
    <li>
        <?php
            define('TAXA_DE_JUROS', 5.9);
            echo TAXA_DE_JUROS;
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo 'Toda constante é feita utilizando underline e caixa alta, ex: NOME_GABRIEL';
            ?>
        </li>
        <li>
            <?php
                echo 'Constantes não usam "$" e nem tipo string';
            ?>
        </li>
        <li>
            <?php
                echo 'precisa usar o "define()" para validar como constante, ex:';
            ?>
        </li>
        <ul>
            <li>
                <?php
                    echo 'define("TAXA_DE_JUROS", 5.9)';
                ?>
            </li>
        </ul>
    </ul>
    <br>
    <li>
        <?php
            echo 'Outra forma de usar constantes é como se define variáveis em outras linguagens, ex:';
        ?>
    </li>
    <ul>
        <li>
            <?php
                const NOVA_TAXA = 5.9; //Definindo "NOVA_TAXA" como constante
                echo NOVA_TAXA;
            ?>
        </li>
    </ul>
    <br>
    <li>
        <?php
            echo 'Não se pode utilizar este formato:';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo '$valorVariavel = 2.5';
            ?>
        </li>
        <li>
            <?php
                echo 'echo \'TESTE_TAXA = $valorVariavel\'';
            ?>
        </li>
    </ul>
    <br>
    <li>
        <?php
            echo 'Mas pode-se utilizar este formato:';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo '$valorVariavel = 2.5';
            ?>
        </li>
        <li>
            <?php
                echo 'define(NOVA_TAXINHA = $valorVariavel)';
            ?>
        </li>
        <li>
            <?php
                echo 'echo \'NOVA_TAXINHA;\'';
            ?>
        </li>
        <li>
            <?php
                $valorVariavel = 2.5;
                define('NOVA_TAXINHA', $valorVariavel);
                echo NOVA_TAXINHA;
            ?>
        </li>
    </ul>
    <br>
    <li>
        <?php
            echo 'Pode ser utilizada operações matemáticas, ex:';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo 'echo ';
            ?>
        </li>
        <li>
            <?php
                echo 'echo \'TESTE_TAXA = $valorVariavel\'';
            ?>
        </li>
    </ul>
    <br>
    <li>
        <?php
            echo 'OBS: Não funciona utilizando concatenação, ex:';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo 'define(\'NOVA_TAXARS\' . 2.5)';
            ?>
        </li>
    </ul>
    <li>
            <?php
                echo 'Também é uma constante:';
            ?>
    </li>
    <ul>
        <li>
            <?php

                echo 'Linha: ' . __LINE__;
            ?>
        </li>
        <li>
            <?php

                echo 'Arquivo: ' . __FILE__;
            ?>
        </li>
        <li>
            <?php
                echo 'Diretório: ' . __DIR__;
            ?>
        </li>
    </ul>
</ul>