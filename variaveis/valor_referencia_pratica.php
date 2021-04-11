<div class="titulo">Valor x Referência - Prática</div>

<ul>
    <li>
        <?php
            echo 'Valor'
        ?>
    </li>
    <ul>
        <li>
            <?php
                $variavel = 'valor x referencia';
                echo $variavel;
            ?>
        </li>
        <li>
            <?php
                $variavelValor = $variavel;
                echo $variavelValor;
            ?>
        </li>
        <li>
            <?php
                $variavelValor = $variavel;
                echo $variavelValor;
            ?>
        </li>
        <li>
            <?php
                $variavelValor = 'novo valor';
                echo $variavel;
            ?>
        </li>
        <li>
            <?php
                echo $variavelValor;
            ?>
        </li>
    </ul>
    <br>
    <li>
        <?php
            echo 'Referência'
        ?>
    </li>
    <ul>
        <li>
            <?php
                $variavelReferencia = &$variavel;
                echo $variavelReferencia;
            ?>
        </li>
        <li>
            <?php
                $variavelReferencia = 'mesma referência';
                echo $variavelReferencia;
            ?>
        </li>
        <li>
            <?php
                echo "$variavel $variavelReferencia";
            ?>
        </li>
    </ul>
</ul>