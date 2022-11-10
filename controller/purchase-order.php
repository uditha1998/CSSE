<?php

include_once './../model/include.php';

if ($_POST['option'] == 'delete') {



    $PURCHASE_ORDER = new PurchaseOrder();
    $PURCHASE_ORDER->setId($_POST['id']);

    $result = $PURCHASE_ORDER->delete();

    if ($result) {



        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}

if ($_POST['option'] == 'update') {



    $PURCHASE_ORDER = new PurchaseOrder();
    $PURCHASE_ORDER->setStatus($_POST['status']);
    $PURCHASE_ORDER->setId($_POST['id']);

    $result = $PURCHASE_ORDER->update();

    if ($result) {



        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}