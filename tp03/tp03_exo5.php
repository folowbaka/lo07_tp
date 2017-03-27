<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 26/03/2017
 * Time: 18:59
 */
    $chaine="prof=lemercier,cours=web,salle=A002,date=09/03/2016,cours=php";
    $tabchaine=preg_split("/,|=/",$chaine);
    echo($tabchaine[1]);
    for($i=0;$i<count($tabchaine);$i++)
    {
        if($i%2==0)
            $liste_key[]=$tabchaine[$i];
        else
            $liste_values[]=$tabchaine[$i];
    }
    $liste_key=implode(":",$liste_key);
    $liste_values=implode(":",$liste_values);
    $liste_key=explode(":",$liste_key);
    $liste_values=explode(":",$liste_values);
    print_r($liste_key);
    $elements=array_combine($liste_key,$liste_values);
    print_r($elements);
?>