<?php
while(($nombre<10)||($nombre>20))
{
    $nombre =readLine("donner un nombre compris entre 10 et 20\n");
    if($nombre<10){
        echo("nombre inferieure ressayer\n");
    }
    else
    echo("nombre superieur ressayer\n");
}
echo("bravo\n");

?>