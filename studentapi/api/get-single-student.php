<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:application");
//Required file paths
include_once("../config/Database.php");
include_once("../model/Data.php");

//Database Instantiate
$database = new Database();
$db = $database->connect();

$data = new Data($db);
$data->id = isset($_GET['id']) ? $_GET['id'] : die();

if (isset($data->id) && ($data->id)) {
    $data->readSingle();
    $student_data = [
        "id" => $data->id,
        "name" => $data->name,
        "age" => $data->age,
        "course" => $data->course
    ];
    echo json_encode($student_data);
} else {
    echo json_encode(
        array("Message" => "Please set the ID")
    );
}
