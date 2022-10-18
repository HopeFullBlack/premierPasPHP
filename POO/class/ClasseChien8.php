<?php

/**
 *
 */
class ClasseChien8
{
    /**
     * ClasseChien8 constructor.
     */
    public function __construct(
        private string $nom,
        private string $couleur,
        private int $age
    )
    {}

    public function __toString(): string
    {
        echo "{$this->getNom()} est un(e) chien(ne) {$this->getCouleur()} de {$this->age} an(s)<br>";
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return ClasseChien8
     */
    public function setNom(string $nom): ClasseChien8
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     * @return ClasseChien8
     */
    public function setCouleur(string $couleur): ClasseChien8
    {
        $this->couleur = $couleur;
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
     * @return ClasseChien8
     */
    public function setAge(int $age): ClasseChien8
    {
        $this->age = $age;
        return $this;
    }

    public function aboyer(string $cible){
        return $this->getNom()." abboie sur : ".$cible.'<br>';
    }
}

$medor = new ClasseChien8('Médor', 'roux', 5);

echo $medor->getNom().' remue la queue <br/>';
echo $medor->aboyer('la femme de patoche, elle même amie avec le père de ton cousin du coté de la belle famille de ton oncle');
echo $medor;