<?php
require_once('../models/inventory_model.php');

$inventory = getInventory();

require_once('../views/show_inventory.php');
?>


<link rel="stylesheet" href="../views/show_inventory.css">
