<?php
while(($nombre<1)||($nombre>3))
{
    $nombre =readLine("donner un nombre compris entre 1 et 3\n");
    if(($nombre<1)||($nombre>3)){
        echo("nombre invalide\n");
    }
}
echo("merci");
?>