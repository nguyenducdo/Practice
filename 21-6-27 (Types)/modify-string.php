<?php
// Get the first character of a string
$str = 'This is a test.';
echo "<b>$str</b>, ".strlen($str)."<br />";
$first = $str[0];
echo "first: ${first}.";
echo "<br />";
// Get the third character of a string
$third = $str[2];
echo "third: ${str[2]}";
echo "<br />";
// Get the last character of a string.
$last = $str[strlen($str) - 1];
echo "last: {$str[strlen($str) - 1]}";
echo "<br />";
// Modify the last character of a string
$str[strlen($str) - 2] = 'e';
echo "modified: $str";
echo "<br />";

$str[strlen($str) + 5] = 'x';
echo "<pre>modified: $str, {${strlen('hihi')}}</pre>". strlen($str);
echo "<br />";

$str = 'abc';

var_dump($str['1']);
echo "<br />";
var_dump(isset($str['1']));
echo "<br />";

var_dump($str['1.0']);
echo "<br />";
var_dump(isset($str['1.0']));
echo "<br />";

var_dump($str['x']);
echo "<br />";
var_dump(isset($str['x']));
echo "<br />";

var_dump($str['1x']);
echo "<br />";
var_dump(isset($str['1x']));
echo "<br />";

$arr = ['a',1,'c'];
echo $arr;
echo "<br />";
print_r($arr);
