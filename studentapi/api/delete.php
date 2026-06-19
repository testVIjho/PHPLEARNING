<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:appilication/json");
header("Access-Control-Allow-Method:DELETE");
header("Access-Control-Allow-Header:Content-Type,Authorization,X-Requested-With");

include_once("../config/Database.php");
include_once("../model/Data.php");

$database = new Database();
$db = $database->connect();

$data = new Data($db);

$student = json_decode(file_get_contents("php://input"));
if (isset($student->id)) {
    $data->id = $student->id;
    if ($data->delete()) {
        echo json_encode(
            array(
                "Message" => "Student Deleted Successfully"
            )
        );
    } else {
        echo json_encode(
            array(
                "Message" => "Something went Wrong"
            )
        );
    }
}
