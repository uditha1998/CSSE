<?php

include_once './../model/include.php';
;

if ($_POST['action'] == "create") {

    $location = $_POST['location'];
    $manager = $_POST['manager'];

    $SITE = new Site();


    $SITE->setSite($location, $manager);
    if ($SITE->create()) {


        $result = ["status" => 'success'];

        echo json_encode($result);
    } else {

        $result = ["status" => 'fail'];

        echo json_encode($result);
    }
}
