<?php

include_once(dirname(__FILE__) . '/DBconnection.php');

class PurchaseOrder extends DBconnection {

    private $id;
    private $item;
    private $price;
    private $quantity;
    private $supplier;
    private $staff;
    private $description;
    private $status;
    private $createdAt;

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $this->createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `purchase_order` (description, item,price,qunatity, supplier, staff, status,createdAt) VALUES  ("
                . "'" . $this->description . "', '"
                . $this->item . "', '"
                . $this->price . "', '"
                . $this->quantity . "', '"
                . $this->supplier . "', '"
                . $this->staff . "', '"
                . $this->status . "', '"
                . $this->createdAt . "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $sql = "UPDATE  `purchase_order` SET "
                . "`description` ='" . $this->description . "', "
                . "`item` ='" . $this->item . "', "
                . "`price` ='" . $this->price . "', "
                . "`quantity` ='" . $this->quantity . "', "
                . "`supplier` ='" . $this->supplier . "', "
                . "`staff` ='" . $this->staff . "', "
                . "`status` ='" . $this->status . "', "
                . "`createdAt` ='" . $this->createdAt . "' "
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

    public function getterAllByServices() {



        $sql = "SELECT * FROM `purchase_order` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getterAllById() {

        if ($this->id) {

            $sql = "SELECT * FROM `purchase_order` WHERE `id`=" . $this->id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();

            $this->description = $result['description'];
            $this->item = $result['item'];
            $this->price = $result['price'];
            $this->quantity = $result['quantity'];
            $this->staff = $result['staff'];
            $this->supplier = $result['supplier'];
            $this->status = $result['status'];
            $this->createdAt = $result['createdAt'];

            return $result;
        }
    }

}
