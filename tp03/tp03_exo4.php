<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 26/03/2017
 * Time: 18:32
 */
$hashCapitales=["France"=>"Paris","Italie"=>"Rome","Belgique"=>"Bruxelles","Espagne"=>"Madrid","Allemagne"=>"Berlin","Portugal"=>"Lisbonne"];
    echo $hashCapitales["Allemagne"]."</br>";
foreach($hashCapitales as $pays=>$capital)
{
    echo $pays.">>>".$capital."</br>";
}
    echo "<pre>";
    print_r(array_keys($hashCapitales));
    print_r(array_values($hashCapitales));
    echo "</pre>";
?>