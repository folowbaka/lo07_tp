<?php

/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 10/04/2017
 * Time: 13:47
 */
class Cville
{
    private $nom;
    private $habitant;

    /**
     * Cville constructor.
     * @param $nom
     * @param $habitant
     */
    public function __construct($nom, $habitant)
    {
        $this->nom = $nom;
        $this->habitant = $habitant;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getHabitant()
    {
        return $this->habitant;
    }

    /**
     * @param mixed $habitant
     */
    public function setHabitant($habitant)
    {
        $this->habitant = $habitant;
    }

    function __toString()
    {
       return "Ville : ".$this->getNom().", Habitants : ".$this->getHabitant();
    }


}