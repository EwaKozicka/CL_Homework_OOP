<?php

class Product {

    static private $nextID = 1;
    static private $percent = 20;
    private $name, $description, $price, $quantity;

    /**
     * 
     * @param string $description - product description
     * @param float $price - product price
     * @param int $quantity - product quantity
     * 
     */
    public function __construct($description, $price, $quantity) {
        $this->ID = self::$nextID;
        self::$nextID++;
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setQuantity($quantity);
    }

    public function setDescription($description) {
        if (is_string($description)) {
            $this->description = $description;
        }
    }

    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
    }

    public function setPrice($price) {
        if ((is_numeric($price)) && (!is_float($price))) {
            $price = round($price, 2);
        }
        if ((is_float($price)) && ($price > 0.01)) {
            $this->price = round($price, 2);
        }
    }

    public function setQuantity($quantity) {
        if ((is_int($quantity)) && ($quantity > 0)) {
            $this->quantity = $quantity;
        }
    }

    public function getDescription() {
        return $this->description;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * @return float - returns total price of products of the same type; includes discount if >= 3 products
     */
    public function getTotalSum() {
        if ($this->quantity >= 3) {
            $discount = ($this->price * $this->quantity) * self::$percent / 100;
            $sum = ($this->price * $this->quantity) - $discount;
        } else {
            $sum = $this->price * $this->quantity;
        }
        return round($sum, 2);
    }

    public function getID() {
        return $this->ID;
    }

}
