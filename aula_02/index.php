<?php

//Arrays single

$arr = ['guilherme', 'joao', 'davi'];
$arr = array('joao', 'chave2'=>'guilherme');

$arr[0] = 'guilherme';
$arr[] = 'joao';

//Arrays multidimencionais (uma array dentro de outra).
/*
$arr2 = array(array('guilherme','joao'), array(23,45));

echo $arr2[1][0];
*/
/*
$arr2[0] = array('chave1'=>'joao', 'davi');

echo $arr2[0]['chave1'];
*/

$arr2[0]['chave1'] = 'Wellington';
echo $arr2[0]['chave1'];
?>