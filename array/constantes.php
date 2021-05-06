<div class="titulo">Arrays Constantes</div>

<?php
    const comida = ["laranja", "batata"];
    print_r(comida);
    
    /*comida[] = "Feijão";
    print_r(comida); //Vai dar erro*/

    echo '<br>', ucfirst(comida[1]);
    echo '<br>Basicamente, não se pode alterar nem adicionar valores à um Array constante.';
?>