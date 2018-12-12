<?php

class Controller
{

    public $db = null;
    public function __construct()
    {

    }

    public function load_view($class = '')
    {

        $temp = strtolower(str_replace('_Controller', '', $class));

        return SERVER_ROOT . '/view/' . $temp . '.php';
    }

    public function load_model($class = '')
    {

        $temp = strtolower(str_replace('_Controller', '', $class));

        $file = SERVER_ROOT . '/model/' . $temp . '.php';

        if (file_exists($file)) {

            include_once $file;

        } else {

            die(strtolower($filename) . ' model is not found!');
        }

    }

    public function load_api($api_name, $api_ver)
    {
        $path = SERVER_ROOT . '/api/' . $api_name . '/' . $api_ver . '';
        $api_url = '' . SITE_ROOT . '/api/' . $api_name . '/' . $api_ver . '/';
        $file = scandir($path);

        foreach ($file as $filename) {
            if (strpos($filename, 'js')) {
                echo '<script src="' . $api_url . $filename . '"></script>';
            }

        }

    }

}
