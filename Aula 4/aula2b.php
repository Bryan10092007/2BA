<?php
echo ("<h2>Trabahando com PHP</h2>");
print("Ola, eu estou programando em PHP<br>");
echo ("Testando a saída de uma String com echo<br>");
//este é um comentário simples
#este também é um comentário simples
/*
multi comentários
*/
$nome = "Bryan "; //declarando variavel e atribuindo valor tipo string
$sobrenome = "Faria Rodrigues"; //declarando variavel e atribuindo valor tipo string
$idade = 20; //declarando variavel e atribuindo valor tipo int
$numero = 2024; //declarando variavel e atribuindo valor tipo int
$dia = 22; //declarando variavel e atribuindo valor tipo int
$valordia = 70.40; //declarando variavel e atribuindo valor tipo float ou double $salario; //declarando variavel
$salario = $dia * $valordia; //declarando variavel e acumulando operação com 2 variváveis

echo ("$nome".("<br>"));
echo('$nome'."<br>");
echo("$sobrenome".("<br>"));
echo("$idade".("<br>"));
echo("$numero".("<br>"));


//comando de saída echo e print
//concatenando string com variáveis
echo("Nome: " . $nome . '<br>');
echo("Sobrenome: " . $sobrenome . "<br>");
echo("Nome completo: " . $nome . "" . $sobrenome . "<br>");
echo("Idade: " . $idade . "<br>");
print("Número: " . $numero . "<br>");
print("Dia " .  $dia . "<br>");
print("Valor dia: " . $valordia . "<br>");
print("Salário R$:" . $salario . "<br>");
print("Salário R$:" . ($dia * $valordia) . "<br>");

print("#####################################################" . "<br>");

$a = 10;
$b = 20;
$soma;
$subtravao;
$multiplicacao;
$divisao;
$z = 30.5;

$soma = $a + $b;
$subtracao= $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;

echo("Soma: " . $soma . "<br>");
echo("Subtração: " . $subtracao . "<br>");
echo("Multiplicação: " . $multiplicacao . "<br>");
echo("Divisão: " . $divisao . "<br>");

print("#####################################################" . "<br>");

var_dump(5);
var_dump("Bryan");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

print("<br>#####################################################" . "<br>");

var_dump(5);
var_dump("Bryan");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56.0]);
var_dump(NULL);

print("<br>#####################################################" . "<br>");

var_dump("Bryan Faria Rodrigues");

print("<br>#####################################################" . "<br>");

var_dump($z);

print("<br>#####################################################" . "<br>");

echo str_word_count("a rhadaxa tem cara de capivara")
?>