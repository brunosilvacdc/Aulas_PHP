<?php

$aluno = [
    'id' => 10,
    'nome' => 'Aline Costa Silva',
    'email' => 'aline.costa@gmail.com',
    'turma' => '2ANC'
];

$aluno2 = [
    'id' => 20,
    'nome' => 'Lucia Couto',
    'email' => 'luci.couto@gmail.com',
    'turma' => '2ANC'
];
$aluno ['curso'] = 'Analise de Sistemas';
$aluno2['curso'] = 'Analise de Sistemas';

echo '<pre>';
print_r ($aluno);
echo '<hr>';
print_r($aluno2);


echo '<hr>';

echo "Nome: {$aluno['nome']}<br>";
echo "Nome: {$aluno['turma']}<br>";
echo 'Curso: ' . $aluno[curso];
echo '<hr>';

echo "Nome: $aluno2[nome] <br>";
echo "Turma: $aluno2[turma]<br>";
echo 'Curso ' . $aluno[curso] . "<br>";
echo 'Chave Invalida:' . $aluno2['chaveincorreta'];

echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';


$arrayKeyExists = array_key_exists('turma', $aluno2);

var_dump($arrayKeyExists);