<?php

namespace POO\cart;

class Cart
{

    public function __construct(
        public int   $quantity,
        public float $totalPrice
    ){}

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Cart
     */
    public function setQuantity(int $quantity): Cart
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalPrice
     * @return Cart
     */
    public function setTotalPrice(float $totalPrice): Cart
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function discount(int $discountValue): Cart
    {
        $this->totalPrice *= (100 - $discountValue) / 100;
        return $this;
    }
}