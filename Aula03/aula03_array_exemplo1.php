<?php


$vetor = array(1,2,3);
$vetor2 = array('a','b','c',54);

echo '<pre>';
print_r($vetor);

echo '<hr>';

print_r($vetor2);

echo '<hr>';

var_dump($vetor2);

echo '<hr>';

var_dump($vetor);

echo '<hr>';
echo ' O valor da posição "0" do vetor1 é: ' . $vetor[0];
echo '<br>';
echo 'O valor da posição "0" do vetor2 é:' . $vetor2[2];