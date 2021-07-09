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
