<?php
class BaseClass {
    private function __construct() {
        echo "In base class \n";
    }
}

class SubClass extends BaseClass {
    private function __construct($arg) {
        // parent::__construct();
        echo "In subclass $arg \n";
    }

    // public static function getInstance() {
    //     return new SubClass();
    // }

    public static function getStatic($arg) {
        return new static($arg);
    }

    function __destruct()
    {
        print "DESTROY " . __CLASS__ . "\n";
    }
}

class OtherSubClass extends BaseClass {

}

// $base = new BaseClass();
// $sub = SubClass::getInstance();
$sub = SubClass::getStatic(2);

// $other = new OtherSubClass();
