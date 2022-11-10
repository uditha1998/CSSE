<?php

include_once(dirname(__FILE__) . '/DBconnection.php');

class Material extends DBconnection {

    private $id;
    private $name;
    private $seller;
    private $unitPrice;
    private $quantity;

    public function __construct() {
        parent::__construct();
    }

    public function getMaterialName() {
        $sql = "SELECT * FROM `material_name` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $this->createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `material` (name, unitPrice,seller,quantity) VALUES  ("
                . "'" . $this->name . "', '"
                . $this->unitPrice . "', '"
                . $this->seller . "', '"
                . $this->quantity . "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $sql = "UPDATE  `purchase_order` SET "
                . "`name` ='" . $this->name . "', "
                . "`unitPrice` ='" . $this->unitPrice . "', "
                . "`seller` ='" . $this->seller . "', "
                . "`quantity` ='" . $this->quantity . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $query = mysqli_query($this->connection, $sql);

        if ($query) {

            return $this->id;
        } else {

            return FALSE;
        }
    }

    public function delete() {

        $sql = 'DELETE FROM `purchase_order` WHERE id="' . $this->id . '"';

        return $query = mysqli_query($this->connection, $sql);
    }

    public function getAll() {



        $sql = "SELECT * FROM `material` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getterAllById() {

        if ($this->id) {

            $sql = "SELECT * FROM `material` WHERE `id`=" . $this->id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();

            $this->name = $result['name'];
            $this->unitPrice = $result['unitPrice'];
            $this->seller = $result['seller'];
            $this->quantity = $result['quantity'];

            return $result;
        }
    }

    public function getName($id) {


            $sql = "SELECT name FROM `material_name`  WHERE `itemCode`='" . $id . "'";

            $query = mysqli_query($this->connection, $sql);

           $result = $query->fetch_assoc()  ;

            return $result['name'];
    }

    public function setAll($name, $seller, $price, $quantity) {
        $this->name = $name;
        $this->seller = $seller;
        $this->unitPrice = $price;
        $this->quantity = $quantity;
    }

}
