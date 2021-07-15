<?php
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }
}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.
$obj->value = 2;
echo $myValue;                // prints the new value of $obj->value, i.e. 2.
echo PHP_EOL;


function &func(){
    static $static = 0;
    $static++;
    return $static;
}

$var1 =& func();
echo "var1:", $var1; // 1
echo PHP_EOL;
func();
func();
echo "var1:", $var1; // 3
echo PHP_EOL;
$var2 = func(); // assignment without the &
echo "var2:", $var2; // 4
echo PHP_EOL;
func();
func();
echo "var1:", $var1; // 6
echo PHP_EOL;
echo "var2:", $var2; // still 4
echo PHP_EOL;
