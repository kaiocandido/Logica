<?php

function encode(string $plainMessage, int $rails): string
{
    $finalArray = [];
    $letras = str_split($plainMessage);

    $trilhas = array_fill(0, $rails, []);

    $trilhaAtual = 0;
    $direcao = 1;

    foreach(str_split($plainMessage) as $letra){
        $trilhas[$trilhaAtual][] = $letra;

        if($trilhaAtual == $rails - 1){
            $direcao = -1;
        } elseif($trilhaAtual == 0){
            $direcao = 1;
        }

        $trilhaAtual += $direcao;
    }

    $palavra = '';
    foreach($trilhas as $key => $valor){
        $palavra .= implode('', $valor);
    }

    return $palavra;
}

function decode(string $cipherMessage, int $rails): string
{
    $contagem = array_fill(0, $rails, 0);

    $trilhaAtual = 0;
    $direcao = 1;

    for($i = 0; $i < strlen($cipherMessage); $i++){
        $contagem[$trilhaAtual]++;
        
        if($trilhaAtual == $rails - 1){
            $direcao = -1;
        } elseif($trilhaAtual == 0){
            $direcao = 1;
        }
        $trilhaAtual += $direcao;
    }

    $trilha = [];
    $offset = 0;

    foreach($contagem as $qtd){
        $trilhas[] = str_split(substr($cipherMessage, $offset, $qtd));
        $offset += $qtd;
    }

    $trilhaAtual = 0;
    $direcao = 1;
    $resultado = '';

    for($i = 0; $i < strlen($cipherMessage); $i++){
        $resultado .= array_shift($trilhas[$trilhaAtual]); 

        if($trilhaAtual == $rails - 1){
            $direcao = -1;
        } elseif($trilhaAtual == 0){
            $direcao = 1;
        }
        $trilhaAtual += $direcao;
    }

    return $resultado;

}
