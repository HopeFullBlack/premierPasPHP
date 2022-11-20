<?php

namespace POO\Abstract;

class BMW extends Vehicule{

    public function __construct(string $marque='BMW', string $model='m240i' )
    {
        parent::__construct($marque, $model);
    }

    public function rouler(): string
    {
        return "<p>cette {$this->model} de la marque française {$this->marque} roule.</p>";
    }

}