<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 27/03/2017
 * Time: 14:22
 */
function persistance($ligne)
{
    $filename="../include/csv/soutenance.csv";
    $file=fopen($filename,"a");
    fputcsv($file,$ligne);

}
?>

