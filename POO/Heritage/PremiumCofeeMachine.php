<?php

namespace POO\Heritage;

final class PremiumCofeeMachine extends CofeeMachine
{
//    protected int $cup = 2;

    public function __construct(int $cups)
    {
        parent::__construct($cups);
        dump('code perso premium');
    }

    public function select(string $selection)
    {
        return match ($selection) {
            'espresso' => $this->makeEspresso(),
            'vanilla' => $this->makeVanilla(),
            default => 'erreur'
        };
    }

    protected function makeVanilla(): void
    {
        for ($i = 1; $i <= $this->cups; $i++) {
            echo "Café vanille n°$i servi(s)!<br>";
        }
    }
}
