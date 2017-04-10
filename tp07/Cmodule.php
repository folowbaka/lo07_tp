<?php

/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 10/04/2017
 * Time: 13:00
 */
require_once 'WBinterface.php';
class Cmodule implements WBinterface
{
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;

    /**
     * Cmodule constructor.
     * @param $sigle
     * @param $label
     * @param $categorie
     * @param $effectif
     */
    public function __construct($sigle, $label, $categorie, $effectif)
    {
        $this->sigle = $sigle;
        $this->label = $label;
        $this->categorie = $categorie;
        $this->effectif = $effectif;
    }

    public function valide()
    {
        echo "module valide";
    }

    public function pageKO()
    {
        // TODO: Implement pageKO() method.
    }

    public function pageOK()
    {
        // TODO: Implement pageOK() method.
    }

    public function sauveTXT()
    {
        $resultat=$this->getCategorie();
        $resultat.=$this->getLabel();
        $resultat.=$this->getCategorie();
        $resultat.=$this->getEffectif();
        return $resultat;
    }

    public function sauveXML($file)
    {
       return "XML";
    }

    public function sauveBDR($base)
    {
        $resultat ="Insert INTO ".$base."values(";
        $resultat.="'".$this->getSigle()."',";
        $resultat.="'".$this->getLabel()."',";
        $resultat.="'".$this->getCategorie()."',";
        $resultat.="'".$this->getEffectif()."',";
        $resultat.=")";
        return $resultat;



    }

    function __toString()
    {
        return "module($this->sigle,$this->$label,$this->categorie,$this->effectif)</br>";
    }

    /**
     * @return mixed
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * @param mixed $sigle
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * @param mixed $effectif
     */
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

}