<?php
include 'simple.php';

class ExtendClass extends Foo
{
    public function bar () {
        echo "child bar() \n";
        echo "parent ", parent::bar() , "\n";
    }
}

$child = new ExtendClass();
$child->bar();
echo Does\Not\Exist::class, "\n";
echo Not\Exist::class, "\n";