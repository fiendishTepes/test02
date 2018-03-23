<?php

class home extends controller {
    public function index($input = '')
    {
        $user = $this->model('user');
        $user->name = $input;
        $this->view('home/index', ['name' => $user->name]);
    }
    public function usermodel($name = '')
    {
        $us = $this->model('user')->name=$name;
        echo $us;
        
        
    }
}
