<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../include/css/tp02_exo4.css">
    <title>Title</title>
</head>
<body>
<?php
define("JOUR",31);
define("MOIS",12);
function getlistJour(){
    $tabJour=[];
    for($i=1;$i<=JOUR;$i++)
    {
        $tabJour[]=$i;
    }
    return $tabJour;
}

function getListMois(){
    $tabMois=[];
    for($i=1;$i<=MOIS;$i++)
    {
        $tabMois[]=$i;
    }
    return $tabMois;
}

function getlistAnnee(){

    return array(2017,2018);
}
function getlistSalle(){

    return array("P203", "P204", "A207", "A210", "K200");
}
function getlistHeure(){

    $tabTime=[];
    $hDep=strtotime('08:00');
    $hFin=strtotime("18:00");
    while($hDep<=$hFin)
    {
        $time = date('H:i', $hDep);
        $tabTime[]=$time;
        $hDep = $hDep + 60 * 20;
    }


    return $tabTime;
}
function selectDynamique($label,$name,$Table)
{
    echo"<label for='$label'>$label</label><br/>";
    echo "<select name='$name'>";
        foreach($Table as $option)
        {
            echo "<option value='$option'>$option</option>";
        }
    echo "</select><br>";
}
function formDynamique($tabLabel,$tabName,$tabTable)
{
    echo "<form action='tp05_exo2_soutenance_action.php' method='get'>";
    for($i=0;$i<count($tabLabel);$i++)
    {
        selectDynamique($tabLabel[$i],$tabName[$i],$tabTable[$i]);
    }
    echo "<button type='submit'>Submit</button>";
    echo "</form>";

}
$tabLabel=array("Jour","Mois","Année","Heure","Salle");
$tabName=array("jour","mois","annee","heure","salle");
$tabTable=array(getlistJour(),getListMois(),getlistAnnee(),getlistHeure(),getlistSalle());
formDynamique($tabLabel,$tabName,$tabTable);
?>
</body>
</html>
