<?php

class tests extends controller {
    function __construct()
    {
        
    }
    public function name($name = '')
    {
        echo 'I am '.$name;
    }
    public function register()
    {
        echo 'Wellcome To Method Register';
    }
}
