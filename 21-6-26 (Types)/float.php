<?php
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "true";
}

echo "<hr/>";

$x = 8 - 6.43;  // which is equal to 1.599999..
$y = 1.57;
/** True nếu:
 * $x = 8 - 6.42;  // which is equal to 1.599999..
 * $y = 1.58;
 */
var_dump($x == $y); // is not true
echo "<br/>";
var_dump(round($x, 2));
echo "<br/>";
var_dump(round($y, 2));
echo "<br/>";
echo $y;
echo "<br/>";
var_dump(round($x, 2) == round($y, 2)); // this is true
?>
