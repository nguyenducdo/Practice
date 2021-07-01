<?php
$foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');
$foo[1] = 'd';
list($w, $x, $y, $z) = $foo; // $z: Undefined offset 3
// list($w, $x, $y, 'foo' => $z) = $foo; // >= PHP 7.1
var_dump($foo, $w, $x, $y, $z);