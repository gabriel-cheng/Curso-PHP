<div class="titulo">Interpolação</div>

<ul>
    <li>
        <?php
            $numero = 10;
            echo $numero;
        ?>
    </li>
    <li>
        <?php
            echo '$numero'; //Aspas simples imprime formato string
        ?>
    </li>
    <li>
        <?php
            echo "$numero"; //Aspas duplas imprimem o valor da variável
        ?>
    </li>
    <li>
        <?php
            $nota = 10;
            $texto = 'Sua nota é ' . $nota;

            echo $texto;
        ?>
    </li>
    <li>
        <?php
            $objeto = 'caneta';
            
            echo "Eu tenho 5 {$objeto}s"; //Colocando a variável string "caneta" no plural
        ?>
    </li>
    <ul>
        <li>
            <?php
                echo "Eu tenho 5 $objeto" . 's'; //Ou, posso concatenar também.
            ?>
        </li>
    </ul>
    <li>
        <?php
            echo 'Basicamente, interpolar significa incluir duas variáveis utilizando " {} "';
        ?>
    </li>
</ul>