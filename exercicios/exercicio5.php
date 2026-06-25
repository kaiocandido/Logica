<?php

declare(strict_types=1);

function encode(string $text): string {
    $lettersInverso = [
        'a' => 'z','b' => 'y','c' => 'x','d' => 'w','e' => 'v',
        'f' => 'u','g' => 't','h' => 's','i' => 'r','j' => 'q',
        'k' => 'p','l' => 'o','m' => 'n','n' => 'm','o' => 'l',
        'p' => 'k','q' => 'j','r' => 'i','s' => 'h','t' => 'g',
        'u' => 'f','v' => 'e','w' => 'd','x' => 'c','y' => 'b',
        'z' => 'a',
    ];

    // Remove pontuação e espaços desnecessários
    $cleanText = str_replace(['.', '-', '(', ')', '+', ',', '!'], '', strtolower($text));

    $result = '';
    $count = 0; // contador de letras no bloco

    for ($i = 0; $i < strlen($cleanText); $i++) {
        $char = $cleanText[$i];

        if (ctype_alpha($char)) {
            $result .= $lettersInverso[$char];
            $count++;
        } elseif (ctype_digit($char)) {
            // números entram diretamente
            $result .= $char;
            $count++;
        }

        // adiciona espaço a cada 5 caracteres
        if ($count === 5) {
            $result .= ' ';
            $count = 0;
        }
    }

    // remove espaço extra no final, se houver
    return rtrim($result);
}

function decode(string $text): string {
    $letters = [
        'a' => 'z','b' => 'y','c' => 'x','d' => 'w','e' => 'v',
        'f' => 'u','g' => 't','h' => 's','i' => 'r','j' => 'q',
        'k' => 'p','l' => 'o','m' => 'n','n' => 'm','o' => 'l',
        'p' => 'k','q' => 'j','r' => 'i','s' => 'h','t' => 'g',
        'u' => 'f','v' => 'e','w' => 'd','x' => 'c','y' => 'b',
        'z' => 'a',
    ];

    // remove espaços e transforma para minusculas
    $cleanText = str_replace(' ', '', strtolower($text));

    $result = '';
    for ($i = 0; $i < strlen($cleanText); $i++) {
        $char = $cleanText[$i];

        if (ctype_alpha($char)) {
            $result .= $letters[$char];
        } elseif (ctype_digit($char)) {
            $result .= $char;
        }
    }

    return $result;
}

// Exemplo de uso:
echo encode("Testing, 1 2 3, testing."); // gvhgr mt123 gvhgr mt
echo "\n";
echo decode("gvhgr mt123 gvhgr mt");   // testing123testing