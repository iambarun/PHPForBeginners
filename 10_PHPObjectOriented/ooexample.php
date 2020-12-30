<?php
require 'Item.php';
$my_item = new IItem();
$my_item -> name = 'Barun';
$my_item1 = new IItem();
$my_item1 -> name = 'Exenario';
//var_dump($my_item);
//var_dump($my_item->name);
//var_dump($my_item->description);
$my_item -> sayHello();
echo $my_item -> getName(), " ", $my_item1->getName();