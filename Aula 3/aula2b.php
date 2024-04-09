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
?>