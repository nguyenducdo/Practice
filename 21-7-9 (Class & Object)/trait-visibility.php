<?php
trait A
{
    public function sayHello()
    {
        echo "Hello World \n";
    }
}

trait B
{
    public function sayWorld()
    {
        echo "World only \n";
    }
}

trait HelloWorld
{
    use A, B {
        B::sayWorld as sayWorldOnly;
    }
}

class MyClass1
{
    use HelloWorld {
        HelloWorld::sayHello as protected;
    }
}

class MyClass2
{
    use HelloWorld {
        HelloWorld::sayHello as private myPrivateHello;
    }
}

$obj1 = new MyClass1();
// $obj1->sayHello(); // ERROR: Call to protected method

$obj2 = new MyClass2();
$obj2->sayWorld(); // OK
$obj2->sayWorldOnly(); // OK
$obj2->sayHello(); // OK
// $obj2->myPrivateHello(); // ERROR: Call to private method
