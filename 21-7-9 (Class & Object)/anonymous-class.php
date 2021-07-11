<?php
class Outer {
    private $prop = 1;
    protected $prop2 = 2;
    protected function func1 () {
        return 3;
    }
    public function func2 () {
        return new class ($this->prop) extends Outer {
            private $outer_priv;

            public function __construct($priv) {
                $this->outer_priv = $priv;
            }

            public function func3 () {
                return $this->prop2 + $this->outer_priv + $this->func1();
            }
        };
    }
}

// $outer = new Outer();
// $anoy = $outer->func2();
// echo $anoy->func3() . "\n";

echo (new Outer)->func2()->func3() . "\n";