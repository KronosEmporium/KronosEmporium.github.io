<?php include "includes/MenuItem.php" ?>
<?php include "includes/CustomerOrder.php" ?>

<?php

$db_server = "mysql.crosbyallison.club";
$db_name = "itc250_foodtruck";
$db_user = "doofus";
$db_password = "P@ssw0rd1";

$link = mysqli_connect( $db_server, $db_user, $db_password, $db_name );

if ($link == false) {
    die("Connection failed: $link->connect_error");
}


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    
    case 'order.php':
        $title = "Order Online";
        $pageID = "Order Online";
        break;
        
    default:
        $title = "Food Truck";
        $pageID = "Food Truck";
        
}

$nav1['order.php'] = "Order Online";

?>