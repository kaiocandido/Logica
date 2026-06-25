<?php

function score(float $xAxis, float $yAxis): int
{
   $distancia = sqrt((($xAxis ** 2) + ($yAxis ** 2)));
   
   if($distancia > 10){
    return 0;
   }else if($distancia > 5 && $distancia <= 10){
    return 1;
   }else if($distancia > 1 && $distancia <= 5){
    return 5;
   } else {
    return 10;
   }

}
