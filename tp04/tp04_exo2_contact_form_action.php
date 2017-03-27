<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 26/03/2017
 * Time: 23:35
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../include/css/tp02_exo4.css">
    <title>Title</title>
</head>
<body>
<form action="tp04_exo2_contact_form_action.php" method="get">
    <section>
        <label for="prenom">Prenom</label><br/>
        <input type="text" name="prenom" id="prenom"><br/>
        <label for="nom">Nom</label><br/>
        <input type="text" name="nom" id="nom"><br/>
        <label for="email">Email</label><br/>
        <input type="email" name="email" id="email"><br/>
    </section>
    <section>
        <input type="radio" name="sexe" value="femme"> Femme<br>
        <input type="radio" name="sexe" value="homme"> Homme<br>
    </section>
    <section>
        <input type="checkbox" name="operateur" value="free">Free<br>
        <input type="checkbox" name="operateur" value="orange" >Orange<br>
        <input type="checkbox" name="operateur" value="bouygue" >Bouygues<br>
    </section>
    <select name="select">
        <option value="internet">Internet illimité</option>
        <option value="sms">SMS illimité</option>
        <option value="appel">Appel Illimité</option>
    </select><br>
    <section>
        <input type="radio" name="prix" value="dix"> 10 euros<br/>
        <input type="radio" name="prix" value="vingt"> 20 euros<br>
        <input type="radio" name="prix" value="trente"> 30 euros<br>
        <input type="radio" name="prix" value="quarante"> 40 euros<br/>
        <input type="radio" name="prix" value="cinquante"> 50 euros<br>
        <input type="radio" name="prix" value="soixante"> 60 euros<br/>
    </section>
    <button type="submit">Submit</button>

</form>

</body>
</html>
<?php
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
    if(isset($_GET["email"]))
    {
        if(trim($_GET["email"]))
        {
            if(filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL))
            {
                echo $_GET["email"];
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
?>
