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
                echo 'Toda constante é feita utilizando underline e letras maiúsculas, ex: NOME_GABRIEL';
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
                    echo 'define("TAXA_DE_JUROS", 5.9)'
                ?>
            </li>
        </ul>
    </ul>
    <br>
    <li>
        <?php
            echo 'Outra forma de usar constantes é como se define variáveis em outras linguagens, ex:'
        ?>
    </li>
    <ul>
        <li>
            <?php
                const NOVA_TAXA = 5.9; //Definindo "TAXA_DE_JUROS" como constante
                echo NOVA_TAXA;
            ?>
        </li>
    </ul>
</ul>