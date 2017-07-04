<?php
//everything inbetween the curly braces is the class

class Product extends Object {

//NAME OF TABLE FOR PHP INSERT
protected static $table="beers";
protected static $table_columns= array("name", "quantity", "price");

public $name;
public $quantity;
public $price;

}














?>