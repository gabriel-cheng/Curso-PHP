<div class="titulo">Desafio Sorteio - Roda Roda Jequiti</div>

<?php
    $jequiti = [
        "R$ 100,00" => "cenhão",
        "R$ 1.000,00" => "milão",
        "R$ 200,00" => "duzentão",
        "perdeu tudo" => "perdeu",
        "R$ 2.000,00" => "2k"
    ];
    
    $rodaRoda = array_rand($jequiti);
    $saldo = 0;

    if($rodaRoda == "R$ 100,00")
    {
        echo "Você ganhou: $rodaRoda<br>";
    }
    elseif($rodaRoda == "R$ 1.000,00")
    {
        echo "Você ganhou: $rodaRoda<br>";
    }
    elseif($rodaRoda == "R$ 200,00")
    {
        echo "Você ganhou: $rodaRoda<br>";
    }
    elseif($rodaRoda == "perdeu tudo")
    {
        echo "Você $rodaRoda<br>";
    }
    elseif($rodaRoda == "R$ 2.000,00")
    {
        echo "Você ganhou: $rodaRoda<br>";
    }
?>
<p>
<form action="#" method="POST">
    <button class="btn" name="roda">Clique para recarregar a página</button>
</form>