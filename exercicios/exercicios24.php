<?php

function sieve(int $number): array
{
    // Cria um array de 2 até $number
    $numbers = range(2, $number);

    // Array para marcar números não primos
    $isPrime = array_fill(2, $number - 1, true);

    // Percorre cada número até a raiz quadrada de $number
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($isPrime[$i]) {
            // Marca todos os múltiplos do número $i como não primos
            for ($j = $i * $i; $j <= $number; $j += $i) {
                $isPrime[$j] = false;
            }
        }
    }

    // Retorna somente os números que ainda são primos
    $primes = [];
    foreach ($isPrime as $num => $prime) {
        if ($prime) {
            $primes[] = $num;
        }
    }

    return $primes;
}

// Teste
print_r(sieve(10));