<?php

namespace POO\Abstract;

abstract class Vehicule
{
    public function __construct(protected string $marque, protected string $model)
    {}

    abstract public function rouler(): string;

    protected function getMarque(): string
    {
        return $this->marque;
    }

    protected function getModel(): string
    {
        return $this->model;
    }

    // setter

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }
}
