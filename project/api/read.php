<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    // echo "create task here";
    include  $_SERVER['DOCUMENT_ROOT'].'/learn/project/config/init.php';
    // $data = json_decode(file_get_contents("php://input"),true);
    http_response_code(200);    
    $product = new product();
    $data = $product->getProduct(false);
    echo json_encode(array("message" => "Successfullt received get request","data"=>$data));      
?>
