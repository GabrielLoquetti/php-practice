<?php

// Operadores Aritméticos
$n1 = 2;
$n2 = 2;

$soma = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;
$divisao = $n1 / $n2;
$modulo = $n1 % $n2;

echo $soma; // Adição
echo $subtracao; // Subtração
echo $multiplicacao; // Multiplicação
echo $divisao; // Divisão
echo $modulo; // Módulo

// Funções já definidas no PHP
echo abs(-5); // = 5 --------------------------------------------- Valor absoluto
echo pow(2, 3); // = 8 ------------------------------------------- Potência
echo sqrt(16); // = 4 -------------------------------------------- Raiz quadrada
echo round(3.4); // = 3 ------------------------------------------ Arredondar
echo rand(1, 100); // = 42 --------------------------------------- Número aleatório
echo intval(3.14); // = 3 ---------------------------------------- Converter para inteiro
echo number_format(3258.754, 2, ",", "."); // = 3.258,75 --------- Formatar número

?>