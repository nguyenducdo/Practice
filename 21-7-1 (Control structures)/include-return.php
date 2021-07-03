<?php

$foo = include 'include-return-1.php';
var_dump($foo); // string 'PHP'
var_dump($var);
// echo $foo . "\n"; // prints 'PHP'

$bar = include 'include-return-2.php';
var_dump($bar); // int 1 vì include successful 
var_dump($var);
// echo $bar . "\n"; // prints 1 vì include successful

outer_func();

echo dirname(__FILE__) . "\n";
echo dirname(dirname(__FILE__)) . "\n";
echo dirname(dirname(dirname(__FILE__))) . "\n";
