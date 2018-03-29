 <?php

$array1 = [
	'nome', 
	'email', 
	'telefone'
];
$array2 = [
	'Leticia dos Santos',
	'leticia.santo@gmail.com',
	'987452124'
];

$arrayCombinado = array_combine($array1, $array2);

	echo '<pre>';
	print_r($arrayCombinado);
	echo '<hr>';

$produtos = [
	'mouse',
	'teclado',
	'notebook',
	'monitor',
	'mouse',
	'teclado'
];
$contagem = array_count_values($produtos);
print_r($contagem);

$produtos2 = [
	'mouse',
	'teclado',
	'hd',
	'Pendrive',
	'Celular',
	'teclado'
];

$diff = array_diff($produtos, $produtos2);
	echo '<hr>';
	print_r($diff);
	echo '<hr>';

$array1 = ['Aline dos Santos', 'Luciana de Oliveira'];
$array2 = ['Carolina Costa', 'Raquel Souza'];

$merge =  array_merge($array1, $array2);

	print_r($merge);

$alunos1 = [
	'turma' => [
		'3AnoA' =>[
			'nome' => 'Patricia Santos',
			'email' => 'pat.santos@gmail.com'
		],
		[
			'nome' => 'Luci Santos',
			'email' => 'luci.santos@gmail.com'
		]
	]
];

$alunos2 = [
	'turma' => [
		'2AnoA' =>[
			'nome' => 'Joao Santos',
			'email' => 'j.santos@gmail.com'
		],
		[
			'nome' => 'Marcos Santos',
			'email' => 'm.santos@gmail.com'
		]
	]
];
$alunosMerge = array_merge_recursive($alunos1, $alunos2);

	echo '<hr>';
	echo $alunos1['turma']['3AnoA']['nome'].'<br>';
	echo $alunos1['turma']['0']['nome'].'<br>';
	echo '<hr>';
	print_r($alunosMerge);

echo '<hr>';
$notas = [10,20,30,40,50,60];
echo 'A soma de todos arrays é de:' . array_sum($notas);
echo '<hr>';

$emails =[
	'aline.s@gmail.com',
	'aline.s@gmail.com',
	'l.s@uol.com.br',
	'l.s@uol.com.br'
];

$emailsUniq = array_unique($emails);
print_r($emailsUniq);
echo '<hr>';


$numeros = [
	1,
	2,
	3,
	4,
	5,
	6,
	7,
	8,
	9,
	10,
	11,
	12,
	13,
	14,
	15
];

$retorno = array_filter($numeros, function($valor){
	return ($valor %2);	
});
print_r ($retorno);
echo count($retorno);

