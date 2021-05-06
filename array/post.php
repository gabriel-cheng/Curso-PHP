<div class="titulo">$_POST</div>

<form action="#" method="POST">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="sp">São Paulo</option>
        <option value="mg">Minas Gerais</option>
    <select>
    <button class="btn">Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
    print_r($_POST);
    echo '<br>';
    print_r($_GET);
?>