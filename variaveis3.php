//Principais Sequências de Escape:
//    Sequência               Significado            Exemplo de saída
//        \"                   Aspas Duplas              "Texto"
//        \'                   Aspas Simples             'Texto'
//        \n                    Nova Linha              Pula Linha
//        \t                   Tabulação                Espaço TAB
//        \\                   Barra Invertida              \
//        \$                   Cifrão(evita interpolação)    $
//      \u{1F499}              Emoji (inicode)              💙

___________________________________________________________________________
//ESTRUTURAS CONDICIONAIS
//O que é?
//Estruturas que permitem executar diferentes blocos de código baseado em condições.

//Estrutura IF/ELSE
<?php
$idade = 18;

if ($idade >= 18) {
    echo "Maior de idade!";
} else {
    echo "Menor de idade!";
}
// Resultado: Maior de idade!
?>

