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
    public function get_search()
    {
        $cmd = 'python CP_Characteristic_v1.1.py';
        exec($cmd, $output);
        $result = array(
            'url_1' => $this->url_replace($output[0]),
            'url_2' => $this->url_replace($output[1]),
        );
        echo json_encode($result);
    }

    private function url_replace($str)
    {
        $result = str_replace('file://C:', '', $str);
        $result = str_replace('xampp\htdocs', '', $result);
        return substr($result, 1);
    }

}
