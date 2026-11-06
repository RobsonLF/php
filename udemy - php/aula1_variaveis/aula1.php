<?php
//Variáveis tipos Primitivos básicos
/*
Inteiro
decimais
boolean
string

Tipo primitivos compostos
Array
Objetos
*/



//Tipos Basico
    $nome = 'Robson';//string
    $site = 'www.google.com';//string
    $ano = 1981;//int
    $bloqueado = false;//boolean
//Tipos Compostos
    $frutas = array('Banana', 'Laranja', 'Manga');//array

    $nacimento = new DateTime(); //objeto
    //var_dump($nacimento);

    //echo $frutas[2];
    //echo $nome;
//Tipos Especiais
    //Resource
    $arquivo  =fopen('aula1.php', 'r');
    var_dump($arquivo);

    //null
    $nulo = null;
    
//
?>