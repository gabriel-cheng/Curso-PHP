<div class="titulo">Conversões</div>

<ul>
    <li>
        <?php
            print is_int(PHP_INT_MAX);
        ?>
    </li>
    <li>
        <?php
            print var_dump(PHP_INT_MAX +1);
        ?>
    </li>
    <li>
        <?php
            print var_dump(1 + 1.0);
        ?>
    </li>
    <li>
        <?php
            print var_dump((float) 3);
        ?>
    </li>
    <li>
        <?php
            print var_dump((int) 6.8);
        ?>
    </li>
    <li>
        <?php
            print var_dump(intval (2.99999));
        ?>
    </li>
    <li>
        <?php
            print var_dump(round (2.99999999)); /*Faz o arredondamento de um número float*/
        ?>
    </li>
</ul>