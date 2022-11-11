<?php

include_once(dirname(__FILE__) . '/DBconnection.php');

class Supplier extends DBconnection {

    private $id;
    private $name;
    private $email;
    private $phone;
    private $address;
    private $status;

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $this->createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `supplier` (name, email,phone,address,status) VALUES  ("
                . "'" . $this->name . "', '"
                . $this->email . "', '"
                . $this->phone . "', '"
                . $this->address . "', '"
                . $this->status . "')";

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



    public function getAll() {



        $sql = "SELECT * FROM `supplier` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getterAllById() {

        if ($this->id) {

            $sql = "SELECT * FROM `supplier` WHERE `id`=" . $this->id;

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


        $sql = "SELECT name FROM `supplier`  WHERE `itemCode`='" . $id . "'";

        $query = mysqli_query($this->connection, $sql);

        $result = $query->fetch_assoc();

        return $result['name'];
    }



}
