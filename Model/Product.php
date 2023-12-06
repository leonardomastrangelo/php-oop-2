<?php
include __DIR__ . "/../Traits/Drawcard.php";

class Product
{
    use Drawcard;

    protected float $price;
    protected float $discount;
    protected int $quantity;

    public function __construct($price, $quantity)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function setPrice($val)
    {
        $this->discount = 0.5;
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
        $quantityString .= $this->quantity;
        return $quantityString;
    }

}
?>