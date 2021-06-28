<?php
class foo {
    static function callIt(callable $callback) {
        $callback();
        // call_user_func($callback); // lỗi
    }
   
    static function doStuff() {
        echo "Hello World!";
    }
}

// foo::callIt('foo::doStuff');
foo::callIt(['foo', 'doStuff']); // lỗi 

?>

<?php
class Foo2 {
    public static function doAwesomeThings() {
        FunctionCaller::callIt('self::someAwesomeMethod');
    }

    public static function someAwesomeMethod() {
        // fantastic code goes here.
    }
}

class FunctionCaller {
    public static function callIt(callable $func) {
        call_user_func($func);
    }
}

Foo2::doAwesomeThings();
?>