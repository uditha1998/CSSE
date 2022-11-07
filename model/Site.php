<?php

include_once(dirname(__FILE__) . '/DBconnection.php');

class Site extends DBconnection {

    private $id;
    private $location;

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $this->createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `site` (location) VALUES  ("
                . "'"
                . $this->location . "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $sql = "UPDATE  `site` SET "
                . "`name` ='" . $this->name . "', "
                . "WHERE `id` = '" . $this->id . "'";

        $query = mysqli_query($this->connection, $sql);

        if ($query) {

            return $this->id;
        } else {

            return FALSE;
        }
    }

    public function delete() {

        $sql = 'DELETE FROM `site` WHERE id="' . $this->id . '"';

        return $query = mysqli_query($this->connection, $sql);
    }

    public function getAll() {



        $sql = "SELECT * FROM `site` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getterAllById() {

        if ($this->id) {

            $sql = "SELECT * FROM `site` WHERE `id`=" . $this->id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();

            $this->name = $result['name'];

            return $result;
        }
    }

}
