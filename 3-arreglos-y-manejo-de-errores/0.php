<?php

$arr = [
  'a' => 1,
  'b' => 2,
  'c' => 3,
  'd' => 4,
  'e' => 5
];

$arrToJson = json_encode($arr);
var_dump($arrToJson);

$toClass = json_decode($arrToJson);
var_dump($toClass);
echo "{$toClass->a}\n";

$vector = new \Ds\Vector();
$vector->push(1);
$vector->push(2, 3);
var_dump($vector);
$vector->apply(function ($value) {
    return $value * 2;
});
var_dump($vector);
