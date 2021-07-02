<?php

$categorias[]='infantil';
$categorias[]='idoso';
$categorias[]='adulto';
$categorias[]='adolescente';

print_r($categorias);
$nome = 'Eduardo';
$idade = 8;

//var_dump($nome); mostrar qual é tipo de variavel se int ou string e etc
//var_dump($idade);mostrar qual é tipo de variavel se int ou string e etc

if($idade >= 6 && $idade <= 12)
{
for($i = 0; $i < count($categorias);$i++)
{
     if($categorias[$i] == 'infantil')
     {
     echo " O nadador ".$nome." compete na categoria " .$categorias[$i];
     }
}
}
else if($idade >=13 && $idade<=18)
{
    for($i = 0; $i < count($categorias);$i++)
    {
        if($categorias[$i]=='adolescente')
         {
         echo "O nadador ".$nome." compete na categoria  adolescente";
         }
    }}
else
{
    for($i = 0; $i < count($categorias);$i++)
    {
         if($categorias[$i]=='adulto')
         {
         echo " O nadador ".$nome." compete na categoria  adulto";
         }
    }
}

