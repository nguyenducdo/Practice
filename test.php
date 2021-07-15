<?php
// phpinfo();
// print_r(get_loaded_extensions());

class A {
    public static $foo = 1;
}

function test ($a, ...$b) {
    echo A::$foo . "\n";
    echo "function: " . __FUNCTION__ . "\n";
    var_dump($a);
    var_dump($b);
    subTest(...[5,6,7,8]);
}

function subTest(...$c) {
    echo "function: " . __FUNCTION__ . "\n";
    var_dump($c);
}

test(1,2,3,4);