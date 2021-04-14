<div class="titulo">Protocolo HTTP</div>

<ul>
    <li>
        Métodos suportados pelo protocolo HTTP<p>
    </li>
    <ul class="line">
        <li>
            GET
        </li>
        <ul>
            <li>
                Os parâmetros vão no próprio corpo da URL (ex: mostra a pasta localizada o arquivo)
            </li>
            <li>
                É utilizado quando queremos passar poucas informações
            </li>
            <li>
                Informa os parâmetros utilizados para acessar aquele ambiente
            </li>
            <li>
                Ex: /search?q=web+moderno&hl=pt-BR
            </li>
        </ul>
        <li>
            POST
        </li>
        <ul>
            <li>
                Os parâmetros vão no próprio corpo da requisição
            </li>
            <li>
                É considerado mais seguro
            </li>
            <li>
                Tem uma capacidade de dados melhor que o GET por não ter limite de dados
            </li>
            <li>
                Deve ser utilizado quando queremos restringir o acesso
            </li>
        </ul>
        <li>
            PUT
        </li>
        <li>
            DELETE
        </li>
        <li>
            TRACE
        </li>
        <li>
            OPTIONS
        </li>
        <li>
            CONNECT
        </li>
        <li>
            HEAD
        </li>
    </ul>
    <p>
    <li>
        RESUMINDO: 
    </li>
    <ul>
        <li>
            <b>$_GET</b>: Recomendado para transmissão de poucas informações
        </li>
        <li>
            <b>$_POST</b>: Recomendado para transmissão de informações mais sigilosas
        </li>
    </ul>
</ul>