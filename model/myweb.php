<?php

include_once SERVER_ROOT . '\core\Model.php';
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

}
