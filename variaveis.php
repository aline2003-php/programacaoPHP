// Resumo dos tipos:

//   TIPO              DESCRICAO               EXEMPLO
//   int               Números Inteiros        300,-1,0
//   float             Números Decimais        300.5,45.7,10.99
//   bool              Verdadeiro/Falso        true/false
//   string            Texto                   "Aline" "Souza"
//   array             Coleçao de valores      [1,2,3,4]


// STRINGS E INTERPOLAÇÃO
// Aspas Duplas vs Aspas Simples

<?php
$casado = true;

// Aspas DUPLAS - variáveis são interpretadas
print "O valor para casado é $casado";
// Resultado: O valor para casado é 1

// Aspas SIMPLES - variáveis NÃO são interpretadas
print 'O valor para casado é $casado';
// Resultado: O valor para casado é $casado
?>

//Observações:
// true é exibido como 1
//false é exibido como vazio (nada)
//Aspas duplas interpolam variáveis
//Aspas simples tratam tudo como texto literal.

//Arrays e Var_dump

<?php
// Array com diferentes tipos de dados
$vet = [1, 5, 6.9, 7.9];
var_dump($vet);

// Resultado:
// array(4) {
//   [0]=> int(1)
//   [1]=> int(5)
//   [2]=> float(6.9)
//   [3]=> float(7.9)
// }
?>












