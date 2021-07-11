<?php
namespace Foo;

class MyClass
{
    const CONSTANT = 'constant value ';
    function show_constant()
    {
        echo self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$class_name = 'Foo\MyClass';

echo $class_name::CONSTANT . "\n";

$class = new MyClass();
$class->show_constant();
echo $class::CONSTANT . "\n";


$bar = MyClass::class;
echo "$bar: " . $bar::CONSTANT . "\n";

const ONE = 1;
class few {
    const TWO = ONE * 2;
    const THREE = self::TWO + 1;
    const SENTENCE = "The value of THREE is:". self::THREE ."\n";
}

echo few::SENTENCE;