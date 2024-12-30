<?php

include("../../config/config.php");


header("Access-Control-Allow-Method : POST");
header("Content-Type : application/json");

if($_SERVER['REQUESt_METHOD'] == 'POST'){

    $userName = $_POST['userName'];
    $email = $_POST['email'];

    echo $userName;
    echo $email; 

    $config = new Config();

    $res = $config->insertUser($userName,$email);


    echo $res;

    if($res){
        $response['data'] = 'user inserted successfully...';
    }else{
        $response['error'] = 'user inserted failed...';
    }

}else{
    $response['msg'] = ' onlt POST request allowed...';
}
echo json_encode($response);

?>