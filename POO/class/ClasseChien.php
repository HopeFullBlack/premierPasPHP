<?php

/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 15:40
 */
class ClasseChien
{
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
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }
    private $nom;
    private $couleur;
    private $taille;

    /**
     * ClasseChien constructor.
     */
    public function __construct()
    {

    }

}