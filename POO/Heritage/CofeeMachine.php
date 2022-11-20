<?php

namespace POO\Heritage;

class CofeeMachine
{
    public function __construct(public int $cups)
    {
    }

    public function select(string $selection)
    {
        return match ($selection) {
            'espresso' => $this->makeEspresso(),
            default => 'erreur'
        };
    }

    public function makeEspresso(): void
    {
        for ($i = 1; $i <= $this->cups; $i++) {
            echo "Café n°$i servi(s)!<br>";
        }
    }
}
