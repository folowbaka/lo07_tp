<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 27/03/2017
 * Time: 01:19
 */
var_dump($_POST);
if(isset($_POST["prenom"]))
{
    if(trim($_POST["prenom"]))
    {
        echo $_POST["prenom"];
    }
    else
    {
        echo "<p>Le champs Prenom n'est pas rempli </p>";
    }
}
if(isset($_POST["nom"]))
{
    if(trim($_POST["nom"]))
    {
        echo $_POST["nom"];
    }
    else
    {
        echo "<p>Le champs nom n'est pas rempli </p>";
    }
}
if(isset($_POST["email"]))
{
    if(trim($_POST["email"]))
    {
        if(filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL))
        {
            echo $_POST["email"];
        }
        else
        {
            echo "Adresse email non valide";
        }
    }
    else
    {
        echo "<p>Le champs email n'est pas rempli </p>";
    }
}
if(isset($_FILES["image1"]))
{
        foreach ($_FILES["image1"] as $propImage)
        {
            echo $propImage."</br>";
        }
        $chemin=$_FILES["image1"]["tmp_name"];
        $chemin2="../include/image/".$_FILES["image1"]["name"];
    rename($chemin,$chemin2);
        echo "<img src='".$chemin2."' alt=''>";
}
if(isset($_FILES["image2"]))
{
    foreach ($_FILES["image2"] as $propImage)
    {
        echo $propImage."</br>";
    }
    $chemin=$_FILES["image2"]["tmp_name"];
    $chemin2="../include/image/".$_FILES["image2"]["name"];
    rename($chemin,$chemin2);
    echo "<img src='".$chemin2."' alt=''>";
}

if(isset($_FILES["image3"]))
{
    foreach ($_FILES["image3"] as $propImage)
    {
        echo $propImage."</br>";
    }
    $chemin=$_FILES["image3"]["tmp_name"];
    $chemin2="../include/image/".$_FILES["image3"]["name"];
    rename($chemin,$chemin2);
    echo "<img src='".$chemin2."' alt=''>";
}
}


?>