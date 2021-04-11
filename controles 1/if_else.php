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
    if(true)
    {
        echo '<br>É verdadeiro! - Parte A';
        echo '<br>É verdadeiro! - Parte B<br>';
    }
    else //Todo else precisa estar associado à um if
       {
        echo '<br>É falso!';
        echo '<br>É falso!';
       }


       if(false)
       {
            echo '<br>Passo A<br>';
       }
       else if(true)
       {
           echo 'Passo B<br>';
       }
       else if(true)
       {
           echo 'Passo C<br>';
       }
       else if(true)
       {
           echo 'Passo D<br>';
       }
       else if(true)
       {
           echo 'Passo E<br>';
       }
?>