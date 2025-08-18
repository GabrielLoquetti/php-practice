<?php

$a = 1;
$b = 5;
$c = $a + $b;

// Para adicionar um número dentro da mesma variável
// Ao invés de:
$b = $b + 10;
$b = $b + $a;

// Fazemos:
$b += 10;
$b += $a;

// Ou se vamos adicionar apenas um número
// Ao invés de:
$a = $a + 1;
$a += 1;

// Fazemos:
$a ++;
?>