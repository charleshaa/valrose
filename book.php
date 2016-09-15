<?php

    header('Content-Type: application/json');

    function mydie($status, $message){
        echo json_encode(array('status' => $status, 'message' => $message));
        die();
    }


    $p = $_POST;

    $type = $p['type'];


    if(!filter_var($p['email'], FILTER_VALIDATE_EMAIL)) mydie("error", "invalid_email");


    if($type == 'hotel'){

        if(!empty($p['arrival']) && !empty($p['departure'])){

            mydie("success", $p);

        } else {
            mydie("error", "no_dates");
        }

    } else if($type == 'restaurant'){

        if(!empty($p['date']) && !empty($p['hour'])){
            mydie("success", $p);
        } else {
            mydie("error", "no_dates");
        }

    } else {
        mydie("error", "invalid_type");
    }
 ?>
