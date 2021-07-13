<?php
$baz = 6;
function foo(&$var)
{
    $var=3;
var_dump($var);
$var =& $GLOBALS["baz"];
var_dump($var);
}
$bar = 1;
foo($bar); 
var_dump($bar);
var_dump($baz);
?>