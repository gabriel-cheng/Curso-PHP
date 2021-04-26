<div class="titulo">Desafio Switch</div>

<form action="#" method="POST">
    <div>
        <select style="Display: flex; Border: 0px; Margin-left: 1.8em;" name="conversao" id="conversao">
            <option value="km-milha">KM- Milhas</option>
            <option value="milha-km">Milhas - KM</option>
            <option value="km-metros">KM - Metros</option>
            <option value="metros-km">Metros - KM</option>
            <option value="anoluz-km">Anos-luz - KM</option>
            <option value="km-anoluz">KM - Anos-luz</option>
            <option value="c-f">Celsius° - Fahrenheit°</option>
            <option value="f-c">Fahrenheit° - Celsius°</option>
        </select>
    </div>
    <input style="Display: flex; Margin-top: -1px;" type="text" name="param" placeholder="Informe um valor">
    <button style="Display: flex; margin-top: 10px; margin-left: 2.5rem;" class="btn">Converter</button>
</form>
<br>

<style>
    .align{
        
    }
</style>

<div>
    <?php
        $userValue = $_POST['param'];
        $fahren = $userValue * 1.8 + 32;
        $celsius = ($userValue -32) / 1.8;
        switch ($_POST['conversao'])
        {
            case 'km-milha':
            {
                if ($userValue == '1')
                {
                    echo $userValue . 'KM = ' . ($userValue / 1000) * 0.62137119223733 . ' Milhas';
                }
                else
                {
                    echo $userValue . "KM's = " . ($userValue / 1000) * 0.62137119223733 . ' Milhas';
                }
                break;
            }
            case 'milha-km':
            {
                if ($userValue == '1')
                {
                    echo $userValue . ' Milha = ' . $userValue * 1.6 . "KM's";
                }
                else
                {
                    echo $userValue . ' Milhas = ' . $userValue * 1.6 . "KM's";
                }
                break;
            }
            case 'km-metros':
            {
                if ($userValue == '1')
                {
                    echo $userValue . 'KM = ' . $userValue * 1000 . " Metros";
                }
                else
                {
                    echo $userValue . "KM's = " . $userValue * 1000 . " Metros";
                }
                break;
            }
            case 'metros-km':
            {
                if ($userValue == '1000')
                {
                    echo $userValue . ' Metros = ' . $userValue / 1000 . " KM";
                }
                elseif ($userValue == '1')
                {
                    echo $userValue . ' Metro = ' . $userValue / 1000 . " KM's";
                }
                else
                {
                    echo $userValue . " Metros = " . $userValue / 1000 . " KM's";
                }
                break;
            }
            case 'anoluz-km':
            {
                if ($userValue == '1')
                {
                    echo $userValue . ' Ano-luz = ' . $userValue * 9,4605284*10e12 . " KM's";
                }
                else
                {
                    echo $userValue . " Anos-luz = " . $userValue * 9,4605284*10e12 . " KM's";
                }
                break;
            }
            case 'km-anoluz':
            {
                if ($userValue == '1')
                {
                    echo $userValue . 'KM = ' . $userValue / 9,4605284*10e12 . " Anos-luz";
                }
                else
                {
                    echo $userValue . "KM's = " . $userValue / 9,4605284*10e12 . " Anos-luz";
                }
                break;
            }
            case 'c-f':
            {
                echo $userValue . 'C° = ' . $fahren . 'F°';
                break;
            }
            case 'f-c':
            {
                echo $userValue . 'F° = ' . $celsius . 'C°';
                break;
            }
        }            
    ?>
</div>