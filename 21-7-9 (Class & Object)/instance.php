<?php
class simple
{
    public $prop = 1;
    public int $interger; 
    public function get_prop() {
        return $this->prop;
    }
}

$instance = new simple();

// echo "instance: $instance \n";
var_dump($instance);