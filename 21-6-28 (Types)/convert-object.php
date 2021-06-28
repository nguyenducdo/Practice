<?php
$obj = (object) array('1' => 'foo');
var_dump(gettype($obj));
echo "<br />";
var_dump(isset($obj->{'1'})); // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
echo "<br />";
var_dump(key($obj)); // outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously
echo "<br />";
var_dump((object)null);
