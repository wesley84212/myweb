<?php

class Myweb_Model {

    private $user_file =array(
        'name'=>'wesley',
        'password'=>'00000',
        'mail'=>'wesley84212@gmail.com',
    
    );

    public function __construct(){

    }

    public function get_data(){
        $get_mail = $this->user_file;
        return $get_mail;
    }

}
