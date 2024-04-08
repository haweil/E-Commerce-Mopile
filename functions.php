<?php
// require MySQL Connection
require ("database/DBController.php");

//require Product Class
require ("database/Product.php");

//require Product Class
require ("database/Cart.php");

//DbcControllerObject
$db = new DBController();

//Product Object
$product =new Product($db);
$product_shuffle = $product->getData();

//cart Object
$Cart = new Cart($db );

