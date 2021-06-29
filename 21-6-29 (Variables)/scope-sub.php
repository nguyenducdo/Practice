<?php 
// echo $b; // undefined vì file này đc sử dụng trong local function scope mà $b có scope là global
echo $GLOBALS['b'];