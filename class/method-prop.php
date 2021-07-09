<?php
include 'simple.php';

$obj = new Foo();
var_dump($obj);
var_dump($obj->bar);
var_dump($obj->bar());
var_dump(($obj->ano)());
// $obj->ano()