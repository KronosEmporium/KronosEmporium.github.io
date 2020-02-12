<?php include "includes/header.php" ?>
<?php include "includes/MenuItem.php" ?>

<main>

    <div class="foodMenu">

<?php

// Pull menu item data from MenuItems database table
    
$sql = "SELECT * FROM MenuItems";

if (!$result = $link->query($sql)) {
    die("There was an error running query[$link->connect_error]");
}

while ($row = $result->fetch_assoc()) {
    
    echo "<div class='menuItem'><p>" . $row['name'] . " " . $row['price'] . "</p><p>" . $row['description'] . "</p></div>";
    
    $items[] = new MenuItem ($row['itemID'], $row['name'], $row['description'], $row['price']);
}

?>
    
    </div>

    <div id="order"></div>
</main>

<?php include "includes/footer.php" ?>