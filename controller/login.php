<?php
include_once './../model/User.php';;
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);

$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$type = $_POST['type'];



$USER = new User();

$USER->setLoginCredentials($username, $password,$type);

if ($USER->login()) {

 
    $result = ["status" => 'success'];

    echo json_encode($result);


} else {

    $result = ["status" => 'fail'];

    echo json_encode($result);

}
