<div class="titulo">Valor x Referência - Teoria</div>

<ul>
    <li>
        <?php
            echo 'Atribuição feita por valor: cópia';
        ?>
    </li>
    <li>
        <?php
            echo 'Ex:';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo '$a = 3;'
            ?>
        </li>
        <li>
            <?php
                echo '$b = $a;'
            ?>
        </li>
    </ul>
    <p>
    <li>
        <?php
            echo 'Atribuição feita por referência: usado "&"';
        ?>
    </li>
    <li>
        <?php
            echo 'Ex:';
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo '$a = "Ana"';
            ?>
        </li>
        <li>
            <?php
                echo '$b = &$a;';
                $a = 'Ana';
            ?>
        </li>
    </ul>
</ul>