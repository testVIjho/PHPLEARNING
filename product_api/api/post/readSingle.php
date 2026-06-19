<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

include_once('../../config/Database.php');
include_once('../../model/Post.php');

$database = new Database();
$db = $database->connect();

$post = new Post($db);
//GET ID
// we can get the id from this method also
// $data = json_decode(file_get_contents("php://input"));
// $post->buyerID = $data->id;

$post->buyerID = isset($_GET['id']) ? $_GET['id'] : die();

//get post
$post->readSingle();

$post_arr = array(
    'id' => $post->buyerID,
    'productName' => $post->productName,
    'buyerName' => $post->buyerName,
    'quantity' => $post->quantity,
    'price' => $post->price,
    'productID' => $post->productID,
);

print_r(json_encode($post_arr));
