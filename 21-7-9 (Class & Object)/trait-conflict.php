 <?php
    trait A
    {
        public function smallTalk()
        {
            echo "a\n";
        }

        public function bigTalk()
        {
            echo "A\n";
        }
    }

    trait B
    {
        public function smallTalk()
        {
            echo "b\n";
        }

        public function bigTalk()
        {
            echo $this->foo . " B\n";
        }
    }

    trait C
    {
        public function bigTalk()
        {
            echo "C\n";
        }
    }

    class Talker
    {
        use A, B, C {
            A::bigTalk insteadof B, C;
            B::smallTalk insteadof A;
            // A::bigTalk as a_bigTalk; // Still conflict
            // B::smallTalk as b_smallTalk; // Still conflict
            B::bigTalk as talk;
        }

        public $foo = 'hi';

        function show()
        {
            $this->bigTalk();
            $this->smallTalk();
            $this->talk();
        }
    }

    $talker = new Talker();
    $talker->show();
    $talker->talk();
    $talker->smallTalk();
    $talker->bigTalk();