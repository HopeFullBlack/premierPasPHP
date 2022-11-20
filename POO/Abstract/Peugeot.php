<?php

namespace POO\Abstract;

class Peugeot extends Vehicule{

    public function __construct(string $marque='Peugeot', string $model='308' )
    {
        parent::__construct($marque, $model);
    }

    public function rouler(): string
    {
        return "<p>cette {$this->model} de la marque française {$this->marque} roule.</p>";
    }

}