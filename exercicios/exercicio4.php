<?php

declare(strict_types=1);

class PhoneNumber
{
    private string $cleanNumber;

    public function __construct(string $number)
    {
        // Letras não são permitidas
        if (preg_match('/[a-zA-Z]/', $number)) {
            throw new InvalidArgumentException('letters not permitted');
        }

        // Remove apenas pontuações permitidas/formatação
        $cleanNumber = str_replace(
            [' ', '.', '-', '(', ')', '+'],
            '',
            $number
        );

        // Se ainda sobrou algo que não é número, é pontuação inválida
        if (!ctype_digit($cleanNumber)) {
            throw new InvalidArgumentException('punctuations not permitted');
        }

        // Se tiver 11 dígitos, precisa começar com 1
        if (strlen($cleanNumber) === 11) {
            if ($cleanNumber[0] !== '1') {
                throw new InvalidArgumentException('11 digits must start with 1');
            }

            // Remove código do país
            $cleanNumber = substr($cleanNumber, 1);
        }

        // Depois da limpeza, precisa ter exatamente 10 dígitos
        if (strlen($cleanNumber) !== 10) {
            throw new InvalidArgumentException();
        }

        // Area code é a posição 0
        if ($cleanNumber[0] === '0') {
            throw new InvalidArgumentException('area code cannot start with zero');
        }

        if ($cleanNumber[0] === '1') {
            throw new InvalidArgumentException('area code cannot start with one');
        }

        // Exchange code é a posição 3
        if ($cleanNumber[3] === '0') {
            throw new InvalidArgumentException('exchange code cannot start with zero');
        }

        if ($cleanNumber[3] === '1') {
            throw new InvalidArgumentException('exchange code cannot start with one');
        }

        // Salva o número limpo na classe
        $this->cleanNumber = $cleanNumber;
    }

    public function number(): string
    {
        // O teste chama number() sem parâmetro
        return $this->cleanNumber;
    }
}