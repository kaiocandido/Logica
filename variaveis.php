<?php

//Toda variavel tem que começar com $

// Após o simbolo de $ os nomes deve começar por uma letra seguida de uma sequencia de letras("a'.."z", "A".."Z"), numeros
// ("0".."9") ou caracteres do tipo sublinhado ("_")

// Nomes com caracteres em minusculas ou maiusculas são diferenciados, isso porque em PHP é case sensitive, ou seja %Nome
// é diferente de $nOME ou $NOME ou $nome

// Não é permitido colocar caracteres de espaco em nomes de variaveis EX: $minha Casa

// Não é permitido colocar acentos ou caracteres especiais no nome EX: $avô

// É recomendaval também que começamos a fazer as variaveis de forma minuscula com camelcase EX: $sejaBemVindo


// exemplo pratico

echo "Hello World com echo";
echo "</br>";
print "Hello World com Print";
echo "</br>";

$i = "txt";

echo $i;
echo "</br>";
print $i;
echo "</br>";

// Concatenando string

$nome = "Kaio";
$sobrenome = "lindo";

echo $nome. " " .$sobrenome;


function escreve(){
    global $i;
    echo $i;
}

escreve();
