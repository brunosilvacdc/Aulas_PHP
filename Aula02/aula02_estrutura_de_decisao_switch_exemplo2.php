<?php
$cargo = 'Analista de Infra';

switch ($cargo){
    case 'Programador':
    case 'Analista de Sistemas';
        echo 'Salário: 4500';break;
    case 'Engenheiro':
        echo 'Salario: 5500';
        break;
    case 'Analista de Suporte':
    case 'Analista de Infra':
        echo 'salario: 3200';
        break;
    default:
        echo ' Cargo Invalido';
        
}
echo '<hr>';

$num = 2;

$num += (--$num);

$$num = ( is_int ( $num ) ) ? ++$num : --$num;

echo $num;

echo '<hr>';
$var = 25;
switch($var){
    case ($var < 26):
        echo "$var é menor que 26";
        $var++;
    case ($var > 25):
        echo "$var é maior que 25";
        $var--;
}