<?php
class SimpleClass {
    public $a;
}

class Test {
    static public function getNew() {
        return new static;
    }
}

class Child extends Test {
}

class Foo {
    public $bar = 'property';
    public $ano;

    public function __construct() {
        $this->ano = function() {
            return "anonymous";
        };
    }

    public function bar() {
        return 'method';
    }

}