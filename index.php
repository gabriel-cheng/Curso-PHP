<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="php_icon" href="php_icon.png"/>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/meus_adicionais.css">
    <link rel="shortcut icon" href="icones/php.ico" type="image/x-icon">
    <title>PHP STUDY | Site de estudo PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1 class="nome_site">PHP STUDY | Site de estudo PHP</h1>
        <h2>Seu site de aprendizagem web!</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h1 class="module_title">MÓDULOS</h1>
            <nav class="modulos">
                <div class="modulo roxo">
                    <h3>4. Controles I</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controles 1&file=if_else">
                                If Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controles 1&file=op_relacionais">
                                Operadores Relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controles 1&file=desafio_pi">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controles 1&file=op_logicos">
                                Operadores Lógicos
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Básico Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Variáveis Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                                Desafio Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia_teoria">
                                Valor x Referência - Teoria
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia_pratica">
                                Valor x Referência - Prática
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Op. Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>1. Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>  
            <!--Extra-->
            <h1 class="module_title">MÓDULOS EXTRAS</h1>
            <nav class="modulos">
                <div class="modulo html">
                    <h3>HTML - Extra</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=extra/form&file=form">
                                Formulários - HTML
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo web">
                    <h3>Conceitos WEB - Extra</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=extra/web&file=http">
                                Protocolo HTTP
                            </a>
                        </li>
                    </ul>
                </div>  
            </nav>
            <!--Extra-->
        </div>  
    </main>
<footer class="rodape">
    GABRIEL © <?= date('d'); ?> de <?= date('M'); ?>, <?= date('Y'); ?>
</footer>
</body>
</html>