<?php

$makefoo = true;

/* We can't call foo() from here 
   since it doesn't exist yet,
   but we can call bar() */

bar();

if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

/* Now we can safely call foo()
   since $makefoo evaluated to true */

if ($makefoo) foo();

function bar() 
{
  echo "I exist immediately upon program start.\n";
}

/* We can't call bar() yet
   since it doesn't exist. */

foo_nested();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

bar_nested();

function foo_nested() 
{
  function bar_nested() 
  {
    echo "I don't exist until foo_nested() is called.\n";
  }
}