<?php
class Product
{
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
        if ($val == 0 || $val == 1) {
            $this->price -= ($this->price * $this->discount);
        }
    }

    public function getPrice()
    {
        $priceString = $this->price;
        $priceString .= ' $';
        return $priceString;
    }
    public function getQuantity()
    {
        $quantityString = 'Quantity : ';
        $quantityString .= $this->price;
        return $quantityString;
    }

}
?>