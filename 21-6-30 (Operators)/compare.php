<?php
include('execute.php');
use Bar1\Foo1 as Foo;

var_dump(100 < TRUE); // FALSE - same as (bool)100 < TRUE
var_dump(-10 > FALSE); // TRUE - same as (bool)-10 > FALSE
var_dump(min(-100, -10, NULL, 10, 100)); // NULL - (bool)NULL < (bool)-100 is FALSE < TRUE (Convert all to bool)
var_dump(1.2 == 1.2);

echo "------- test instanceof --------\n";
$foo1 = new Foo();
$className = 'Bar1\Foo1';
var_dump($foo1 instanceof Bar1\Foo1);
var_dump($foo1 instanceof $className);
$className = 'Foo';
var_dump($foo1 instanceof $className);
