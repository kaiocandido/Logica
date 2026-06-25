<?php

class Allergies
{

    public $allergiesList = [
    'eggs' => 1,
    'peanuts' => 2,
    'shellfish' => 4,
    'strawberries' => 8,
    'tomatoes' => 16,
    'chocolate' => 32,
    'pollen' => 64,
    'cats' => 128,
    ];

    public $isAlergic = [];

    private $score;

    public function __construct(int $score)
    {
        $this->score = $score;
    }

    public function isAllergicTo(Allergen $allergen): bool
    {
        foreach($this-> allergiesList as $alergias => $value){
            $valor = 0;
            if($allergen->getName() == $alergias){
               return ($this->score & $value) !== 0;
            }
        }
        return false;
    }

    public function getList(): array
    {
        $result = [];

        foreach ($this->allergiesList as $alergias => $value) {
            if (($this->score & $value) !== 0) {
                $result[] = new Allergen($alergias);
            }
        }

        return $result;

    }
}

class Allergen
{
    public const EGGS = 'eggs';
    public const PEANUTS = 'peanuts';
    public const SHELLFISH = 'shellfish';
    public const STRAWBERRIES = 'strawberries';
    public const TOMATOES = 'tomatoes';
    public const CHOCOLATE = 'chocolate';
    public const POLLEN = 'pollen';
    public const CATS = 'cats';

    private string $name;

    private static array $allergens = [
        self::EGGS => 1,
        self::PEANUTS => 2,
        self::SHELLFISH => 4,
        self::STRAWBERRIES => 8,
        self::TOMATOES => 16,
        self::CHOCOLATE => 32,
        self::POLLEN => 64,
        self::CATS => 128,
    ];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getScore(): int
    {
        return self::$allergens[$this->name];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public static function allergenList(): array
    {
        return [
            new Allergen(self::EGGS),
            new Allergen(self::PEANUTS),
            new Allergen(self::SHELLFISH),
            new Allergen(self::STRAWBERRIES),
            new Allergen(self::TOMATOES),
            new Allergen(self::CHOCOLATE),
            new Allergen(self::POLLEN),
            new Allergen(self::CATS),
        ];
    }
}