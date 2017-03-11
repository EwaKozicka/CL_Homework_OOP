# CL_Homework_OOP
==================================

##Description
This script allows to create products and shopping cart and manage them.


###Usage
==================================
require_once 'Product.php';
require_once 'ShoppingCart.php';

**creating new product:**
```php
$productName = new Product($description, $price, $quantity)
```
example: $banana = new Product('fruit', 10, 30)

**naming a product:**
```php
$productName->setName('banana')
```

**checking product's ID:**
```php
$productName->getID()
```
//returns e.g. 2

**total sum of products of one type:**
```php
$productName->getTotalSum() 
```
//returns total price of products, includes discount 20% if quantity above 3

**creating new cart:**
```php
$cart = new ShoppingCart
```

**adding products to cart:**
```php
$cart->addProduct($productName)
```

**removing product from cart:**
```php
$cart->removeProduct($productID)
```

**changing product's quantity in cart:**
```php
$cart->changeProductQuantity($productId, $newQuantity)
```

**printing receipt:**
```php
$cart->printReceipt()
```
//prints receipt with product's ID's, names, price, quantity and total sum