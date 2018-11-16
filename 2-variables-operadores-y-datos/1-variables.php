<?php

// Variables en PHP

# Reglas

$nombre = 'Samuel';
$_nombre = 'Samuel';

$color = 'Rojo';
$Color = 'Verde';
$COLOR = 'Azul';

$color = 'blanco';
$color = 14.0;

echo "{$color}";

$entero = 123;
$negativo = -1000;
$flotante = 13.1416;

echo "{$entero}\n{$negativo}\n{$flotante}\n";

$octal = 0755; // 493
$hexadecimal = 0xC4E; // 3150
$binario = 0b1010; // 10

echo "Octal: ${octal}\nHexadecimal: {$hexadecimal}\nBinario: {$binario}\n";

$nombre = 'Samuel';
$apellido = 'R.';
$edad = 34;
$soltero = true;

echo gettype($edad)."\n";
var_dump($edad);

$variable = "Variable";
$otraVariable = &$variable;

echo "{$otraVariable}\n";
$variable = "Otra variable";
echo "{$otraVariable}\n";
