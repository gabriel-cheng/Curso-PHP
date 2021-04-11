<div class="titulo">Tipo String</div>

<ul>
    <li>
        <?php
            echo ('Eu sou uma String');
        ?>
    </li>
    <li>
         <?php
             var_dump("Eu também!");
        ?>
    </li>
    <p>
    <li>
        CONCATENAÇÃO
    </li>
    <ul>
        <li>
            <?php
                echo ('Isto é' . ' uma' . ' concatenação'); //Concatenação
            ?>
        </li>
        <li>
            <?php
                echo ("Também aceito vírgula"); //Por algum motivo está dando erro, mas funciona sim
            ?>
        </li>
    </ul>
    <p>
    <li>
        FUNÇÃO PRINT
    </li>
    <ul>
        <li>
            <?php
                print ('Também existe a função "print"'. '<br>');
                // print 'A função "print" também pode ser usada sem parêntese!';
            ?>
        </li>
        <li>
            <?php
                print 'A função "print" também pode ser usada sem parêntese!';
            ?>
        </li>
    </ul>
    <p>
    <li>
        OUTRAS FUNÇÕES
    </li>
    <ul>
        <li>
            <?php
                print strtoupper('maximizando'); //imprime a frase em caixa alta
            ?>
        </li>
        <li>
            <?php
                print strtolower('MINIMIZANDO'); //imprime a frase em caixa baixa
            ?>
        </li>
        <li>
            <?php
                print ucfirst('somente a primeira letra em caixa alta');
            ?>
        </li>
        <li>
            <?php
                print ucwords('todas as palavras com incial maiúscula');
            ?>
        </li>
        <li>
            <?php
                print 'conta quantos caracteres tem (incluindo acentos): ' . strlen('Conta quantos caracteres tem');
            ?>
        </li>
        <li>
            <?php
                print 'conta quantos caracteres tem (sem contar acentos): ' . mb_strlen('Contá quantôs caractéres têm');
            ?>
        </li>
        <li>
            <?php
                print 'Conta a partir de 7 caracteres até um número a menos do que indicado no segundo: ' . substr('Só vai selecionar esta parte mesmo', 7, 11);
            ?>
        </li>
        <li>
            <?php
                print str_replace('isso', 'aquilo', 'Trocar aquilo onde tudo aquilo é nefasto');
            ?>
        </li>
    </ul>
</ul>
            

