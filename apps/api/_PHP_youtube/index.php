<?php

require __DIR__ . '/classes/Pessoa.php';
require __DIR__ . '/classes/Aluno.php';
require __DIR__ . '/classes/Professor.php';
require __DIR__ . '/classes/Disciplina.php';
require __DIR__ . '/classes/Matricula.php';

/* $pessoa1 = new Pessoa();
$pessoa1->nome = 'Joao';
$pessoa1->email = 'joao@gmail.com';
$pessoa1->telefone = '5542999009900';
*/

$aluno1 = new Aluno();
$aluno1->ra = 'ABC126262626';
$aluno1->nome = 'Joao';
$aluno1->email = 'joao@gmail.com';
$aluno1->telefone = '5542999009900';

$professor1 = new Professor();
$professor1->nome = 'Claudinei';
$professor1->email = 'profe@email.com';
$professor1->telefone = '5542999008800';
$professor1->titulacao = 'Mestre';

$disciplina1 = new Disciplina();
$disciplina1->nome = 'Programacao Orientada a Objetos';

$disciplina2 = new Disciplina();
$disciplina2->nome = 'Paradigmas da programacao';

$matricula1 = new Matricula();
$matricula1->data = '10/08/2026';
$matricula1->aluno = $aluno1;
$matricula1->disciplina = $disciplina1;

var_dump($matricula1);


die('OK' . "\n");