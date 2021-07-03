<?php

    for( $i = 0; $i < 3; ++ $i )
    {
        echo ' [', $i, '] ';
        switch( $i )
        {
            case 0: echo 'zero'; break;
            case 1: echo 'one' ; continue 2;
            case 2: echo 'two' ; break;
        }
        echo ' <' , $i, '> ';
    }
    echo "\n";
?>