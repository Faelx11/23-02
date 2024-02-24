<?php
$nome = "Rafael";
$idade = '40';
$idade2 = 40;
$lista = ['banana','uva','limão'];

echo $nome . '<br>';
echo $idade. '<br>';
echo $lista;
echo '<br>';
var_dump($nome);
echo '<br>';
var_dump($idade);
echo '<br>';
var_dump($lista);

if($idade === $idade2){
    echo"sim";
}else{
    echo '<br> dentro do else';
    var_dump($idade);
    echo '<br>';
    var_dump($idade2);
}