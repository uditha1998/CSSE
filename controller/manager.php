<?php

include_once './../model/User.php';

$name = $_POST['name'];

$email = $_POST['email'];

$manager_type = $_POST['manager-type'];

$password = $_POST['password'];




$USER = new User();

$USER->setAll($name, $manager_type, $email, $password);

if ($USER->create()) {


    $result = ["status" => 'success'];

    echo json_encode($result);
} else {

    $result = ["status" => 'fail'];

    echo json_encode($result);
}
