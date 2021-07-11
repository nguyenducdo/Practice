<?php
include 'simple.php';

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 === $obj2);
var_dump($obj2 instanceof Test);
$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);
$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);