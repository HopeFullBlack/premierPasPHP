<?php

//class : designe la represntion d'un objet
class Chien
{
    //le constructeur
    public function __construct(
        private string $nom,
        private string $race,
        private string $robe,
        private float $poids,
        private int $age,
        private string $pedigree,
    )
    {}

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->nom. ' est de race '.$this->race.
            ', il a '.$this->age. ' ans, il pese '.
            $this->poids. ' kg, sa robe est : '.$this->robe.', '
            . 'son pedigree est : '.$this->pedigree. ' <br>';
    }

    //accesseur et les mutateurs
    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Chien
     */
    public function setNom(string $nom): Chien
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * @param string $race
     * @return Chien
     */
    public function setRace(string $race): Chien
    {
        $this->race = $race;
        return $this;
    }

    /**
     * @return string
     */
    public function getRobe(): string
    {
        return $this->robe;
    }

    /**
     * @param string $robe
     * @return Chien
     */
    public function setRobe(string $robe): Chien
    {
        $this->robe = $robe;
        return $this;
    }

    /**
     * @return float
     */
    public function getPoids(): float
    {
        return $this->poids;
    }

    /**
     * @param float $poids
     * @return Chien
     */
    public function setPoids(float $poids): Chien
    {
        $this->poids = $poids;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Chien
     */
    public function setAge(int $age): Chien
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getPedigree(): string
    {
        return $this->pedigree;
    }

    /**
     * @param string $pedigree
     * @return Chien
     */
    public function setPedigree(string $pedigree): Chien
    {
        $this->pedigree = $pedigree;
        return $this;
    }

    //les methodes perso
    public function aboyer()
    {
        echo $this->nom. ' abboie sur le facteur <br>';
    }

    public function manger()
    {
        echo $this->nom. ' mange sa paté  <br>';
    }

    public function dormir()
    {
        echo $this->nom. ' dort dans sa niche  <br>';
    }

    public function mordre()
    {
        echo $this->nom. ' mord le facteur  <br>';
    }

}