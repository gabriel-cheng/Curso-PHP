<div class="titulo">Tipo Booleano</div>

<ul>
    <li>
        <?php
            print TRUE;    
        ?>
    </li>
    <li>
        <?php
            print FALSE . '(Não imprime um valor nulo)';//Não converte para string, por isso não aparece nada
        ?>
    </li>
    <li>
        <?php
            print var_dump(TRUE);
        ?>
    </li>
    <li>
        <?php
            print var_dump(FALSE);
        ?>
    </li>
    <li>
        <?php
            print var_dump('FALSE');
        ?>
    </li>
    <li>
        <?php
            print is_bool(false); /*"is_bool" apresenta o valor contrário do tipo booleano*/
        ?>
    </li>
    <p>
    <li>
        <?php
            print ('REGRAS'); 
        ?>
    </li>
    <ul>
        <li>
            <?php
                print var_dump((bool) 1); /*Forma de conversão para "true", funciona com qualquer número, incluindo negativos.*/
            ?>
        </li>
        <li>
            <?php
                print var_dump((bool) 0); /*Forma de conversão para "False", só funciona com 0.*/
            ?>
        </li>
        <li>
            <?php
                print ((bool) '');
            ?>
        </li>
        <li>
            <?php
                print ((bool) '0');
            ?>
        </li>
        <li>
            <?php
                print ((bool) '01');
            ?>
        </li>
    </ul>
</ul>