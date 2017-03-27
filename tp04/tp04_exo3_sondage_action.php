<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 27/03/2017
 * Time: 00:33
 */
if(isset($_GET["prenom"]))
{
    if(trim($_GET["prenom"]))
    {
        echo $_GET["prenom"];
    }
    else
    {
        echo "<p>Le champs Prenom n'est pas rempli </p>";
    }
}
if(isset($_GET["nom"]))
{
    if(trim($_GET["nom"]))
    {
        echo $_GET["nom"];
    }
    else
    {
        echo "<p>Le champs nom n'est pas rempli </p>";
    }
}
if(isset($_GET["sexe"]))
{

        echo $_GET["sexe"];

}
if(isset($_GET["operateur"]))
{
        echo $_GET["operateur"];
}

if(isset($_GET["prix"]))
{
    echo $_GET["prix"];
}
?>
