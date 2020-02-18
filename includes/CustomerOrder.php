<?php

class CustomerOrder {
    
    public $items;
    public $total;
    
    public function __construct($items, $total) {
        
        $this->items = $items;
        $this->total = $total;
        
    }
    
    public function addItem($item) {
        
        $this->items[] = $item;
        
    }
    
    public function removeItem($index) {
        
        unset($this->items[$index]);
        
        $this->items = array_values($this->items);
        
    }
    
    public function calculateTotal() {
        
        $newTotal = 0;
        
        foreach ($this->items as $item) {
            
            $newTotal += (float)$item->price;
            $newTotal += 0.25 * count($item->extras);
        }
        
        $this->total = $newTotal;
        
    }
}

session_start();
if (isset($_SESSION['order'])) {
    
    $order = $_SESSION['order'];
    
} else {
    
    $order = new CustomerOrder([], 0);
    $_SESSION['order'] = $order;
}
?>