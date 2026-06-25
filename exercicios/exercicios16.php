<?php

$nome = "kaio";
$idade = 25;
$salario = 5700;
$cargo = "Desenvolvedor";

function calcularSalarioBruto($salario){
    $result = $salario *  0.38;
    return $result + $salario;
}

function calcularBonificação($salario){
    return $salario * 0.20;
}

function salarioLiquido($salario){
    return $salario - ($salario * 0.15);
}

echo "$nome tem $idade anos de idade e trabalha no cargo de $cargo";

$salarioBruto = calcularSalarioBruto($salario);
$bonificao = calcularBonificação($salario);
$liquidoSalario = salarioLiquido($salario);

echo "seu salario bruto é " .$salarioBruto . "</br>"  ; 


echo "Seu salario liquido com a bonificação  é: " .$bonificao + $liquidoSalario . "</br>";