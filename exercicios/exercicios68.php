<?php


declare(strict_types=1);

class DndCharacter
{
    public function __construct()
    {

    }
    
    public static function modifier(int $constituicao){
        return (int) floor(($constituicao - 10) / 2);
    }

    public static function ability(): int {
        $dados = [];


        for($j = 0; $j < 4; $j++){
            $dados[$j] = random_int(1, 6);
        }

        $menor = $dados[0];
        $indiceParaOMenor = 0;

        for($y = 0; $y < 4; $y++){
            if($dados[$y] < $menor){
                $menor = $dados[$y];
                $indiceParaOMenor = $y;
            }
        }

        $soma = 0;

        for($x = 0; $x < 4; $x++){
            if($x != $indiceParaOMenor){
                $soma = $soma + $dados[$x];
            }
        }

        return $soma;

    }

    public static function generate(){
        $personagem = new self();

        $personagem->strength = self::ability();
        $personagem->dexterity = self::ability();
        $personagem->constitution = self::ability();
        $personagem->intelligence = self::ability();
        $personagem->wisdom = self::ability();
        $personagem->charisma = self::ability();

        $personagem->hitpoints = 10 + self::modifier($personagem->constitution);

        return $personagem;
    }

}

?>