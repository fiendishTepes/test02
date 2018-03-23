<?php

class controller 
{
    public function model($model='')
    {
        include ROOT.'/fiendish/models/'.$model.'.php';
        return new model();
       
    }
    public function view($view, $data = [])
    {
        include ROOT.'/fiendish/view/'.$view.'.php';
    }
}

?>