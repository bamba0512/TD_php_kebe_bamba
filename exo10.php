<?php
while($prix!=0)
{
    $prix =readLine("donner le prix du produit\n");
    if($prix!=0){
        echo("donner le prix du produit\n");
    }
}
$i=0;

while($i<=$prix)
{
    $s=$s+$prix;
    $prix++;
    
}
echo("la somme est a payer est de"." ".$s."\n");
$donner=readLine("le montant donner\n");
$remise=$donner-$s;
echo("la remise  ".$remise);
?>