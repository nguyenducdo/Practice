<?php
class A {
    protected static $test = "class A";

    public function show () {
        print self::$test . "\n"; // class A
        print static::$test . "\n"; // class B
    }
}

class B extends A {
    protected static $test = "class B";
}

$obj = new B();
$obj->show();