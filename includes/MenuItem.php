<?php

// MenuItem.php

class MenuItem {
    
    public $id;
    public $name;
    public $description;
    public $price;
    public $extras;
    
     public function __construct ($id, $name, $description, $price) {
        
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        
    } // eo constructor
    
    public function addExtra ($extra) {
        
        $this->extras[] = $extra;
        
    } // eo method addExtra
    
    // If there's time
//    public function removeExtra ($extra) {
//        
//    }
    
} // eo class Item
