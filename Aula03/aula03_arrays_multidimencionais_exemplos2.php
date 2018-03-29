<?php
$aluno1 = [
    'id' => 10,
    'nome' => 'Bruno Silva dos Santos',
    'turma' => 'Turma X',
    'Disciplinas' => [
        'MAT' => [
            'BIMESTRES' => [
                'B1' => 10,
                'B2' => 10,
                'B3' => 10,
                'B4' => 10,
                'MEDIA' => 10
            ]
        ],
        'POR' => [
            'BIMESTRES' => [
                'B1' => 10,
                'B2' => 10,
                'B3' => 10,
                'B4' => 10,
                'MEDIA' => 10
            ]
        ]
    ]
];

$aluno2 = [
    'id' => 20,
    'nome' => 'Juliana Oliveira de Lima',
    'turma' => 'Turma X',
    'Disciplinas' => [
        'MAT' => [
            'BIMESTRES' => [
                'B1' => 10,
                'B2' => 10,
                'B3' => 10,
                'B4' => 10,
                'MEDIA' => 10
            ]
        ],
        'POR' => [
            'BIMESTRES' => [
                'B1' => 10,
                'B2' => 10,
                'B3' => 10,
                'B4' => 10,
                'MEDIA' => 8
            ]
        ]
    ]
];

$alunos = [
    'alunos' => [
        $aluno1,
        $aluno2
    ]
];


 
echo '<pre> <hr>';
print_r($alunos);
echo ' <hr>';

 echo '<hr>Relatório: Alunos(as)<hr>';
 echo 'Nome do alunos(as):' . $alunos['alunos'][0]['nome'] .'<br>';
echo  'Média de Matemática = ' . $alunos['alunos'][0]['Disciplinas']['MAT']['BIMESTRES']['MEDIA'];

echo '<br><hr>';

echo 'Nome do alunos(as):' . $alunos ['alunos'][1]['nome'] . '<br>';
echo  "Média de Português " . '= ' . $alunos['alunos'][1]['Disciplinas']['POR']['BIMESTRES']['MEDIA'];
echo '<hr>';

