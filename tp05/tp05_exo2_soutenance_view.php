<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 27/03/2017
 * Time: 14:45
 */
function readSoutenance()
{
    $filename="../include/csv/soutenance.csv";
    $file=fopen($filename,"r");
    while($ligne=fgetcsv($file,200,","))
    {
        echo "<pre>".print_r($ligne)."</pre>";
    }
    fclose($file);
}
readSoutenance();
?>

