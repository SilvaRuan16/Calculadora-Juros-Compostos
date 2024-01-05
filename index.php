<?php

$capital = (float) $_POST['capital'];
$juros = (float) $_POST['juros'] / 100;
$tempo = (float) $_POST['tempo'];

$montante = $capital * (1 + $juros) ** $tempo;
$formato = "O montante após $tempo anos será: " . number_format($montante, "2", ".", ",") . " reais";

if ($capital == null && $juros == null && $tempo == null) {
    echo "<script src='script.js'></script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time's Money</title>
    <link rel="shortcut icon" href="./grafico-preditivo.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="main">
        <p style="text-align: center; transform: translate(0, 30px);font-size: 25px; font-weight: bold;">Calculadora de Juros Compostos</p>
            <form action="" method="POST">
                <div class="cont">
                
                    <input type="text" class="input-calculator" placeholder="   Capital Investido em R$" name="capital" id="capital">
                    <input type="text" class="input-calculator" placeholder="   Taxa de juros em % a.a" name="juros" id="juros">
                    <input type="text" class="input-calculator" placeholder="   Tempo estimado em anos" name="tempo" id="tempo">
                    <div class="resultado">
                        <p class="result"><?php
                            echo 'Capital Investido: ' . number_format($capital, "2", ",", ".") . " reais";
                        ?></p>

                        <p class="result"><?php
                            echo 'Porcentagem (%) de juros ao ano (a.a): ' . $juros . "%";
                        ?></p>

                        <p class="result"><?php
                            echo "Tempo Estimado: " . $tempo . " anos";
                        ?></p>

                        <p class="result"><?php
                            echo $formato;
                        ?></p>
                    </div>
                    <button class="bt_calc" type="submit">Calcular</button>
                
            </div></form>
    </div>

</body>
</html>