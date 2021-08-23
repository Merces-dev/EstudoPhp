<?php

//Concatenacao de strings
$variavel = "Dev";
$variavel = $variavel . "media";

$variavel2 = "Plataforma";
$variavel2 .= " para programadores";

echo $variavel . $variavel2;

$num1 = 2;
$num2 = 4;
$num3 = 6;
$num4 = 8;

//Operadores Aritméticos

//Resultado igual a 2
$resposta1 = $num2 - $num1;

//Resultado igual a 8
$resposta2 = $num3 + $num1;

//Resultado igual a 12
$resposta3 = $num1 * $num3;

//Resultado igual a 2
$resposta4 = $num2 / $num1;

//Resultado igual a 2, já que o resto da divisão de 8 por 6 é igual a 2
$resposta5 = $resposta2 % $num3;



//Operadores de decremento e incremento

//Resultado igual a 3
$resposta1 = ++$num2 - $num1;

//Resultado igual a 8
$resposta2 = $num3-- + $num1;

//Resultado igual a 9
$resposta3 = --$num1 + $num4;

//Operadores lógicos
$booleano1 = true;
$booleano2 = false;
$booleano3 = true;

if ($booleano1 and $booleano2) {

  echo "Verdadeiro";

} else {

  //Resultado é falso pois os valores das variáveis são diferentes
  echo "Falso";

}

if ($booleano1 or $booleano2) {

  //Resultado é verdadeiro pois uma das variáveis é verdadeira
  echo "Verdadeiro";

} else {

  echo "Falso";

}

if ($booleano1 xor $booleano3) {

  echo "Verdadeiro";

} else {

  //Resultado é falso pois os valores de ambas as variáveis são verdadeiras
  echo "Falso";

}

if (!$booleano2) {

  //Resultado é verdadeiro pois o valor da variável é falso
  echo "Verdadeiro";

} else {

  echo "Falso";

}

if ($booleano1 && $booleano3) {

  //Resultado é verdadeiro pois ambos os valores das variáveis são verdadeiros
  echo "Verdadeiro";

} else {

  echo "Falso";

}

if (!$booleano1 || !$booleano3) {

  echo "Verdadeiro";

} else {

  //Resultado é falso, pois o valor de ambas as variáveis foram invertidas para falso
  echo "Falso";

}