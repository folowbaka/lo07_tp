<?php
/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 10/04/2017
 * Time: 13:17
 */
require_once 'Cmodule.php';

$module=new Cmodule($_GET["sigle"],$_GET["label"],$_GET["categorie"],$_GET["effectif"]);
$module->valide();
echo "</br>".$module->sauveTXT()."</br>";
echo $module->sauveBDR("bdd")."</br>";
?>