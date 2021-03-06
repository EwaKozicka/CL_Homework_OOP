<?php

require_once 'Product.php';

class ShoppingCart {

    private $products = [];
    
/**
 * 
 * @param Product $newProduct
 * @return \ShoppingCart    
 */
    
    public function addProduct(Product $newProduct) {
        $this->products[$newProduct->getID()] = $newProduct;
        return $this;
    }
/**
 * 
 * @param int $productID
 */
    public function removeProduct($productID) {
        if (isset($this->products[$productID])) {
            unset($this->products[$productID]);
        }
    }
/**
 * 
 * @param int $productID
 * @param int $newQuantity
 */
    public function changeProductQuantity($productID, $newQuantity) {
        if (isset($this->products[$productID])) {
            $this->products[$productID]->setQuantity($newQuantity);
        }
    }

/**
 * prints receipt which includes product id, name, price, quantity and total sum
 */
    private $toPay = 0;
    
//    private function toPay() {
//        foreach ($this->products as $product) {
//            foreach ($product as $key => $value) {
//    }
    
    
    public function printReceipt() {
        foreach ($this->products as $product) {
            foreach ($product as $key => $value) {
                echo '<br>' . $key . ': ' . $value;
                echo '<br>Nazwa produktu: ' . $product->getName();
                echo '<br>Cena: ' . $product->getPrice() . ' PLN';
                echo '<br>Ilość:  ' . $product->getQuantity();
                echo '<br>Łącznie: ' . $product->getTotalSum() . ' PLN<br>';
                $this->toPay += $product->getTotalSum();
            }
        } echo '<br>Do zapłaty: '. $this->toPay;
    }   

}
