<?php

/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 10/04/2017
 * Time: 13:58
 */
require_once 'Cville.php';
class Cdictionnaire
{
    private $paysVille;

    /**
     * Cdictionnaire constructor.
     * @param $paysVille
     */
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $paysVille=array();
        $this->setPaysVille($paysVille);
        $this->addVille("Italie",new Cville("Séville",1));
        $this->addVille("France",new Cville("Paris",6));
        $this->addVille("Belgique",new Cville("Bruxelle",2));
        $this->addVille("Espagne",new Cville("Madrid",5));
        $this->addVille("Allemagne",new Cville("Berlin",3));
        $this->addVille("France",new Cville("Lyon",2));
        $this->addVille("France",new Cville("Liège",1));
        $this->addVille("Madrid",new Cville("Barcelone",1));
        $this->addVille("Allemagne",new Cville("Hambourg",4));
    }

    /**
     * @param mixed $paysVille
     */
    public function addVille($pays,$ville)
    {

        $this->paysVille[$pays][]=$ville;
    }
    public function setPaysVille($paysVille)
    {
        $this->paysVille = $paysVille;
    }

    /**
     * @return mixed
     */
    public function getPaysVille()
    {
        return $this->paysVille;
    }
    public function affiche()
    {
        foreach($this->getPaysVille() as $pays=>$city)
        {
            echo "Pays : ".$pays;
            echo "<ul>";
            foreach ($city as $ville)
            {
                echo "<li>$ville</li>";
            }
            echo "</ul>";
        }
    }




}