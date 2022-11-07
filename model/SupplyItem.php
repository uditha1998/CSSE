<?php

include_once(dirname(__FILE__) . '/DBconnection.php');

class SupplyItem extends DBconnection {

    private $supplier;
    private $item;

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $this->createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `supply_item` (supplier, item) VALUES  ("
                . "'" . $this->supplier . "', '"
                . $this->item . "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $sql = "UPDATE  `supply_item` SET "
                . "`supplier` ='" . $this->supplier . "', "
                . "WHERE `item` = '" . $this->item . "'";

        $query = mysqli_query($this->connection, $sql);

        if ($query) {

            return $this->id;
        } else {

            return FALSE;
        }
    }

    public function delete() {

        $sql = 'DELETE FROM `supply_item` WHERE id="' . $this->id . '"';

        return $query = mysqli_query($this->connection, $sql);
    }

    public function getAll() {



        $sql = "SELECT * FROM `supply_item` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getterAllById() {

        if ($this->id) {

            $sql = "SELECT * FROM `supply_item` WHERE `id`=" . $this->id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();

            $this->item = $result['item'];
            $this->supplier = $result['supplier'];

            return $result;
        }
    }

}
