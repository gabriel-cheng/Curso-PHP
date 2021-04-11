<div class="titulo">If e else</div>

<ul>
    <li>
        <?php
            if(true)
                echo 'Serei impresso?' . '(if(true))';
        ?>
    </li>
    <li>
        <?php
            if(false)
                echo 'Serei impresso?' . '(if(false))'; /*Ele somente associa para a próxima linha de código depois do if*/
                echo 'Serei impresso novamente?';
        ?>    
    </li>
</ul>
<?php
    if(true)
    echo 'Sentença avulça 1 <br>';
    echo 'Sentença avulça 2 <br>';
    { /*Colocar charves significa abrir um bloco de código*/
        echo 'Serei impresso?';
    }