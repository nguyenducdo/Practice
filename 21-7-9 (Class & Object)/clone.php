<?php
class SubObject {
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable {
    public $object1;
    public $object2;
    function __clone() {
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();
$obj->object1 = new SubObject(); // obj->object1 = 1;
$obj->object2 = new SubObject(); // obj->object2 = 2;

$obj2 = clone $obj;
// obj2->object1 = clone obj->object1 = 3;
// obj2->object2 = obj1->object2 = 2


print("Instances: ". SubObject::$instances . "\n");

print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);

var_dump($obj2->object2 == $obj->object2);