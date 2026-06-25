<?php

function twoFer(string $name): string
{
    if(!empty($name)){
        $phaseOne = "One for $name, one for me.";
        return $phaseOne;
    }else {
        $phaseTwo = "One for you, one for me.";
        return $phaseTwo;
    }
}

echo twoFer("kaio");
