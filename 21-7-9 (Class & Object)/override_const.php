<?php
class A {
    const CONSTANT = 'A constant value';
    static $static = 'A static value';
}

interface C {
    const C_CONST = 'C constant value';
}

class B extends A implements C {
    const CONSTANT = 'B constant value';
    static $static = 'B static value';
    const D_CONST = 'B override C const';
}

$b = new B();
echo $b::$static . "\n";
echo $b::CONSTANT . "\n";
echo $b::C_CONST . "\n";