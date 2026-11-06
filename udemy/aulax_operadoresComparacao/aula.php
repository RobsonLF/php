<?php

$a = 35;
$b = 25;
// = é o operador de atribuição
//== é o operador de comparação de igualdade
//=== é o operador de comparação de igualdade e tipo


var_dump($a > $b); //operador de comparação maior que
echo "<br>";    
var_dump($a < $b); //operador de comparação menor que
echo "<br>";
var_dump($a >= $b); //operador de comparação maior ou igual que
echo "<br>";
var_dump($a <= $b); //operador de comparação menor ou igual que
echo "<br>";
var_dump($a == $b); //operador de comparação de igualdade
echo "<br>";
var_dump($a === $b); //operador de comparação de igualdade e tipo
echo "<br>";
var_dump($a != $b); //operador de comparação de diferença
echo "<br>";
var_dump($a !== $b); //operador de comparação de diferença e tipo
echo "<br>";

//space ship operator
var_dump($a <=> $b); //operador de comparação de diferença e tipo
//retorna 1 se o valor da esquerda for maior, -1 se o valor da direita for maior e 0 se forem iguais

?>
