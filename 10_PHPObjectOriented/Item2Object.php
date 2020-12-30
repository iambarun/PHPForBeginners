<?php
require 'Item2.php';
$my_item = new Item2();

$my_item->setName("Exenario");
$my_item->setDescription(" Exenario Details");

echo $my_item->getName();
echo $my_item->getDescription();