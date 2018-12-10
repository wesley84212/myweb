<?php
class Myweb_Controller{
    public $temp = 'myweb';

    public function index (){
        $models = new Myweb_Model;
        $data = $models->get_data();
        $password =$data['password'];
        print_r($data);
    }

}