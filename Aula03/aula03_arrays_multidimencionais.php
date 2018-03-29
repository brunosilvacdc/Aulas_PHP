<?php
$aluno1 =[
    'id' => 10,
    'nome' => 'Aluno1',
    'turma' => 'Turma X'
];

$aluno2 =[
    'id' => 20,
    'nome' => 'Aluno2',
    'turma' => 'Turma X'
];

$alunos =[
    $aluno1,
    $aluno2
];

echo '<pre>';
print_r ($aluno1);
echo '<hr>';
print_r($aluno2);
echo '<hr>';
print_r($alunos);
echo '<hr><br><br>';
echo 'Nome do alumo1:' . $alunos[0]['nome'];
echo '<br><br><hr>';
echo 'Nome do aluno2:' . $alunos [1]['turma'];