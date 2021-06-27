<?php
// Show all errors
error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
print $arr['fruit'];  // apple
echo "<br />";
print $arr['veggie']; // carrot
echo "<br />";

// Incorrect.  This works but also throws a PHP error of level E_NOTICE because
// of an undefined constant named fruit
// 
// Notice: Use of undefined constant fruit - assumed 'fruit' in...
print $arr[fruit];    // apple
echo "<br />";

// This defines a constant to demonstrate what's going on.  The value 'veggie'
// is assigned to a constant named fruit.
define('fruit', 'veggie');

// Notice the difference now
print $arr['fruit'];  // apple
echo "<br />";
print $arr[fruit];    // carrot
echo "<br />";

// The following is okay, as it's inside a string. Constants are not looked for
// within strings, so no E_NOTICE occurs here
print "Hello $arr[fruit]";      // Hello apple
echo "<br />";

// With one exception: braces surrounding arrays within strings allows constants
// to be interpreted
print "Hello {$arr[fruit]}";    // Hello carrot
echo "<br />";
print "Hello {$arr['fruit']}";  // Hello apple
echo "<br />";

// This will not work, and will result in a parse error, such as:
// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// This of course applies to using superglobals in strings as well

// print "Hello $arr['fruit']";
// print "Hello $_GET['foo']";

// Concatenation is another option
print "Hello " . $arr['fruit']; // Hello apple
echo "<br />";
?>
<br />
<br />
<?php
function getIndex($var) {
    return $var;
}
$bar = 'veggie';
echo $arr[getIndex($bar)];
echo "<br />";
/************ TRICKs ***********/
$my_foo = 'getIndex';
echo "var-parsing: {$arr[getIndex($bar)]}, {$my_foo($bar)}";
?>