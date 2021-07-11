<?php
class Foo
{
    public static $my_static = 'foo';

    public function getStaticValue()
    {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic()
    {
        return parent::$my_static;
    }
}

print Foo::$my_static . "\n";

Foo::$my_static = 'modified';

$foo = new Foo();
print $foo->getStaticValue() . "\n";
print $foo->my_static . "\n";
print $foo::$my_static . __LINE__ ."\n";

$foo::$my_static = "Modified via object";

$classname = 'Foo';
print $classname::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";
