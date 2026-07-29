<?php
function transmitSequence(array $sequence): array
{
    $resultado = [];
    $bits = "";

    foreach ($sequence as $byte) {
        $numero = hexdec(substr($byte, 2));
        $bits .= str_pad(
            decbin($numero),
            8,
            "0",
            STR_PAD_LEFT
        );
    }

    $blocos = str_split($bits, 7);
    foreach ($blocos as $bloco) {
        $bloco = str_pad($bloco, 7, "0", STR_PAD_RIGHT);
        $quantidadeUns = substr_count($bloco, "1");
        $paridade = ($quantidadeUns % 2 === 0) ? "0" : "1";
        $byte = $bloco . $paridade;
        $resultado[] = "0x" . str_pad(
            dechex(bindec($byte)),
            2,
            "0",
            STR_PAD_LEFT
        );
    }
    return $resultado;
}
function decodeMessage(array $message): array
{
    $bits = "";
    foreach ($message as $byte) {
        $binario = str_pad(
            decbin(hexdec(substr($byte, 2))),
            8,
            "0",
            STR_PAD_LEFT
        );
        if (substr_count($binario, "1") % 2 !== 0) {
            throw new Exception("wrong parity");
        }
        $bits .= substr($binario, 0, 7);
    }
    $resultado = [];
    $bytes = str_split($bits, 8);
foreach ($bytes as $byte) {
    if(strlen($byte) < 8){
        break;
    }
    $resultado[] = "0x" . str_pad(
        dechex(bindec($byte)),
        2,
        "0",
        STR_PAD_LEFT
    );
}
    return $resultado;
}