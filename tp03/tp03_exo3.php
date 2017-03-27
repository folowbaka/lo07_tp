<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 26/03/2017
 * Time: 17:23
 */
$tabCapitalesUSA=array("Montgomery", "Raleigh", "Tallahassee", "Atlanta", "Topeka", "Augusta", "Albany", "Nashville");
echo "<pre>";
print_r($tabCapitalesUSA);
echo "</pre>";
foreach($tabCapitalesUSA as $capital)
{
    echo $capital."</br>";
}
echo implode($tabCapitalesUSA,";")."</br>";
echo $tabCapitalesUSA[2]."</br>";
echo count($tabCapitalesUSA)."</br>";
sort($tabCapitalesUSA);
echo "<pre>";
print_r($tabCapitalesUSA);
echo "</pre>";
?>