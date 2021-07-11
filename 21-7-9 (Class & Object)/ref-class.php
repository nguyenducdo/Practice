<?php
include 'simple.php';
$instance = new SimpleClass();
$instance->a = 1;
$assigned = $instance;
$reference = &$instance;
var_dump($instance->a);
var_dump($assigned->a);
var_dump($reference->a);
$instance = null;
var_dump($assigned);
var_dump($instance);
var_dump($reference);

// echo "-----test-----\n";
// $arr1 = [1,2,3];
// $arr2 = $arr1;
// $arr2[] = 4;
// $arr3 = &$arr1;
// $arr3[] = 9;
// $arr3 = NULL;
// var_dump($arr1);
// var_dump($arr2);
// var_dump($arr3);

// function test_ref (&$arr) {
//     $arr = NULL;
// }
// test_ref($arr3);
// var_dump($arr1);
// var_dump($arr3);
