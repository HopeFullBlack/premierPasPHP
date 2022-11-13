<?php

namespace POO\Heritage;

class CofeeMachine
{
    public int $cups;

    public function __construct(int $cups)
    {
        $this->cups = $cups;
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
