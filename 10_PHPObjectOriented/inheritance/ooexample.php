<?php
require 'IItem.php';
require 'Book.php';

$my_item = new IItem();
$my_item->name = "TV";

echo $my_item->getListingDescription();
echo "<br>";
//echo $my_item->code;
echo "<br>";
$new_Book = new Book();
$new_Book->name = 'Halmet';
$new_Book->author = 'Shakespear';

echo $new_Book->getListingDescription();
echo "<br>";
echo $new_Book->getCode();
