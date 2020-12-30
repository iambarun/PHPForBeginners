<?php
require 'Item.php';
IItem::showCount();
$my_item = new IItem('PHP','10000 unique examples');
IItem::showCount();
$my_item = new IItem('PHP1','10000 unique examples1');
IItem::showCount();
//var_dump($my_item->name);
define('PIE',3.142);
define('WeekStart','Monday');
//define('PIE',2342);
echo PIE;
echo WeekStart;
echo IItem::MAX_LENGTH;
