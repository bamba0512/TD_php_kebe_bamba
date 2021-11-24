<?php
 $tab[10];
 
 for($i=0;$i<=10;$i++)
 {
     $tab[$i]=readLine("entrer le numero"." ".($i+1)."\n");
 }
 $max=0;
 for($i=0;$i<10;$i++)
 {
    if($tab[$i]>$max)
    {
        $max=$tab[$i];
        $position=$i; 
        $posn=$position+1; 
    }
 }
 echo("le maximum est  ".$max."\n");
 echo("la position du maximum est  ".$posn);

?>