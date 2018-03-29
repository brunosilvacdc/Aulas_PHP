<?php

$curso1=[
    'codigo' => 500,
    'nome' => 'Desenvolvimento com PHP',
    'ch' => '40 horas',
    'categoria' => 'Desenvolvimento'
];


$curso2=[
    'codigo' => 501,
    'nome' => 'Orientação a Objeto com PHP',
    'ch' => '40 horas',
    'categoria' => 'Desenvolvimento'
];

$curso3=[
    'codigo' => 502,
    'nome' => 'Desenvolvimento Enterprise com PHP',
    'ch' => '40 horas',
    'categoria' => 'Desenvolvimento'
];


$formacaoPhp=[
    'PHP-500'=> $curso1,
    'PHP-501'=> $curso2,
    'PHP-502'=> $curso3,
];

foreach ($formacaoPhp as $identificacao => $curso){
    echo '<hr>';
    echo "Identificação:  $identificacao <br>";
    echo '<hr>';
    echo 'Codigo do Curso: ' . $curso['codigo'] . '<br>';
    echo 'Código do Curso: ' . $curso['nome'] . '<br>';
    echo 'Carga Horario: ' . $curso['ch'] . '<br>';
    echo 'Categoria do Curso: ' . $curso['codigo'] . '<br>';
    echo '<hr>';
}