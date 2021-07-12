<?php
class A {
    private function foo () {
        echo __CLASS__ . "\n";
    }

    public function test () { // Inside A context
        $this->foo();
        static::foo();
    }
}

class B extends A{
    // extend function foo => hàm foo vẫn thuộc A context => static::foo OK
}

class C extends A{
    private function foo () {
        // override function foo => hàm foo thuộc C context => static::foo ko gọi đc trong A context
    }
}

$b = new B();
$c = new C();
$b->test();
$c->test();