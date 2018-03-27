<?php

class controller 
{
    public function model($model='')
    {
        include ROOT.'/admin/app/models/'.$model.'.php';
        return new $model;
    }
    public function view($view, $data = [])
    {
        include ROOT.'/admin/app/view/'.$view.'.php';
    }
}

?>