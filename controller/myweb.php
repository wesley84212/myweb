<?php
include_once SERVER_ROOT . '/core/Controller.php';

class Myweb_Controller extends Controller
{

    public function index()
    {
        $class = static::class;

        $this->load_model($class);

        $models = new Myweb_Model;
        $data = $models->get_data();

        require $this->load_view($class);
    }
    public function login()
    {
        $data = $_POST;
        $class = static::class;

        $this->load_model($class);

        $models = new Myweb_Model;

        $result = $models->login($data);

        echo (json_encode($result));

    }

}
