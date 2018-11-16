<?php

$cadena = '';
$arreglo = [];
$videojuegos = [
  'FIFA',
  'Fornite',
  'Red Dead',
  'Call of Dutty',
  'Battlefield',
  'Pokémon',
  'GTA',
  'The Sims',
  'NFL',
];

# Vacio - empty
var_dump(empty($arreglo));
var_dump(empty($videojuegos));


# Existe en el arreglo - isset

var_dump(isset($videojuegos[5]));
var_dump(isset($videojuegos[15]));

# Contar arreglo - count

var_dump(count($arreglo));
var_dump(count($videojuegos));

# Antepenúltimo elemento

$posicion = count($videojuegos) - 2;
echo "{$videojuegos[$posicion]}\n";

# Ordenar - sort
// sort($videojuegos);
// var_dump($videojuegos);

# Ordenar sin perder indice - sort
// asort($videojuegos);
// var_dump($videojuegos);

# Ordenar de manera inversa - sort
// rsort($videojuegos);
// var_dump($videojuegos);

# Ordenar de manera inversa sin perder indice - sort
arsort($videojuegos);
var_dump($videojuegos);

# Sumar valores
$numeros = [1,20,30,15,5,10];

var_dump(array_sum($numeros));

# Encontrar diferencias entre arreglos

$salonA = ['a1' => 'Juan', 'a2' => 'Susana', 'a3' => 'Homero', 'a4' => 'Jaime'];
$salonB= ['a1' => 'Santiago', 'a2' => 'Diego', 'a3' => 'Susana'];

var_dump(array_diff($salonA, $salonB));

# Dividir arreglo

var_dump(array_chunk($videojuegos, 2));

# Dividir

var_dump(array_slice($videojuegos, 3));

# Unir

$frutas = ['platano', 'uvas', 'manzana'];
$verduras = ['chile', 'tomate'];

var_dump(array_merge($frutas, $verduras));


# Eliminar ultimo elemento

array_pop($videojuegos);
var_dump($videojuegos);

# Añadir

array_push($videojuegos, 'Smash Bros');
var_dump($videojuegos);

# Buscar

$cal = [1,2,3,4,5,6,7,8,9];
var_dump(array_search(3, $cal));

unset($cal[array_search(3, $cal)]);
