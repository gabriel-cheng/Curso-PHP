<div class="titulo">$_GET</div>

<?php
    print_r($_GET); //À partir do tipo GET, é possível passar os aprâmetros pela URL

    echo '<br><strong>Exemplo</strong>';
    echo '<p>';
    echo 'localhost/array/get.php'. '<i>?nome=Gabriel&sexo=Masculino</i>';

    echo "<br>{$_GET['nome']}";
?>

