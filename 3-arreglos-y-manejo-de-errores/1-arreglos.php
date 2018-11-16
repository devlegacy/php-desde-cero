<?php

/**
 * Arreglos indexados
 */
$numeros = [];
$numeros = array();

var_dump($numeros);

$dias = ['Lunes','Martes', 'Miercoles', 'Jueves'];
var_dump($dias);

echo "{$dias[2]}\n";
$dias[] = 'Viernes';

$dias[13] = 'Día libre';

var_dump($dias);

/**
 * Arreglos asociativos
 */

$usuario = [
  'nombre' => 'Samuel',
  'edad' => 25,
  'lenguajes' => 'PHP',
];

var_dump($usuario);

echo "Hola, mi nombre es: {$usuario['nombre']}\n";

$alumnos = [
  ['Juan', 20, 'México'],
  ['Salomé', 25, 'Perú'],
  ['Carlos', 24, 'Bolivia'],
  ['Homero', 37, 'Neza'],
];

var_dump($alumnos);
echo "{$alumnos[1][0]}\n";

$alumnos = [
  [
    'nombre' => 'Juan',
    'edad' => 20,
    'pais' => 'México',
  ],
  [
    'nombre' => 'Salomé',
    'edad' => 25,
    'pais' => 'Perú'
  ],
  [
    'nombre' => 'Carlos',
    'edad' => 24,
    'pais' => 'Bolivia'
  ],
];

echo "{$alumnos['2']['edad']}\n";

$alumnos[1]['calificacion'] = 9.5;
var_dump($alumnos);
