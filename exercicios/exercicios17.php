<?php

$ano = 20;
$mes = 5;
$dias = 20;

function calcularDiasVividos($ano, $mes, $dias){
    $anosVividos = $ano  * 365;
    $mesesVividos = $mes *30;
    $total = $anosVividos + $mesesVividos + $dias;
    return $total;
}

echo "Voce viveu no total: " .calcularDiasVividos($ano, $mes, $dias). " dias";