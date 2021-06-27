<?php
function getArray() {
    return array(1, 2, 3);
}

$secondElement = getArray()[1];
var_dump($secondElement);
echo "<br />";
// or
list(, $secondElement) = getArray();
var_dump($secondElement);
echo "<br />";
$arr = [1,2,3];
$arr[] = 9;
$tmp = $arr;
$tmp[1] = 4; // không tham chiếu ?
unset($tmp[2]);
var_dump($tmp);
echo "<br />";
var_dump($arr);

echo "<br />";

$str = "abc";
$str[] = "x";
var_dump($str);
?>