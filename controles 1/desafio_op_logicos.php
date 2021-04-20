<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="POST">
    <div>
        <label for="t1">Aparar a grama:</label>
        <select class="select" name="t1" id="t1" style="cursor: pointer;">
            <option value="-">----------</option>
            <option value="1">Concluido</option>
            <option value="0">Não concluido</option>
        </select>
    </div>
    <div>
        <label for="t2">Carpir o quintal:</label>
        <select class="select" name="t2" id="t2" style="cursor: pointer;">
            <option value="-">----------</option>
            <option value="1">Concluido</option>
            <option value="0">Não concluido</option>
        </select>
    <div>
    <button class="btn">Enviar</button>
</form>



<style>
    .btn{
        border-radius: 2px;
        cursor: pointer;
        background-color: #fff;
        color: #000;
        border: 2px solid #888;
    }
    .select{
        font-size: 1.8rem;
    }
</style>
<p>
<divl style="font-size: 1.6rem;">
    <?php
        if($_POST['t1'] == '1' && $_POST['t2'] == '1')
        {
            echo 'Conclusão: Todas as atividades foram concluidas, irão compra uma TV de 50 polegadas e tomar sorvete.';
        }
        elseif($_POST['t1'] == '1' && $_POST['t2'] == '0')
        {
            echo 'Conclusão: Vocês fizeram apenas o aparo da grama, portanto vão comprar uma TV de 35 polegadas e tomar sorvete.';
        }
        elseif($_POST['t1'] == '0' && $_POST['t2'] == '1')
        {
            echo 'Conclusão: Vocês somente carpiram o quintal, portanto vão comprar uma TV de 35 polegadas e tomar sorvete.';
        }
        elseif($_POST['t1'] == '0' && $_POST['t2'] == '0')
        {
            echo 'Conclusão: Como não fizeram nenhuma das atividades propostas, ficarão em casa.';
        }
        else
        {
            echo 'Conclusão: Certifique-se de informar o status de ambas as atividades.';
        }
    ?>
</div>