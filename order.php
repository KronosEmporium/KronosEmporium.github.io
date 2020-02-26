<?php include "includes/header.php" ?>

<main>

<div class="wrapper">
    <div class="foodMenu">
        <section>

<?php

if (isset($_POST['name'])) {
    
    $itemToAdd = new MenuItem ( $_POST['name'], $_POST['price'], [] );
    
    $order->addItem($itemToAdd);
    
    $order->calculateTotal();
    
    $_SESSION['order'] = $order;

} 
if (isset($_POST['remove'])) {
    
    $order->removeItem( (int)$_POST['remove'] );
    
    $order->calculateTotal();
    
    $_SESSION['order'] = $order;
    
}
if (isset($_POST['extra'])) {
    
    $order->items[$_POST['extraIndex']]->extras[] = $_POST['extra'];
    
    $order->calculateTotal();
    
    $_SESSION['order'] = $order;
    
}
    
// Pull menu item data from MenuItems database table
    
$sql = "SELECT * FROM MenuItems";

if (!$result = $link->query($sql)) {
    die("There was an error running query1[$link->connect_error]");
}

while ($row = $result->fetch_assoc()) {
    
    echo "<div class='menuItem'><img class='menuImage' src='images/" . $row['image'] . "' alt='" . $row['name'] . "'><p>" . $row['name'] . " $" . $row['price'] . "</p><p>" . $row['description'] . "</p><form method='POST' action=''><input type='hidden' name='name' value='" . $row['name'] . "'><input type='hidden' name='price' value='" . $row['price'] . "'><button type='submit' value='add'>Add</button></form></div>";
    
    
    $itemExtras = [];
    
    $sql2 = "SELECT Extras.name FROM Extras WHERE Extras.itemID = " . $row['itemID'];
    
    if (!$result2 = $link->query($sql2)) {
        die("There was an error running query[" . $link2->connect_error . "]");
    }

    while ($row2 = $result2->fetch_assoc()) {
        $itemExtras[] = $row2['name'];
    }
    
    $items[] = new MenuItem ($row['name'], $row['price'], $itemExtras );
}

function printOrder() {
    
    global $order;
    
    echo "
    </section>
    </div>
     </div>
    

    <div id='customerOrder'><h1>Your Order:</h1>";
    
    for ($x = 0; $x < count($order->items); $x++) {
        
        echo "<p>" . $order->items[$x]->name . " <strong>$" . $order->items[$x]->price . "</strong> " . printExtras($x) . "<form method='POST' action=''><input type='hidden' name='remove' value='" . $x . "'><input type='submit' value='X'></form></p>";
    }
    
    echo "$" . number_format($order->total,2) . "</div>";
        
}

printOrder();


function printExtras($index) {
    
    global $order, $items;
    
    $extrasStr = "<br>";
    
    if (count($order->items[$index]->extras) > 0) {
        
        $extrasStr .= "<em>";
        
        foreach ($order->items[$index]->extras as $extra) {
            
            $extrasStr .= "(" . $extra . ") ";
            
        }
        
        $extrasStr .= "$" . number_format((0.25 * count($order->items[$index]->extras)),2) . "</em>";
    }
        
    $extrasStr .= "<form method='POST' action=''><input type='hidden' name='extraIndex' value='" . $index . "'><select name='extra' onchange='this.form.submit()'><option selected disabled>Choose a modifier</option>";
        
    for ($x = 0; $x < count($items); $x++) {

        if ($items[$x]->name == $order->items[$index]->name) {
            
            foreach ($items[$x]->extras as $extra) {
                
                $extrasStr .= "<option value='" . $extra . "'>" . $extra . "</option>";
            }
        }
    }
    
        
    $extrasStr .= "</select></form>";
    
    return $extrasStr;
}



?>

</main>

<?php include "includes/footer.php" ?>