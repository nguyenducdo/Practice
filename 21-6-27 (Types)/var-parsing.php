<!-- simple -->
<b>Simple</b>
<hr/>
<?php
const EOL = "<br />";
$juice = "apple";

echo "He drank some $juice juice.".EOL;
echo "<br />";
// Invalid. "s" is a valid character for a variable name, but the variable is $juice.
echo "He drank some juice made of $juices.";
echo "<br />";
// Valid. Explicitly specify the end of the variable name by enclosing it in braces:
echo "He drank some juice made of ${juice}s.";

echo "<br />";

$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".EOL;
echo "He drank some $juices[1] juice.".EOL;
echo "He drank some $juices[koolaid1] juice.".EOL;

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";

    public function getName() {
        return $this->smith;
    }
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".EOL;
echo "$people->john then said hello to $people->jane.".EOL;
echo "$people->john's wife greeted $people->robert.".EOL;
echo "$people->robert greeted the two $people->smiths.".EOL; // Won't work
?>

<br/>
<br/>
<br/>

<!-- complex -->
<b>Complex</b>
<hr />
<?php
// Show all errors
error_reporting(E_ALL);

$great = 'fantastic';

// Won't work, outputs: This is { fantastic}
echo "This is { $great}".EOL;

// Works, outputs: This is fantastic
echo "This is {$great}".EOL;

// Works
echo "This square is {$square->width}00 centimeters broad.".EOL;


// Works, quoted keys only work using the curly brace syntax
echo "This works: {$arr['key']}".EOL;


// Works
echo "This works: {$arr[4][3]}".EOL;

// This is wrong for the same reason as $foo[bar] is wrong  outside a string.
// In other words, it will still work, but only because PHP first looks for a
// constant named foo; an error of level E_NOTICE (undefined constant) will be
// thrown.
// echo "This is wrong: {$arr[foo][3]}".EOL;

// Works. When using multi-dimensional arrays, always use braces around arrays
// when inside of strings
echo "This works: {$arr['foo'][3]}".EOL;

// Works.
echo "This works: " . $arr['foo'][3].EOL;

echo "This works too: {$obj->values[3]->name}".EOL;

$name = "hi";
echo "This is the value of the var named $name: {${$name}}".EOL;

echo "This is the value of the var named by the return value of \$object->getName(): {${$people->getName()}}".EOL;
echo "This is the value of the var named by the return value of \$object->getName(): {$people->getName()}".EOL;
echo $people->getName() . EOL;

// Won't work, outputs: This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}".EOL;
// echo "This is the value of the var named by the return value of getName(): {${getName()}}".EOL;

class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "<br />";
echo "{$foo->bar}\n".EOL;
echo "{$foo->$bar}\n".EOL;
echo "{$foo->{$baz[1]}}\n". $foo->{$baz[1]} .EOL;

echo "<br />";

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n".EOL;

// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n".EOL;
?>