<?php

// MenuItem.php

class MenuItem {
    
    public $name;
    public $price;
    public $extras;
    
     public function __construct ($name, $price, $extras) {
        
        $this->name = $name;
        $this->price = $price;
        $this->extras = $extras;
        
    } // eo constructor
    
    public function addExtra ($extra) {
        
        $this->extras[] = $extra;
        
    } // eo method addExtra
    
    // If there's time
//    public function removeExtra ($extra) {
//        
//    }
    
} // eo class Item
