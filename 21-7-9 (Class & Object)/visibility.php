<?php
class Test
{
    private $foo;
    function __construct($arg)
    {
        $this->foo = $arg;
    }

    private function bar()
    {
        echo "Inside private function \n";
    }

    public function assign($other)
    {
        $other->foo = 'Other';
        var_dump($other);

        $other->bar();
    }
    public function show_bar() {
        $this->bar();
    }
}

class SubTest extends Test{
    private function bar() {
        echo "Inside private SubTest function bar \n";
    }
}

$test = new Test('test');

$test->assign(new Test('other'));

$subTest = new SubTest('sub test');
$subTest->show_bar();