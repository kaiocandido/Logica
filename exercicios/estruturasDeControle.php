<?php


// FOR
$a = $_POST["txt_a"];

for ($i=0; $i < $a ; $i++) { 
    echo $i. "</br>";
}

// WHILE
$cont = 0;
while ($cont <= $a){
    echo $cont. "</br>";
    $cont++;
}


// DO WHILE
$contador = 0;
do {
    echo $contador. "</br>";
    $contador++;
} while ($contador <= $a);

// Tabuada


echo "TABUADA DO " . $a;
for ($i=0; $i <= $a ; $i++) { 
    echo $a. " X " .$i. " = " . $i * $a . "</br>";
}