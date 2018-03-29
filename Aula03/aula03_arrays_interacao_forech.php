<?php

$cursos = ['PHP','PHYTON','RUBY','JAVA SCRIPT','ANGULAR JS'];

foreach ($cursos as $curso){
    echo "Nome do Curso: $curso . <br>";
}

echo '<hr>';

foreach( $cursos as $key => $value){
    echo "Chave: $key | Curso: $value <br>";
}