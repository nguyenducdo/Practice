<?php
class Foo
{
    static $bar = 'static bar property';
    static function bar()
    {
        echo "bar\n";
    }
    function baz()
    {
        echo "baz\n";
    }
}

echo Foo::$bar . "\n";
$bar = "bar";
Foo::$bar();
$func = array("Foo", "bar");
$func(); // prints "bar"
$func = array(new Foo, "baz");
$func(); // prints "baz"
$func = "Foo::bar";
$func(); // prints "bar"