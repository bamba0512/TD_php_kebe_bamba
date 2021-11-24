<?php
$partant=readLine("donner le nombre  chevaux partant\n");
$joue=readLine("donner le nombre  chevaux joue\n");
$i=1;
$f=1;
while($i<=$partant)
{
    $f=$f*$i;
    $i++;
    
}



$x=$partant-$joue;
$i2=1;
$f2=1;
while($i2<=$x)
{
    $f2=$f2*$i2;
    $i2++;
    
}
while($i<=$joue)
{
    $f3=$f3*$i;
    $i++;
    
}
$f3*$f2;
$y=$f/($f3*$x);
$x2=$f/$f2;
$x3=1/$x2;
$x4=1/$y;

$ordre=("dans l ordre".$x3." "."de gangner\n");
$ordre=("dans le desordre".$x4." "."de gangner\n");

?>