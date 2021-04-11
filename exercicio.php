<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <link rel="stylesheet" href="recursos/css/meus_adicionais.css">
    <link rel="shortcut icon" href="icones/php.ico" type="image/x-icon">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1 class="nome_site">PHP STUDY | Site de estudo PHP</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> 
            class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        GABRIEL © <?= date('d'); ?> de <?= date('M'); ?>, <?= date('Y'); ?>
    </footer>
</body>
</html>