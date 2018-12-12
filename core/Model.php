<?php

class Model
{

    public function __construct()
    {

    }

    public function __destruct()
    {

        mysqli_close($this->load_database());
    }

    public function load_database()
    {

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
        }

        $mysqli->set_charset('utf8');
        return $mysqli;
    }

}
