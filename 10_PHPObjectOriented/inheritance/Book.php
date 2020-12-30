<?php
class Book extends IItem {
//    public $name;
    public $author;
//
    public function getListingDescription(){
        return parent::getListingDescription() ." by ". $this->author;
    }
    public function getCode(){
        return $this->code;
    }
}