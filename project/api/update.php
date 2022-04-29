<?php
// echo("<h1>Hello World</h1>");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// echo "create task here";
include  $_SERVER['DOCUMENT_ROOT'] . '/learn/project/config/init.php';
$update_datas = json_decode(file_get_contents("php://input"), true);
http_response_code(200);
// echo $update_datas;
// die()
foreach ($update_datas as $product_id => $update_stock) {
    // echo($update_id."=>".$update_stock);
    $product = new product();
    $data = $product->getProductbyId($product_id)[0];
    // var_dump($data->stock);
    $data->stock -= $update_stock;
    // var_dump("updated stock ".$data->stock);
    // var_dump("data ".$data);
    $d = [];
    foreach ($data as $key => $value) {
        $d[$key] = $value;
    }
    
    $result = $product->updateProductById($d, $product_id);
    // var_dump("result: ".$product_id.":".$result);
}
   
    // echo json_encode(array("message" => "Successfullt received get request","data"=>$update_datas));
