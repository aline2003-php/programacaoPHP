//CONCATENAÇÃO
// O que é concatenação?
// Junção de strings usando o operador . (ponto).

<?php
// Definindo constantes
const CANAL = "Curso em vídeo \u{1F499}";

// Concatenação com ponto
echo "Eu adoro o " . CANAL;
// Resultado: Eu adoro o Curso em vídeo 💙
?>
_____________________________________________________________________________
// Diferença entre echo e print:

// Recurso                echo        print
// Retorna valor          Não         Sim
// Velocidade             Lento       Rápido
// Multíplos Parâmetros   Sim         Não
// Uso mais comum         Sim         Menos comum

_____________________________________________________________________________
//Constantes vs Variáveis:
//Constantes: Definidas com define() ou const, não mudam

//Variáveis: Começam com $, podem mudar
_____________________________________________________________________________
//SEQUÊNCIAS DE ESCAPE
// O que são?
//Caracteres especiais que permitem incluir caracteres que seriam interpretados de forma diferente.

//Tipos de Sequências de Escape:

<?php
$nome = "Aline";
$sobrenome = "Souza";
$apelido = "Repolho";
?>
_____________________________________________________________________________
1. Aspas Dentro de Aspas (\")
php
<?php
// Incluindo aspas duplas dentro da string
echo "$nome $sobrenome \"$apelido\" ";
// Resultado: Aline Souza "Repolho"
?>
//Por que usar? Sem \", as aspas seriam interpretadas como fim da string.
_____________________________________________________________________________
//2. Tabulação (\t)
<?php
// Adicionando espaços TAB entre os valores
echo "$nome \t\t $sobrenome \t\t \"$apelido\" ";
// Resultado: Aline		 Souza		 "Repolho"
?>
//Uso: Criar alinhamento visual em textos.
_____________________________________________________________________________
//3. Quebra de Linha (\n)
<?php
// Pulando linhas
echo "$nome \n\n $sobrenome \n\n \"$apelido\" ";
// Resultado:
// Aline
//
// Souza
//
// "Repolho"
?>
//Uso: Criar quebras de linha em saídas de texto.
