<?php
var_dump(PHP_INT_SIZE);
echo "<br/>";
var_dump(PHP_INT_MAX);
echo "<br/>";
var_dump(PHP_INT_MIN);
echo "<br/>";
$large_number = 9223372036854775807;
var_dump($large_number);                     // int(9223372036854775807)

$large_number = 9223372036854775808;
var_dump($large_number);                     // float(9.2233720368548E+18)

$million = 1000000;
$large_number =  50000000000000 * $million;
var_dump($large_number);                     // float(5.0E+19)

echo "<hr/>";

var_dump(24/3);         // float(3.5714285714286)
var_dump(intdiv(25, 7)); // int(3)
var_dump((int) (25/7)); // int(3)
var_dump(intval(true)); // int(3)
var_dump(round(25/7));  // float(4)
var_dump((int)(0x7fffffffffffffff + 1));     // int(-9223372036854775808)
var_dump((int)$large_number);                     // float(5.0E+19)
