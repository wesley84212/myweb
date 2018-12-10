<?php
namespace MVC\core;
class Controller {

    function __construct(){
        $this->load();
    }

    private function load ($class){

        $temp =  strtolower(str_replace('_Controller','',$class));
        return require SERVER_ROOT.'/view/'.$temp.'.php';
    }

}
