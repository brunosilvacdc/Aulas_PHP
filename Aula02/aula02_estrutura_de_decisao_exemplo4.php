<?php
//uso elseif
$media =7;
$falta =8;

if($media >=7 && $falta <=5){
    echo 'Status: Aprovado';
}elseif($media < 8 && $falta  <= 5){
    echo 'Status: Recuperação';
}else{
    echo ' Reprovado';
}
