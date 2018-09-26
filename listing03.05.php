<?php
    class ShopProduct {
        public $title               = "default product";
        public $producerMainName    = "main name";
        public $producerFirstName   = "first name";
        public $price               = 0;
        
        function getProducer() {
            return "{$this->producerFirstName}".
                   " {$this->producerMainName}";
        }
    }

$product1 = new ShopProduct();
$product1->title = "My Antonia";
$product1->producerMainName  = "Cather";
$product1->producerFirstName = "Willa";
$product1->price = 5.99;

print "title: ".$product1->title ."\n";
print "</br>";
print "author: ".$product1->getProducer()."\n";
// output:
// author: Willa Cather
?>
