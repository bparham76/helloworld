<?php

namespace Bparham\Helloworld;

function simple_hello()
{
    echo 'Just saying simple hello to you dear.';
}

class Greetings
{
    function say_hello_to($name)
    {
        echo 'Hello beloved ' . $name . '!';
    }
}
