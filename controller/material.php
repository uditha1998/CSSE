<?php

include_once './../model/include.php';
;

if ($_POST['action']=="create") {
    
    $name = $_POST['title'];
    $price = $_POST['price'];
    $seller = $_POST['seller'];
    $quantity = $_POST['quantity'];






    $MATERIAL = new Material();


$MATERIAL->setAll($name, $seller, $price, $quantity);
    if ($MATERIAL->create()) {


        $result = ["status" => 'success'];

        echo json_encode($result);
    } else {

        $result = ["status" => 'fail'];

        echo json_encode($result);
    }
}
