<?php
$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 is changed,
             // $arr1 is still array(2, 3)
             
$arr3 = &$arr1;
$arr3[] = 9; // now $arr1 and $arr3 are the same
print_r($arr1);
echo "<br />";
print_r($arr2);
?>