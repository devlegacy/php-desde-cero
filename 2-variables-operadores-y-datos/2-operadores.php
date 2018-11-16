<?php
/**
 * Operadores aritméticos
 */

$a = 10;
$b = 20;
$c = 2;
$suma = $a + $b;

$resta = $a - $b;

$multiplicacion = $a * $b;

$division = $a / $c;

$divisionDos = $c / $a;

$modulo = $a % $c;

$moduloDos = $c % $a;

echo "Suma: {$suma}\nResta: {$resta}\nMultiplicacón {$multiplicacion}\nDivisión : {$division}\nSegunda División {$divisionDos}\nResiduo/Modulo: {$modulo}\nResiduo/Modulo dos: {$moduloDos}\n";

/**
 * Operadores de asignación
 */

$a = 10;
$a += 5;
echo "{$a}\n";
$a *= 5;
echo "{$a}\n";
$a /= 5;
echo "{$a}\n";
$a -= 5;
echo "{$a}\n";
$a .= " Concatenar";
echo "{$a}\n";

/**
 * Operadores de incrementos/decrementos
 */

$valor = 15;
// Primera asigna, despues incrementa
$nuevoValor = $valor++;

echo "{$nuevoValor}\n";
echo "{$valor}\n";

$valor = 15;
// Primera incrementa, despues asigna
$nuevoValor = ++$valor;

echo "{$nuevoValor}\n";
echo "{$valor}\n";
