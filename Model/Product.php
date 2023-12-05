<?php
class Product
{
    // protected non permette di modificare da esterno ma de stessa classe o classi figlie
    protected float $price;
    protected float $discount = 0.5;
    protected int $quantity;

    public function __construct($price, $quantity)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function setPrice($val)
    {
        if ($val == 0 || count($val) == 1) {
            $this->price -= $this->discount;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }
}
?>