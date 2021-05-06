<div class="titulo">Roda-Roda Jequiti</div>

<?php
    $saldo = $_POST['saldo'] ?? 0;
    $jequiti = [
        100,
        1000,
        200,
        2000,
        -1
    ];

    $rodaRoda = array_rand($jequiti);
    $rodaRoda = $jequiti[$rodaRoda]; //Pega o valor da posição e adiciona
    if($rodaRoda != -1){
        echo "Você ganhou: R$ $rodaRoda,00";
        $saldo += $rodaRoda;
    }
    else{
        echo '<span style="Color: red;">Você perdeu tudo!</span>';
        $saldo = 0;
    }
    echo "<br>Saldo atual: R$ $saldo,00";
?>
<form method="POST">
    <button class="btn">Clique para atribuir</button>
    <input type="text" name="saldo" hidden="true" value="<?= $saldo?>">
</form>