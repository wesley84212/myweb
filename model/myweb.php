<?php

include_once SERVER_ROOT . '/core/Model.php';
class Myweb_Model extends Model
{

    public function __construct()
    {

    }

    public function get_data()
    {
        $db_connect = $this->load_database();
        $sql = 'SELECT * FROM test';
        $result = $db_connect->query($sql);
        $data = null;
        while ($row = $result->fetch_assoc()) {
            $data = array(
                'name' => $row['name'],
                'mail' => $row['mail'],
            );
        }
        return $data;
    }

    public function login($input)
    {

        $db_connect = $this->load_database();
        $sql = 'SELECT name,password FROM test WHERE name="' . $input["account"] . '"AND password="' . $input["password"] . '"';
        $result = $db_connect->query($sql);
        $row = $result->num_rows;
        $data = null;
        if ($row === 0) {
            $data = array(
                'status' => 400,
                'message' => '帳號或密碼錯誤',
            );
        } else {
            $data = array(
                'status' => 200,
                'message' => '登入成功，歡迎' . $input["account"] . '',
            );
        }
        return $data;

    }

}
