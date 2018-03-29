<?php
$array = [0,1,2,3,4,5,6,7,8,9,A,B,C];


echo '<hr>';
echo "<h4> é uma array? </h4>";
var_dump(is_array($array));

echo '<hr>';
echo "<h4> é um inteiro? </h4>";
var_dump(is_int($array));

echo '<hr>';
echo "<h4> é um Inteiro meu array na chave Zero? </h4>";
var_dump(is_int($array[0]));

echo '<hr>';
echo "<h4> é uma string? </h4>";
var_dump(is_string($array[10]));

echo '<hr>';
echo "<h4> é uma boleano? </h4>";
var_dump(is_bool($array));

echo '<hr>';
echo "<h4> Variavel do tipo? </h4>";
var_dump(gettype($array));

echo '<hr>';
echo "<h4> Variavel do tipo? </h4>";
var_dump(gettype($array[7]));