<?php

 $tab[$taille];
 $taille=20;
 if($tab[$i]!=[0]){

     
         for($i=0;$i<=$taille;$i++)
            { 
     
                $tab[$i]=readLine("entrer le numero"." ".($i+1)."\n");
                     
            }   
 }
 if($tab[$i]==[0]){

     
     $max=0;
     for($i=0;$i<=$taille;$i++)
     {
         if($tab[$i]>$max)
         {
             $max=$tab[$i];
             $position=$i;  
            }
        }
    }
    echo("le maximum est  ".$max."\n");
    echo("la position du maximum est  ".$position);
?>