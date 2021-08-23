<?php
// variável do tipo String
$nome = 'Meu nome 123';

// variável do tipo inteiro
$ano = 2017;

// variável do tipo float
$pi = 3.14159265;

// variável do tipo booleano
$sim = true;
//Variavel $nome recebe o valor “variavel”
$nome = 'variavel';

//Declaração da nova variável. O identificador será o conteúdo de $nome
$$nome = 'DevMedia';

//Exibe o conteúdo de $variavel
echo $variavel;
echo $nome;


class Exemplo {
private $variavelPrivada = 'Private';
public $variavelPublica = 'Public';
protected $variavelProtegida = 'Protected';
}