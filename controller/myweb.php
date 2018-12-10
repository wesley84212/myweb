<?php

class Myweb_Controller{

    public function index (){
        $models = new Myweb_Model;
        $data = $models->get_data();
        $password =$data['password'];
        $class = static::class;
        $temp = strtolower(str_replace('_Controller','',$class));
        require SERVER_ROOT.'/view/'.$temp.'.php';
    }

}